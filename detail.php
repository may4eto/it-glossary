<?php 
require('app/app.php');

$view_bag = [
    'title' => 'Glossary of IT Terms',
    'heading' => 'Glossary'
];

if(!isset($_GET['term'])) {
    redirect('index.php');
}

$data = get_term($_GET['term']);
if ($data==false) {
    view('not_found');
    die();
}

$term = $data->term;

view('detail', $data);