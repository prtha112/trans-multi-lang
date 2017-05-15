<?php
include 'trans.php';
$trans = new trans();
$trans->setLang($_POST['lang']);

header('location:index.php');