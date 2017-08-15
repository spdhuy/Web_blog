<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 8/3/17
 * Time: 5:25 PM
 */
require 'Blog.php';
require 'DB.php';
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/25/17
 * Time: 4:33 PM
 */
class BlogDB extends DB {
    /**
     * @return array
     */
    public function getAccountByBlog($blog,$conn){
        require_once 'Account.php';
        $username = $blog->getUsername();
        $query = "SELECT * FROM account WHERE  username='$username'";
        $rows = $conn->query($query);
        foreach ($rows as $row){
            $account = new Account($row['username'],$row['password'],$row['fullname'],$row['phone'],$row['address'],$row['email'],$row['age'],$row['gender'],$row['description'],$row['avatar']);
            return $account;
        }
    }
    public function getBlogById($id_blog){
        $conn = $this->connect();
        $query = "SELECT * FROM blog where id_blog = '$id_blog'";
        $rows = $conn->query($query);
        foreach ($rows as $row) {
            $blog = new Blog($row['id_blog'],$row['username'],$row['id_category'],$row['title'],$row['feature_image'],$row['content'],$row['posted_day']);
            $blog->setAccount($this->getAccountByBlog($blog,$conn));
            return $blog;
        }
    }
    public function getAll(){
        $conn = $this->connect();
        $query = "SELECT * FROM blog";
        $rows = $conn->query($query);
        $blogs = [];
        foreach ($rows as $row) {
            $blog = new Blog($row['id_blog'],$row['username'],$row['id_category'],$row['title'],$row['feature_image'],$row['content'],$row['posted_day']);
            $blog->setAccount($this->getAccountByBlog($blog,$conn));
            $blogs[] = $blog;
        }
        return $blogs;
    }

    public function generateId(){
        $conn = $this->connect();
        $query = "SELECT * FROM blog WHERE id_blog=(SELECT MAX(id_blog) FROM blog);";
        $rows = $conn->query($query);
        if($rows->rowCount()==0){
            return 'BL001';
        }
        else {
            foreach ($rows as $row) {
                $id =(intval(substr($row['id_blog'],4))+1)+"";
                return 'BL00'.$id;
            }
        }
    }
    public function addBlog($blog){
        $conn = $this->connect();
        $username = $blog->getUsername();
        $id_blog = $this->generateId();
        $id_category = $blog->getIdCategory();
        $title = $blog->getTitle();
        $feature_image = $blog->getFeatureImage();
        $content = $blog->getContent();
        $posted_day = $blog->getPostedDay();
        $query = "INSERT INTO blog VALUES ('$id_blog','$username','$id_category','$title','$feature_image','$content','$posted_day')";
        $conn->query($query);
    }
    public function editBlog($blog){
        $conn = $this->connect();
        $username = $blog->getUsername();
        $id_blog = $blog->getIdBlog();
        $id_category = $blog->getIdCategory();
        $title = $blog->getTittle();
        $feature_image = $blog->getFeatureImage();
        $content = $blog->getContent();
        $posted_day = $blog->getPostedDay();
        $query = "UPDATE blog SET username='$username',id_category='$id_category',title='$title',feature_image='$feature_image',content='$content',posted_day='$posted_day' WHERE id_blog='$id_blog'";
        $conn->query($query);
    }
    public function deleteBlog($id_blog){
        $conn = $this->connect();
        $query = "DELETE FROM blog WHERE id_blog = '$id_blog'";
        $conn->query($query);
    }
}
?>