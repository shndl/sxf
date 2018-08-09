<?php
@$uname=$_REQUEST["uname"];
@$upwd=$_REQUEST["upwd"];
session_start();
$_SESSION['loginUname'] = $uname;

require("init.php");
$sql = "select count(uid)as c from pj_admin where uname='$uname' AND upwd=md5('$upwd')";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
//echo $row[0];
if($row[0]==0){
    echo '{"code":-1,"msg":"用户名或密码有误"}';
}else{
echo '{"code":1,"msg":"登录成功"}';
}
?>