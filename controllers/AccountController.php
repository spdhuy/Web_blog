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
        $AccountDb = new AccountDB();
        session_start();
        $account = $AccountDb->getAccountByUsername($_SESSION['user']);
        if(isset($_FILES["avatar"])) $avatar = basename($_FILES["avatar"]["name"]);
        else $avatar = $account->getAvatar();
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $description = $_POST['description'];
        $account = new Account($username,$password,$fullname,$phone ,$address,$email ,$age ,$gender,$description,$avatar);
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
            header('?');
        }else
            require ('./views/accounts/addPage.php');
    }
    public function editAccount(){
        require_once './models/AccountDB.php';
        if(isset($_POST['username'])&&isset($_POST['password'])){
            $account = $this->getAccount();
            $AccountDb = new AccountDB();
            $AccountDb->editAccount($account);
            header('?');
        }else
            require ('./views/accounts/edit.php');
    }
    public function deleteAccount(){
        require_once './models/AccountDB.php';
        if(isset($_GET['username'])){
            $username=$_GET['username'];
            $AccountDb = new AccountDB();
            $AccountDb->deleteAccount($username);

            header('?');
        }
    }
    public function signIn(){
        require './views/client/sign_in.php';
    }
    public function signUp(){
        require './views/client/register.php';
    }
    public function register(){
        require_once './models/AccountDB.php';
        if(isset($_POST['username'])&&isset($_POST['password'])){
            $account = new Account($_POST['username'],md5($_POST['password']),'','','',$_POST['email'],'','','','');
            $AccountDb = new AccountDB();
            $AccountDb->addAccount($account);
            header('?');
        }else
            require ('./views/client/register.php');
    }
    public function login(){
        require_once './models/AccountDB.php';
        if(isset($_GET['username'])&&isset($_GET['password'])){
            $AccountDb = new AccountDB();
            try {
                $account = $AccountDb->getAccountByUsernameAndPassword($_GET['username'], md5($_GET['password']));
                if($account == null) {
                    header('?page=sign_in');
                }
                session_start();
                $_SESSION['user'] = $account->getUsername();
                header('?');;
            }
            catch (Exception $e){
                header('?');;
            }
        }else
            require ('./views/client/sign_in.php');
    }
    public function viewDetailAccount(){
        require_once './models/AccountDB.php';
        if(isset($_GET['username'])){
            $username=$_GET['username'];
            $AccountDb = new AccountDB();
            $account = $AccountDb->getAccountByUsername($username);

            require './views/client/detailAccount.php';
        }
    }
    public function editInfo(){
        require_once './models/AccountDB.php';
        session_start();
        $AccountDb = new AccountDB();
        $account = $AccountDb->getAccountByUsername($_SESSION['user']);
        require './views/client/edit_account_info.php';
    }
    public function updateInfo(){
        require_once './models/AccountDB.php';
        if(isset($_FILES['avatar'])) $this->uploadImage();
        $account = $this->getAccount();
        $AccountDb = new AccountDB();
        $AccountDb->editAccount($account);
        $account = $AccountDb->getAccountByUsername($_SESSION['user']);
        require './views/client/edit_account_info.php';
    }
    public function uploadImage(){
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
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
            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}