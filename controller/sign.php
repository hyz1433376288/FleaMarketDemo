<?php

var_dump($_POST);

$uid = $_POST['uid'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];
$tel = $_POST['tel'];
$school = $_POST['school'];
$grade = $_POST['grade'];
$major = $_POST['major'];
$nick = $_POST['nick'];

require_once ('../class/DB.php');
require_once ('../include/alert.php');
$db = new DB();

/*
 * 用户提交的信息预处理
 */

$sql = "INSERT INTO `users` (uid,password,school,grade,major,nick,tel,privilege) VALUES ('$uid','$password','$school','$grade','$major','$nick','$tel',0)";
echo $sql;
$res = $db->query($sql);
if($res){
    require_once ('../include/login_session.php');
    alt('注册成功，点击跳转到首页','../index.php');
}else{
    alt('注册失败，请检查信息','../sign.html');
}

