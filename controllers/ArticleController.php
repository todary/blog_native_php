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
            $articlModel->image = $_POST["image"];
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
        if(isset($_GET['articleId']))
        {
            $articlModel = new Article;
            $articlModel->id=$_GET['articleId'];
            $articlModel->delete_data();
            $this->listArticlesAction();

        }
    }

}
