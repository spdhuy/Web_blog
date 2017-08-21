<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 8/4/17
 * Time: 2:33 PM
 */
class BlogController
{
    public function getBlog(){
        require_once './models/Blog.php';
        $Blog = new Blog();
        $Blog->setIdCategory($_POST['id_category']);
        $Blog->setFullname($_POST['username']);
        $Blog->setFeatureImage($_POST['feature_image']);
        $Blog->setPostedDay($_POST['posted_day']);
        $Blog->setContent($_POST['content']);
        $Blog->setTitle($_POST['title']);
        return $Blog;
    }
    public function getAll()
    {
        require_once './models/BlogDB.php';
        $BlogDb = new BlogDB();
        $blogs = $BlogDb->getAll();
        require './views/blogs/list.php';
    }
    public function addBlog(){
        require_once './models/BlogDB.php';
        if(isset($_POST['id_category'])&&isset($_POST['username'])&&$_POST['title']){
            $Blog = $this->getBlog();
            $BlogDb = new BlogDB();
            $BlogDb->addBlog($Blog);
            header('?');
        }else
            require ('./views/blogs/addPage.php');
    }
    public function editBlog(){
        require_once './models/BlogDB.php';
        if(isset($_POST['id_blog'])&&isset($_POST['id_category'])&&isset($_POST['username'])&&$_POST['title']){
            $Blog = $this->getBlog();
            $BlogDb = new BlogDB();
            $BlogDb->editBlog($Blog);
            header('?');
        }else
            require ('./views/blogs/edit.php');
    }
    public function deleteBlog(){
        require_once './models/BlogDB.php';
        if(isset($_GET['id_blog'])){
            $idBlog=$_GET['id_blog'];
            $BlogDb = new BlogDB();
            $BlogDb->deleteBlog($idBlog);

            header('?');
        }
    }
    public function viewDetailBlog(){
        require_once './models/BlogDB.php';
        if(isset($_GET['id_blog'])){
            $idBlog=$_GET['id_blog'];
            $BlogDb = new BlogDB();
            $blog = $BlogDb->getBlogById($idBlog);

            require './views/client/detail.php';
        }
    }
}