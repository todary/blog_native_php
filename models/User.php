<?php

class User extends My_Model
{

    protected $table_name = "user";
    protected $primary_key = "id";
    public $id;
    public $name;
    public $username;
    public $password;
    protected $fields = array("name", "username", "password");

//    public $fields2 = array("title", "test", "image");

    public function __construct($id = -1)
    {
//        if ($id != -1) {
//            $this->id = $id;
//            $result = $this->list_data_id();
//            $article = mysqli_fetch_assoc($result);
//            $this->title = $article['title'];
//            $this->test = $article['test'];
//            $this->image = $article['image'];
//        }
    }


    function check()
    {
        $this->field_search = 'username';
        return $this->search();
    }

    function login()
    {
        global $mansDb;
        $reslut = $mansDb->query("select * from " . $this->table_name . " where username='{$this->username}' and password='{$this->password}'");
        if ($reslut->num_rows) {
            while ($row = mysqli_fetch_assoc($reslut)) {
                foreach ($this->fields as $column) {
                    $this->$column = $row[$column];
                }
            }
            return true;
        } else {
            return false;
        }
    }

    function list_data()
    {
        return $this->all_data();
    }


    function list_data_id()
    {
//        $this->fields=array("id");
//        $this->list_id();
        return $this->list_id();
    }

    function insert_data()
    {
        return $this->add();
    }

    function update_data()
    {
        return $this->edit();
    }

    function delete_data()
    {
        return $this->delete();
    }

}
