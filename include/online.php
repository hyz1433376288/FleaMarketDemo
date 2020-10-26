<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020-10-26
 * Time: 19:51
 */
session_start();

function online(){
    if(isset($_SESSION['uid']) && isset($_SESSION['nick']) && isset($_SESSION['major']) && isset($_SESSION['grade'])){
//        echo $_SESSION['uid'].$_SESSION['nick'].$_SESSION['major'].$_SESSION['grade'];
        return true;
    }
//    echo $_SESSION['uid'].$_SESSION['nick'].$_SESSION['major'].$_SESSION['grade'];
//    echo 'FFFF';
    return false;
}
