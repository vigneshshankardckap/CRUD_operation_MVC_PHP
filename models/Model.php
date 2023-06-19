<?php

class database
{
    public $db;
    public function __construct(){
        try {
            $this->db= new PDO
            ("mysql:host=localhost;dbname=productdata",
                "admin",
                "welcome");

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

class UserModel extends database {

    public function insertdata($data,$files)
    {
        move_uploaded_file($files["tmp_name"],"img/" .$files["name"]);
        $imagePath= "img/".$files["name"];
        $products_name =$data['product_name'];
        $price =$data['price'];
        $sku =$data['sku'];
        $brands =$data['brands'];
        $manufactured =$data['manufactured'];
        $avl_stock =$data['stock'];

      $this->db ->query( "Insert into products (product_name,price,image,sku,brand,manufactured,availabe_stock) values ('$products_name','$price','$imagePath','$sku','$brands','$manufactured','$avl_stock')");

    }
    public function read($id) {


        $query =$this->db->query("select * from products where id =$id");
        $datas=$query->fetchAll(PDO::FETCH_OBJ);
        return $datas;

    }

    public function update($data,$files) {
    

        move_uploaded_file($files["tmp_name"],"img/" .$files["name"]);
        $imagePath= "img/".$files["name"];

        $products_name =$data['product_name'];
        $price =$data['price'];
        $sku =$data['sku'];
        $brands =$data['brands'];
        $manufactured =$data['manufactured'];
        $avl_stock =$data['stock'];
        $id =$data['id'];
            $this->db ->query("Update products set product_name ='$products_name',                                     price='$price',image='$imagePath',sku='$sku',brand='$brands',                                    manufactured=$manufactured,availabe_stock=$avl_stock where id='$id'");
        header("location:/");

    }

    public function deleteid($id) {

       $this->db ->query( "DELETE FROM products WHERE id = $id;");
       header("location:/");
      
    }

    public function getall() {
       $query =$this->db->query("select * from products");
       $query->execute();
       $datas=$query->fetchAll(PDO::FETCH_OBJ);
       return $datas;

    }
}