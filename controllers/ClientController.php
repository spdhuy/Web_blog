<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 8/7/17
 * Time: 1:39 PM
 */
class ClientController
{
    public function getBlog()
    {
        require_once './models/Blog.php';
        $Blog = new Blog($_POST['id_blog'],$_POST['username'],$_POST['id_category'],$_POST['title'],basename($_FILES["feature_image"]["name"]),$_POST['content'],new DateTime()+"");
        return $Blog;
    }

    public function getAll()
    {
        require_once './models/BlogDB.php';
        $blogDb = new BlogDB();
        $blogs = $blogDb->getAll();
        require './views/client/home.php';
    }
    public function signIn(){

    }
    public function viewCreateBlogPage(){
        require './views/client/create_blog.php';
    }
    public function postBlog(){
        require_once './models/BlogDB.php';
        if(isset($_POST['username'])&&isset($_POST['title'])){
            $this->uploadImage();
            $blog = $this->getBlog();
            $blogDb = new BlogDB();
            $blogDb->addBlog($blog);
            header('Location: http://localhost:8080/Web_blog/');
        }else  require './views/client/create_blog.php';
    }
    public function uploadImage(){
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["feature_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["feature_image"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["feature_image"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}