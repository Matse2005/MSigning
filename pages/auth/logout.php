<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

session_start();
session_destroy();
location('/');
