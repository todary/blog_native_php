<?php

// Actions ...
class ArticleController
{

    function addArticleAction()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == "post") {
            // store data in database ...
            $articlModel = new Article;
            $articlModel->title = $_POST["title"];
            $articlModel->text = $_POST["text"];
//            $articlModel->image = $_POST["image"];
            if (isset($_FILES['image'])) {

                $errors= array();
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_tmp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];
                $ext=explode('.',$_FILES['image']['name']);
                $ext=end($ext);
                $file_ext=strtolower($ext);
                $expensions= array("jpeg","jpg","png");
                if(in_array($file_ext,$expensions)=== false){
                    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                }

                if($file_size > 2097152){
                    $errors[]='File size must be excately 2 MB';
                }

                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,CDN.DS."images".DS.$file_name);
                }else{
                    print_r($errors);
                }
            }
            if ($articlModel->insert_data() >= 1) {
                $this->listArticlesAction();
            }
        } else {

            require "views/article/add_articles.php";
        }
    }


    function listArticlesAction()
    {
        // Step#1 get|insert data in|from model ..
        $articlModel = new Article;
        $result = $articlModel->list_data();
        // Step#2 display result in certain view ..
        include "views/article/list_articles.php";
    }

    function listArticleAction()
    {
        // Step#1 get|insert data in|from model ..
        $articlModel = new Article;
        $result = $articlModel->list_data();
        // Step#2 display result in certain view ..
        include "views/article/list_articl.php";
    }

    function editArticleAction()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == "post") {
            // store data in database ...
            $articlModel = new Article($_GET['articleId']);
            $articlModel->title = $_POST["title"];
            $articlModel->text = $_POST["text"];
            $articlModel->image = $_POST["image"];
            if ($articlModel->update_data() >= 1) {
                $this->listArticlesAction();
            }
        } else {
            $articlModel = new Article($_GET['articleId']);
            require "views/article/editForm.php";
        }

    }

    function deleteArticleAction()
    {
        if (isset($_GET['articleId'])) {
            $articlModel = new Article;
            $articlModel->id = $_GET['articleId'];
            $articlModel->delete_data();
            $this->listArticlesAction();

        }
    }

}
