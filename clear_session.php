<?php
include 'trans.php';
$trans = new trans();
$trans->ClearSession();

header('location:index.php');