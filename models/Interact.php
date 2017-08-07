<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/24/17
 * Time: 3:44 PM
 */
 class Interact{
     private $id_interact;
     private $id_blog;
     private $username;
     private $type;
     private $content;

     /**
      * Interact constructor.
      * @param $id_interact
      * @param $id_blog
      * @param $username
      * @param $type
      * @param $content
      */
     public function __construct($id_interact, $id_blog, $username, $type, $content)
     {
         $this->id_interact = $id_interact;
         $this->id_blog = $id_blog;
         $this->username = $username;
         $this->type = $type;
         $this->content = $content;
     }

     /**
      * @return mixed
      */
     public function getIdInteract()
     {
         return $this->id_interact;
     }

     /**
      * @param mixed $id_interact
      */
     public function setIdInteract($id_interact)
     {
         $this->id_interact = $id_interact;
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

     /**
      * Interact constructor.
      * @param $idInteract
      * @param $idBlog
      * @param $username
      * @param $type
      * @param $content
      */

 }