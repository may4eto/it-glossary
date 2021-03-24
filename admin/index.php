<?php
session_start();
require('../app/app.php');
$view_bag = [
    'title' => 'Glossary of IT Terms',
];
ensure_user_is_authenticated();
view('admin/index', get_terms());