<?php
session_start();
include 'init.php';
if($_SERVER['REQUEST_METHOD'] =="POST"){
    $myId = $_SESSION['uid'];
    $hello =$_POST['posts'];
    $date = date("y M,d");
    $time=date("h:i");
    $stmt =$con->prepare("
    INSERT INTO `posts` (`user_id`, `content`, `date`, `time`) 
    VALUES ( :userId ,:hello,:date,:time)");
    $stmt->execute(array(
      'userId'=> $myId,
       'hello'=> $hello,
       'date'=> $date,
        'time'=>$time
    ));
}
    $query=$con->prepare("SELECT *FROM posts order by time DESC");
    $query->execute();
    $postInfo=$query->fetchAll();
?>
<div class="container-fluid">
    <div class="row">
        <div class="hidden-sm col-md-5 col-lg-4 col-xl-4">
            
</div>
<div class="col-sm-12 col-md-7 col-lg-8 col-xl-8">
    <form action="index.php" method="post">
        <textarea name="posts" class="form-control"></textarea>
        <script>
            CKEDITOR.replace( 'posts' );
</script>
        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-plus" ></i>اضافة منشور</button>
</form>
</div>
</div>
<div class="row"> 
    <?php foreach($postInfo as $info){ ?>
    <div class="posts col-md-offset-5 col-md-7" >
       <div class="media">
       <div class="media-left">
       <a href="#">
       <img style="height:50px;width:50px" class="media-object" src="img/default-user-img.png" alt="...">
     </a>
    </div>
      <div class="media-body">
      <h4 class="media-heading"><?php ?><span><?php echo $info['date'].''.$info['time']?></span></h4>
       <?php echo $info['content'];?>
  </div>
</div>
<hr>
<div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Like</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Comment</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Share</button>
  </div>
</div>
<hr>
       <div class="media">
       <div class="media-left">
       <a href="#">
       <img style="height:20px;width:20px" class="media-object" src="img/default-user-img.png" alt="...">
     </a>
    </div>
      <div class="media-body media-comment">
      <h4 class="media-heading">Fname Lname</h4>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
<div class="media">
       <div class="media-left">
       <a href="#">
       <img style="height:20px;width:20px" class="media-object" src="img/default-user-img.png" alt="...">
     </a>
    </div>
      <div class="media-body media-comment">
      <h4 class="media-heading">Fname Lname</h4>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
<hr>
<form action="" method="post">
    <textarea class="form-control">comment...</textarea>
    <button type="submit" class="btn btn-primary btn-primary btn-block">comment</button>
</form>
</div>
<?php } ?>
</div>
