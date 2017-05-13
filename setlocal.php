<?php
include 'trans.php';
$trans = new trans();
$trans->SetSession($_POST['lang']);

header('location:index.php');