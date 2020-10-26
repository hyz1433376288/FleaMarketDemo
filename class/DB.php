<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020-07-26
 * Time: 11:08
 */


// 数据库连接类
class DB{
    //私有的属性
    private $host;
    private $port;
    private $user;
    private $pass;
    private $db;
    private $charset;
    private $link;
    //私有的构造方法
    public function __construct(){
        $this->host =  'localhost';
        $this->port =  '3306';
        $this->user =  'root';
        $this->pass =  'root';
        $this->db =  'ts';
        $this->charset= 'utf8';
        //连接数据库
        $this->db_connect();
        //选择数据库
        $this->db_usedb();
        //设置字符集
        $this->db_charset();
    }
    //连接数据库
    private function db_connect(){
        $this->link=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        if(!$this->link){
            echo "数据库连接失败<br>";
            echo "错误编码".mysqli_errno($this->link)."<br>";
            echo "错误信息".mysqli_error($this->link)."<br>";
            exit;
        }
    }
    //设置字符集
    private function db_charset(){
        mysqli_query($this->link,"set names {$this->charset}");
    }
    //选择数据库
    private function db_usedb(){
        mysqli_query($this->link,"use {$this->db}");
    }

    //执行sql语句的方法
    public function query($sql){
        $res=mysqli_query($this->link,$sql);
        if(!$res){
            echo "sql语句执行失败<br>";
            echo "错误编码是".mysqli_errno($this->link)."<br>";
            echo "错误信息是".mysqli_error($this->link)."<br>";
        }
        return $res;
    }
}