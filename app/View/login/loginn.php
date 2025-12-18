<?php
require_once __DIR__ . '/../../../db/organic-db.php';

session_start();

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $pass =$_POST['password'] ?? '';
     $role = $_POST['role'] ?? '';

}
$errors=[];
if(!empty($name))$errors['name'] = "Ism kiritilmadi";
if(!empty($email))$errors['email']="Email kiritilmadi ";
if(!empty($pass))$errors['password']="Parol kiritilmadi";
if(!empty($role))$errors['role']="Roleni yozing";

if(!empty($errors)){
    $_SESSION['login_errors']= $errors;
    header("Location:login-form");
    exit;
}
$stmt= $pdo->prepare("SELECT * FROM admins WHERE (email,name,password) = ?,?,?");
$stmt->bind_param("ssi",$email,$name,$pass);
$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0){
    $users=$result->fetch_assoc();
}
if(password_verify($pass,$users['password'])){
    $_SESSION['users']=$users;
    $_SESSION['id']=$users['id'];
    $_SESSION['name']=$users['name'];
    $_SESSION['email']=$users['email'];
    $_SESSION['username']= $users['username'];
    $_SESSION['role']=$users['role'];
    $_SESSION['logged_in']= true;
    header('Location: app/View/index.php');
    exit;
}
// else{ 
//     // $_SESSION['login_errors']="bunday_yoq" => "not_found" ;
//     header('Location:login-form.php');
//     exit;
// }
?>