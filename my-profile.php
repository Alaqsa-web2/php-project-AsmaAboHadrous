<?php
$session_start();
include 'init.php';
$session=$_SESSION['uid'];

$stmt=$con->prepare("SELECT * FROM users WHERE user-id=$session");
$stmt->execute();
$info=$stmt->fetch();
?>
<div class="container-fluid">
    <div class="col-xs-12 posts col-sm-12 col-md-9 col-lg-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                
                <p> المنشورات</p>
            </div>
            <div class="panel-body">
            </div>
        </div>
        <div class="col-xs-12 posts col-sm-12 col-md-3 col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p> الصورة الشخصية</p>
            </div>
            <div class="panel-body">
                <img  class="img-responsive img-thumbnail" src="img/default-user-img.png">
            </div>
        </div>
        <div class="col-xs-12 posts col-sm-12 col-md-3 col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p> معرض الصور</p>
            </div>
            <div class="panel-body">
            </div>
        </div>
        <div class="col-xs-12 posts col-sm-12 col-md-3 col-lg-3">
        <div class="panel panel-default info">
            <div class="panel-heading">
                <p> المعلومات الشخصية</p>
            </div>
            <div class="panel-body">
                <ul class="list-unstyled">
                    <li><span>السن</span>|24</li>
                    <li><span>المدينة</span>|cairo</li>
                    <li><span>الحالة الاجتماعية</span>|أعذب</li>
</ul>
            </div>
        </div>
    </div>
</div>