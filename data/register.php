<?php
@$uname = $_REQUEST["uname"];
@$upwd = $_REQUEST["upwd"];
$sql = "INSERT INTO pj_admin VALUES(null,'$uname',md5('$upwd'))";
require("init.php");
$result = mysqli_query($conn,$sql);
if($result){
    echo '{"code":1,"msg":"注册成功"}';
}else{
echo '{"code":-1,"msg":"注册失败"}';
}

?>