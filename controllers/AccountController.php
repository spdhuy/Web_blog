<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 8/4/17
 * Time: 2:33 PM
 */
class AccountController
{
    public function getAccount(){
        $account = new Account();
        $account->setUsername($_POST['username']);
        $account->setPassword($_POST['password']);
        $account->setFullname($_POST['username']);
        $account->setAddress($_POST['address']);
        $account->setAge($_POST['age']);
        $account->setAvatar($_POST['avatar']);
        $account->setDescription($_POST['description']);
        $account->setPhone($_POST['phone']);
        $account->setGender($_POST['gender']);
        return $account;
    }
    public function getAll()
    {
        require_once './models/AccountDB.php';
        $AccountDb = new AccountDB();
        $accounts = $AccountDb->getAll();
        require './views/accounts/list.php';
    }
    public function addAccount(){
        require_once './models/AccountDB.php';
        if(isset($_POST['username'])&&isset($_POST['password'])){
            $account = $this->getAccount();
            $AccountDb = new AccountDB();
            $AccountDb->addAccount($account);
            header('Location: http://localhost:8080/Web_blog/');
        }else
            require ('./views/accounts/addPage.php');
    }
    public function editAccount(){
        require_once './models/AccountDB.php';
        if(isset($_POST['id'])&&isset($_POST['name'])){
            $account = $this->getAccount();
            $AccountDb = new AccountDB();
            $AccountDb->editAccount($account);
            header('Location: http://localhost:8080/Web_blog/');
        }else
            require ('./views/accounts/edit.php');
    }
    public function deleteAccount(){
        require_once './models/AccountDB.php';
        if(isset($_GET['username'])){
            $username=$_GET['username'];
            $AccountDb = new AccountDB();
            $AccountDb->deleteAccount($username);

            header('Location: http://localhost:8080/Web_blog/');
        }
    }
}