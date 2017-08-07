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
    public function getAll(){
        $conn = $this->connect();
        $query = "SELECT * FROM blog";
        $rows = $conn->query($query);
        $blogs = [];
        foreach ($rows as $row) {
            $blog = new Blog($row['id_blog'],$row['username'],$row['id_category'],$row['title'],$row['feature_image'],$row['content'],$row['posted_day']);
            $blogs[] = $blog;
        }
        return $blogs;
    }

    public function addBlog($blog){
        $conn = $this->connect();
        $username = $blog->getUsername();
        $id_blog = $blog->getIdBlog();
        $id_category = $blog->getIdCategory();
        $title = $blog->getTittle();
        $feature_image = $blog->getFeatureImage();
        $content = $blog->getContent();
        $posted_day = $blog->getPostedDay();
        $query = "INSERT INTO blog VALUES ('$id_blog','','$username','$id_category','$title','$feature_image','$content','$posted_day')";
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