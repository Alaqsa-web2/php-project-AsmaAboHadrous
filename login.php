<?php
session_start();
$nonav='';
if(isset($_SESSION['email'])){
    header('location:index.php');
}
 

include 'init.php';
if($_SERVER['REQUEST_METHOD']=='POST'){

    $email = $_POST['email'];
    $pass  = $_POST['pass'];


    $stmt=$con->prepare("SELECT email,pass from users where email = ? and pass = ?");
    $stmt->execute(array($email,$pass));
    $get=$stmt->fetch();
    $count=$stmt->rowCount();

    if($count > 0){
        $_SESSION['email'] = $email;
        // $_SESSION['user-id'] =$get['user-id']; 
        
        header('location:index.php');
    }
}
?>
<section class="login-page">

<div class="container">
    <div class="col-sm-offset-3 col-sm-6">
        <div class="login-form">
            <form  action ="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form-horizontal">
                <div class="form-group">
                    <lable>email</lable>
                <input  class="form-control" type="text" name="email" placeholder="Enter your email">
</div>
                <div class="form-group">
                    <lable>password</lable>
                <input class="form-control" type ="password" name="pass" placeholder="Enter your password">
</div>
                <div class="form-group">
                <button class="form-control login-btn" type="submit">login</button>
                <a style="text-decoration:none" class="sign-up-link" href="sign-up.php">انشاء حساب جديد</a>
</div>
</form>
</div>
</div>
</div>
</section>