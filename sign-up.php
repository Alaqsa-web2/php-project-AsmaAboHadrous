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

    if($count > 1){
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
            <div class="col-sm-6 margin-bottom-12">
                <input  class="form-control" type="text" name="fname" placeholder="الاسم الاول">
        </div>
        <div class="col-sm-6 margin-bottom-12">
                <input  class="form-control" type="text" name="lname" placeholder="الاسم الثاني">
        </div>
        <div class="col-sm-12 margin-bottom-12">
                <input  class="form-control" type="text" name="email" placeholder="البريد الالكتروني">
        </div>
        <div class="col-sm-12 margin-bottom-12">
                <input  class="form-control" type="text" name="pass" placeholder="كلمة المرور">
        </div>
        <div class="col-sm-12 margin-bottom-12">
                <input  class="form-control" type="text" name="conf-pass" placeholder="تأكيد كلمة المرور">
        </div>
        <div class="col-sm-12 margin-bottom-12">
            <button class="form-control sign-up-btn" type="submit">انشاء حساب</button>
</div>
</div>
</form>
        <div class="form-group">
            <p class="text-center">
                <a style="text-decoration:none" class="sign-up-link" href="sign-up.php">دخول من حسابي الحالي</a>
</p>
</div>
</div>
</div>
</div>
</section>