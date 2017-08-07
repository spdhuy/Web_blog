<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/24/17
 * Time: 3:25 PM
 */
class Blog{
    private $id_blog;
    private $username;
    private $id_category;
    private $title;
    private $feature_image;
    private $content;
    private $postedDay;

    /**
     * Blog constructor.
     * @param $id_blog
     * @param $username
     * @param $id_cagetory
     * @param $title
     * @param $feature_image
     * @param $content
     * @param $postedDay
     */
    public function __construct($id_blog, $username, $id_category, $title, $feature_image, $content, $postedDay)
    {
        $this->id_blog = $id_blog;
        $this->username = $username;
        $this->id_category = $id_category;
        $this->title = $title;
        $this->feature_image = $feature_image;
        $this->content = $content;
        $this->postedDay = $postedDay;
    }

    /**
     * @return mixed
     */
    public function getIdBlog()
    {
        return $this->id_blog;
    }

    /**
     * @param mixed $id_blog
     */
    public function setIdBlog($id_blog)
    {
        $this->id_blog = $id_blog;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * @param mixed $id_cagetory
     */
    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getFeatureImage()
    {
        return $this->feature_image;
    }

    /**
     * @param mixed $feature_image
     */
    public function setFeatureImage($feature_image)
    {
        $this->feature_image = $feature_image;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getPostedDay()
    {
        return $this->postedDay;
    }

    /**
     * @param mixed $postedDay
     */
    public function setPostedDay($postedDay)
    {
        $this->postedDay = $postedDay;
    }

    /**
     * Blog constructor.
     * @param $idBlog
     * @param $username
     * @param $idCagetory
     * @param $title
     * @param $featureImage
     * @param $content
     * @param $postedDay
     */


}