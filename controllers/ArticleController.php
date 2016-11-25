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
            if ($articlModel->insert_data() >= 1) {
                echo "success";
            }
        } else {
            $articlModel = new Article;
            $articlModel->insert_data();
            //require "views/article/add_category.php";
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

    }

    function deleteArticleAction()
    {

    }

}
