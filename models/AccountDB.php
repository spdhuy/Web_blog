<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 8/3/17
 * Time: 4:40 PM
 */
require 'Account.php';

require 'DB.php';
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/25/17
 * Time: 4:33 PM
 */
class AccountDB extends DB {
    /**
     * @return array
     */
    public function getAll(){
        $conn = $this->connect();
        $query = "SELECT * FROM account";
        $rows = $conn->query($query);
        $accounts = [];
        foreach ($rows as $row) {
            $account = new Account($row['username'],$row['password'],$row['fullname'],$row['phone'],$row['address'],$row['email'],$row['age'],$row['gender'],$row['description'],$row['avatar']);
            $accounts[] = $account;
        }
        return $accounts;
    }

    public function addAccount($account){
        $conn = $this->connect();
        $username = $account->getUsername();
        $password = $account->getPassword();
        $fullname = $account->getFullname();
        $phone = $account->getPhone();
        $address = $account->getAddress();
        $email = $account->getEmail();
        $age = $account->getAge();
        $gender = $account->getGender();
        $description = $account->getDescription();
        $avatar = $account->getAvatar();
        $query = "INSERT INTO Account VALUES ('$username','$password','$fullname','$phone','$address','$email','$age','$gender','$description','$avatar')";
        $conn->query($query);
    }
    public function editAccount($account){
        $conn = $this->connect();
        $username = $account->getUsername();
        $password = $account->getPassword();
        $fullname = $account->getFullname();
        $phone = $account->getPhone();
        $address = $account->getAddress();
        $email = $account->getEmail();
        $age = $account->getAge();
        $gender = $account->getGender();
        $description = $account->getDescription();
        $avatar = $account->getAvatar();
        $query = "update Account set password= '$password',fullname='$fullname',phone = '$phone',address='$address',email='$email',age='$age',gender='$gender',description='$description',avatar='$avatar' where username = '$username'";
        $conn->query($query);
    }
    public function deleteAccount($username){
        $conn = $this->connect();
        $query = "DELETE FROM account WHERE username = '$username'";
        $conn->query($query);
    }

    public function getAccountByUsernameAndPassword($username,$password){
        $conn = $this->connect();
        $query = "SELECT * FROM account WHERE  username='$username' and password = '$password'";
        $row = $conn->query($query);
        $account = new Account($row['username'],$row['password'],$row['fullname'],$row['phone'],$row['address'],$row['email'],$row['age'],$row['gender'],$row['description'],$row['avatar']);
        return $account;
    }


}
?>