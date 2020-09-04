<?php
require_once "controller/user.php";
class admin extends user
{
    public function index()
    {
        $pr = $this->model->getdata();
        require "view/admin/admin.html";

    }

    public function show(){
        $id = $_GET['id'];
        $b = $this->model->get($id);
        $title = $b["title"];
        $img = $b["img"];
        $des = $b["descr"];
        $create = $b["create_at"];
        $update = $b["update_at"];
        $status = $b['stt'];
        require "view/admin/show.html";
    }
    public function delete(){
        $id = $_GET['id'];
        $this->model->delete($id);
        $pr = $this->model->getdata();
        require_once "view/admin/admin.html";
    }
    public function edit(){
        $id = $_GET['id'];
        $b = $this->model->get($id);
        $img = $b["img"];
        require "view/admin/edit.html";
    }
    public function update(){
        
        if(isset($_POST['update'])){
            $id = $_GET['id'];
            $title = $_POST['Title'];
            $des = $_POST['Description'];
            $status = $_POST['status'];
            $this->model->update($id,$title,$des,$status);
            $this->index();
        }

    }
    public function addnew(){
        require_once "view/admin/add.html";
    }
    public function add(){
        if(isset($_POST['sm'])){
            $title = $_POST['tit'];
            $des = $_POST['des'];
            $img = $_POST['img'];
            $status = $_POST['stt'];
            $time = date("Y/m/d");
            $this->model->add($title,$des,$img,$status, $time);
            $this->index();
        }
        
        }
    }



?>