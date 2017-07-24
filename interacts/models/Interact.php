<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/24/17
 * Time: 3:44 PM
 */
 class Interact{
     private $idInteract;
     private $idBlog;
     private $username;
     private $type;
     private $content;

     /**
      * Interact constructor.
      * @param $idInteract
      * @param $idBlog
      * @param $username
      * @param $type
      * @param $content
      */
     public function __construct($idInteract, $idBlog, $username, $type, $content)
     {
         $this->idInteract = $idInteract;
         $this->idBlog = $idBlog;
         $this->username = $username;
         $this->type = $type;
         $this->content = $content;
     }

     /**
      * @return mixed
      */
     public function getIdInteract()
     {
         return $this->idInteract;
     }

     /**
      * @param mixed $idInteract
      */
     public function setIdInteract($idInteract)
     {
         $this->idInteract = $idInteract;
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
     public function getType()
     {
         return $this->type;
     }

     /**
      * @param mixed $type
      */
     public function setType($type)
     {
         $this->type = $type;
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

 }