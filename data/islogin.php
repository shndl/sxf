<?php
/**
* 返回当前登录用户的信息：
* {"uid":10, "uname":"ding"}
*/
require("init.php");
session_start();
//@$output['uid'] = $_SESSION['loginUid'];
@$output['uname'] = $_SESSION['loginUname'];

echo json_encode($output);