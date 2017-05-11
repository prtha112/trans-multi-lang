<?php
include 'trans.php';
$trans = new trans();
$trans->CheckSession($_POST['lang']);

header('location:index.php');