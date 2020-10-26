<?php
session_start();
$_SESSION['uid'] = $_POST['uid'];
$_SESSION['major'] = $res['major'];
$_SESSION['grade'] = $res['grade'];
$_SESSION['nick'] = $res['nick'];