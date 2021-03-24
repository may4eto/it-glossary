<?php
session_start();
require('../app/app.php');
$view_bag = [
    'title' => 'Glossary of IT Terms',
];
ensure_user_is_authenticated();

if (is_get()) {
    $key = sanitize($_GET['key']);
    if (empty($key)) {
        view('not_found');
        die();
    }
    $term = get_term($key);
    if ($term === false) {
        view('not_found');
        die();
    }
    view('admin/edit', $term);
}

if (is_post()) {
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);
    $url = sanitize($_POST['url']);
    $original_term = sanitize($_POST['original-term']);
    if (empty($term) || empty($definition) || empty($url) || empty($original_term)) {
        // to do: display message
    } else {
        update_term($original_term, $term, $definition, $url);
        redirect('index.php');
    } 
}