<?php

class Article extends My_Model {

    protected $table_name = "article";
    protected $primary_key = "id";
    public $id;
    public $title;
    public $text;
    public $image;
    protected $fields = array("title", "text", "image");
//    public $fields2 = array("title", "test", "image");

    public function __construct($id = -1) {
//        if ($id != -1) {
//            $this->id = $id;
//            $result = $this->list_data_id();
//            $article = mysqli_fetch_assoc($result);
//            $this->title = $article['title'];
//            $this->test = $article['test'];
//            $this->image = $article['image'];
//        }
    }

    function list_data() {
        return $this->all_data();
    }
    
    function list_data_id() {
//        $this->fields=array("id");
//        $this->list_id();
        return $this->list_id();
    }

    function insert_data() {
        return $this->add();
    }

    function update_data() {
        return $this->edit();
    }

    function delete_data() {
        return $this->delete();
    }

}
