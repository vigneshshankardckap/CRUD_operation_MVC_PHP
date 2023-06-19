<?php
require_once "models/Model.php";

class Controller {
    private $userModel;

    public function __construct() {


        $this->userModel = new UserModel();
    }

    public function createNewdata($products,$files) {

        if($products && $files){
            $this->userModel->insertdata($products,$files);


            header("location:/");
        }else{
            require "views/products/createdata.php";
        }

    }

    public function edit($product,$files) {


        $this->userModel->update($product,$files);
        require 'views/products/edit.php';


    }

    public function deletedata($id) {
        $this->userModel->deleteid($id);


    }

    public function listProducts() {


        $allproducts=$this->userModel->getall();
        require 'views/products/list.php';
    }

    public function viewdata($id) {
        $onedata=$this->userModel->read("$id");
        require 'views/products/edit.php';
    }
}
