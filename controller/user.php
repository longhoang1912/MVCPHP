<?php
require_once "model/model.php";
class user
{
    protected $model;
    public function __construct()
    {
        $this->model= new model();
    }
    public function index(){
        $pr = $this->model->getdata();
        $b = count($pr);
        require "view/user/user.html";

    }
    public function title($id){
        $b = $this->model->get($id);
        $title = $b['title'];
        $img = $b['img'];
        $des = $b['descr'];
        require "view/user/title.html";
    }
}
?>