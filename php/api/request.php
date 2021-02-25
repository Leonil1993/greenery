<?php
require_once realpath('../../vendor/autoload.php');
header('Content-Type: application/json; charset=utf-8', true);
error_reporting();
session_start();

use Greenery\Php\Classes\Sql\AddUser;
use Greenery\Php\Classes\Sql\UpdateUser;
use Greenery\Php\Classes\Sql\DeleteUser;
use Greenery\Php\Classes\Sql\UserInfo;

// logout
if (htmlspecialchars(isset($_REQUEST['logout'])))
{
    session_unset();
    echo json_encode(true);
    //header("location:../../pages/home.php");
}

// mag add og bago na user sa database
if (htmlspecialchars(isset($_REQUEST['signup'])))
{
    $addUser = new AddUser(json_decode($_REQUEST['signup']));
    echo json_encode($addUser->addUser());
    //echo $_REQUEST['signup'];
}
// mag update og user information sa database
if (htmlspecialchars(isset($_REQUEST['update-info'])))
{
    $updateUser = new UpdateUser(json_decode($_REQUEST['update-info']));
    echo json_encode($updateUser->userUpdateInfo());
    //echo json_encode(json_decode($_REQUEST['update-info']));
}
// mag update og user password sa database
if (htmlspecialchars(isset($_REQUEST['update-email'])))
{
   $updateUser = new UpdateUser(json_decode($_REQUEST['update-email']));
   echo json_encode($updateUser->userUpdateEmail());
   //echo json_encode(json_decode($_REQUEST['update-email']));
}
// mag delete og user sa database
if (htmlspecialchars(isset($_REQUEST['user-delete'])))
{
    $deleteUser = new DeleteUser(json_decode($_REQUEST['user-delete']));
    echo json_encode($deleteUser->deleteUser());
   // echo json_encode(json_decode($_REQUEST['user-delete']));
}
// mag kuhag data sa database para e validate ang email
if (htmlspecialchars(isset($_REQUEST['validate-email-subs'])))
{
    $userInfo = new UserInfo(json_decode($_REQUEST['validate-email-subs']));
    echo json_encode($userInfo->validateEmailSubs());
    //echo json_encode($_REQUEST['validate-email']);
}
// mag kuha og mga data sa database nya ilabay sa javascript
if (htmlspecialchars(isset($_REQUEST['user-data'])))
{
    $userInfo = new UserInfo(null);
    echo json_encode($userInfo->getAllUser());
    // echo json_encode("tae");
}
// mag kuha og mga data sa database nga edit ang user nya ilabay sa javascript
if (htmlspecialchars(isset($_REQUEST['user-edit'])))
{
    $userInfo = new UserInfo(json_decode($_REQUEST["user-edit"]));
    echo json_encode($userInfo->getEditUser());
    //echo json_encode(json_decode($_REQUEST["user-edit"]));
}

// mag validate og email og password para mka login
if (htmlspecialchars(isset($_REQUEST['login'])))
{
    $userInfo = new UserInfo(json_decode($_REQUEST['login']));
    echo json_encode($userInfo->validateEmailPassword());
    //echo json_encode(json_decode($_REQUEST['login']));
}



