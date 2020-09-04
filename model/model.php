<?php

require_once "config/config.php";
class model
{
    private $data;
    public function __construct()
    {
        $this->data= new database();
    }
    public function getData(){
        $tb = $this->data->DBreturn("SELECT * FROM `mydatabase");
        while($r=mysqli_fetch_array($tb))
        {
            $res[]=$r;
        }
        return $res;
    }
    public function get($id){
        $tb = $this->data->DBreturn("SELECT id, title, descr, img, stt, create_at, update_at FROM mydatabase WHERE id = ".$id);
        while($r=mysqli_fetch_array($tb))
        {
            $res[]=$r;
        }
        return $res[0];
    }
    public function delete($id){
        $this->data->DBreturn("DELETE from mydatabase where id=".$id);
    }
    public function add($title,$des,$img,$status, $time){

        $this->data->DBreturn("INSERT INTO mydatabase(title,descr,img,stt,create_at) VALUES ('$title', '$des', '$img', '$status', '$time')");
    }
    public function update($id,$title,$des,$status)
    {
        $this->data->DBreturn("UPDATE mydatabase SET title='".$title."',descr='".$des."',stt='".$status."',update_at= NOW() WHERE id=".$id);

    }
}


?>
