<?php
session_start();
require('../app/app.php');
$view_bag = [
    'title' => 'Glossary of IT Terms',
];
ensure_user_is_authenticated();
if(is_post()) {
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);
    $url = sanitize($_POST['url']);
}
if (empty($term) || empty($definition) || empty($url)) {
    // to do: display message
} else {
    add_term($term, $definition, $url);
    redirect('index.php');
}
view('admin/create');