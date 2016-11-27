<?php

// Actions ...
class UserController
{

    function loginAction()
    {

        if (isset($_SESSION['user'])) {
            require "views/user/profiel.php";
        } else {
            if (strtolower($_SERVER['REQUEST_METHOD']) == "post") {
                $user = new  User();
                $user->username = $_POST['User_Name'];
                if ($user->check()) {
                    $user->password = $_POST['User_Pass'];

                    if ($user->login()) {
                        $_SESSION['user'] = $user->username;
                        $_SESSION['id'] = $user->id;
                        require "views/user/profiel.php";
                    } else {
                        echo 'password not correct';
                    }
                } else {
                    echo 'username not correct ';
                }
            } else {
                require "views/user/login.php";
            }

        }


    }
    function loginActionz()
    {

        if (isset($_SESSION['user'])) {
            require "views/user/profiel.php";
        } else {
            if (strtolower($_SERVER['REQUEST_METHOD']) == "post") {
                $user = new  User();
                $user->User_Name = $_POST['User_Name'];
                if ($user->check()) {
                    $user->User_Pass = $_POST['User_Pass'];

                    if ($user->login()) {
                        $_SESSION['user'] = $user->User_Name;
                        $_SESSION['id'] = $user->UserID;
                        $_SESSION['isDeleted'] = $user->User_IsDeleted;
                        require "views/user/profiel.php";
                    } else {
                        echo 'password not correct';
                    }
                } else {
                    echo 'username not correct ';
                }
            } else {
                require "views/user/login.php";
            }

        }


    }

    function logoutAction()
    {
        if (isset($_SESSION['user'])) {
            session_unset($_SESSION['user']);

            require "views/user/login.php";
        } else {
            require "views/user/login.php";

        }

    }


    function addUserAction()
    {
        die('heee');
        if (strtolower($_SERVER['REQUEST_METHOD']) == "post") {
            // store data in database ...
            $UserModel = new User;
            $UserModel->title = $_POST["title"];
            if ($UserModel->insert_data() >= 1) {
                echo "success";
            }
        } else {
            $UserModel = new User;
            $UserModel->insert_data();
            //require "views/article/add_category.php";
        }
    }

    function listUsersAction()
    {
        // Step#1 get|insert data in|from model ..
        $UserModel = new User;
        $result = $UserModel->list_data();
      
        // Step#2 display result in certain view ..
        include "views/user/user.php";
    }

    function listUserAction()
    {
        // Step#1 get|insert data in|from model ..
        $UserModel = new User;
        $result = $UserModel->list_data();

        // Step#2 display result in certain view ..
        include "views/user/user.php";
    }

    function editUserAction()
    {

    }

    function deleteUserAction()
    {

    }

}
