
<!-- <div class="alert alert-success">
    success
</div> -->

<?php
session_start();
if($_SESSION['email']){

include 'init.php';
?>
<div class="container-fluid">
    <div class=" ads col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="panel panel-default">
            <div class=panel-heading>
                <p> اعلان</p>
            </div>
            <div class="panel-body"></div>
        </div>
    </div>
    <div class=" col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="panel panel-default">
            <div class=panel-heading>
               <p>خيارات البحث </p>
            </div>
            <div class="panel-body"></div>
        </div>
    </div>
    </div>
    <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p> الاعضاء</p>
            </div>
            <div class="panel-body">
            </div>
        </div>
    </div>

    <div class=" col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="panel panel-default">
        <div class="panel-heading">
           <p> التحكم</p> 
    </div>
    <div class="panel-body">
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
}else{
header('location:login.php');
}

?>



