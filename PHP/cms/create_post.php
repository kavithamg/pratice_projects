<?php 
include "includes/header.php";
include "includes/db.php";
?>

  <!-- Navigation -->
<?php
  include "includes/navigation.php";
?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Clean Blog</h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    <form action="" method="post" enctype="multipart/form-data">    
     
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" class="form-control" name="post_title">
        </div>
        
        
        <div class="form-group">
            <label for="post_category_id">Post Description</label>
            <input type="text" class="form-control" name="post_desc">
        </div>
            
        <div class="form-group">
            <label for="author">Post Author</label>
            <input type="text" class="form-control" name="post_author">
        </div>

        <div class="form-group">
            <label for="author">Post Date</label>
            <input type="date" class="form-control" name="post_date">
        </div>
        
        <div class="form-group">
            <label for="post_content">Post Content</label>
            <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
            </textarea>
        </div>
        
        <div class="form-group">
            <input class="btn btn-primary" type="submit"  name="create_post" value="Publish post">
        </div>
    </form>
    </div>
  </div>
</div>

<hr>
<?php

    global $connection;
      if(isset($_POST['create_post'])){
                            
          $post_title=$_POST['post_title'];
          $post_desc=$_POST['post_desc'];
          $post_author=$_POST['post_author'];
          $post_date=$_POST['post_date'];
          $post_content=$_POST['post_content'];

        $query="INSERT INTO post(post_title, post_desc, post_author, post_date, post_content)";
        $query.="VALUES ('{$post_title}', '{$post_desc}', '{$post_author}', '{$post_date}', '{$post_content}')";
        $create_post_query=mysqli_query($connection,$query);

        if(!$create_post_query)
        {
            die('Query Failed');
        }
    }    



?>
<!-- Footer -->
<?php
  include "includes/footer.php";
?>  

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>
