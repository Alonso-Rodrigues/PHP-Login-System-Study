<?php
$page = $_GET['page'] ?? 'home';
include "pages/{$page}.php";
