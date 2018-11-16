<?php
function users_data(){
    $file = fopen("../../db/User.txt","r");
    if ($file){
        $users = array(array());
        $i = 0;
        while (!feof($file)) { //判断是否到最后一行
            $data = fgets($file); //读取一行文本
            $user = array(substr($data,0,strpos($data,",")),substr($data,strpos($data,",")+1,strripos($data,",")-strpos($data,",")-1));
            $users[$i]=$user;
            $i++;
        }
    }
    fclose($file);//关闭文件
    return $users;
}

function checkusers($username,$password){
    foreach (users_data() as $key => $value) {
        if(md5($value[0])==$username&&md5($value[1])==$password)return true;
    }
    return false;
}
?>