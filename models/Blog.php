<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/24/17
 * Time: 3:25 PM
 */
class Blog{
    private $idBlog;
    private $username;
    private $idCagetory;
    private $title;
    private $featureImage;
    private $content;
    private $postedDay;

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
    public function __construct($idBlog, $username, $idCagetory, $title, $featureImage, $content, $postedDay)
    {
        $this->idBlog = $idBlog;
        $this->username = $username;
        $this->idCagetory = $idCagetory;
        $this->title = $title;
        $this->featureImage = $featureImage;
        $this->content = $content;
        $this->postedDay = $postedDay;
    }

    /**
     * @return mixed
     */
    public function getIdBlog()
    {
        return $this->idBlog;
    }

    /**
     * @param mixed $idBlog
     */
    public function setIdBlog($idBlog)
    {
        $this->idBlog = $idBlog;
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
    public function getIdCagetory()
    {
        return $this->idCagetory;
    }

    /**
     * @param mixed $idCagetory
     */
    public function setIdCagetory($idCagetory)
    {
        $this->idCagetory = $idCagetory;
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
        return $this->featureImage;
    }

    /**
     * @param mixed $featureImage
     */
    public function setFeatureImage($featureImage)
    {
        $this->featureImage = $featureImage;
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


}