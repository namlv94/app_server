<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 5/10/2017
 * Time: 1:44 PM
 */
require_once("../operation/const.php");
require_once("../operation/Operation.php");
if (isset($_POST[TOKEN]) && isset($_POST[PAGE])){
    $token = $_POST[TOKEN];
    $page = $_POST[PAGE];
    $id = getIdUsernameByToken($token);
    if ($id){
        $res = loadStatus($page,$id);
            ResponseMessage(CODE_OK,"ok",$res);
    }
    else{
        ResponseMessage(CODE_FAIL,"Token sai",null);
    }
}
else
    ResponseMessage(CODE_ERROR,"Chưa nhập dữ liệu",null);