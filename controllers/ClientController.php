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
        $Blog = new Blog();
        $Blog->setUsername($_POST['id_blog']);
        $Blog->setPassword($_POST['id_category']);
        $Blog->setFullname($_POST['username']);
        $Blog->setAddress($_POST['feature_image']);
        $Blog->setAge($_POST['posted_day']);
        $Blog->setAvatar($_POST['content']);
        $Blog->setDescription($_POST['title']);
        return $Blog;
    }

    public function getAll()
    {
        require_once './models/BlogDB.php';
        $BlogDb = new BlogDB();
        $blogs = $BlogDb->getAll();
        require './views/client/home.php';
    }
    public function signIn(){

    }
}