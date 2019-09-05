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
    <table class="table table-bordered table-hover text-center">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Author</th>
                  <th>Date</th>                                
                  <th>Content</th>
                  <th>Action</th>
                  <th>Action</th>
                  
              </tr>
          </thead>
          <tbody>
    <?php 

            $query="select * from post";
            $select_posts=mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_posts)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];            
                $post_desc= $row['post_desc'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_content = $row['post_content'];

              
              echo "<tr>";
              
              echo "<td>$post_id </td>";
              echo "<td>$post_title </td>";
              echo "<td>$post_desc </td>";
              echo "<td>$post_author</td>";
              echo "<td>$post_date</td>";
              echo "<td>$post_content</td>";
              echo "<td><a class='btn btn-success' href='#'>Edit</a></td>1";
              echo "<td><a class='btn btn-danger' href='index.php?delete=<?= $post_id ?>'>Delete</a></td";             
              echo "</tr>";
          }
                        
    ?>      <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        
    </tbody>
</table>

<?php

    if(isset($_GET['delete'])){
        $the_post_id=$_GET['delete'];
        $query="DELETE FROM post where post_id={$the_post_id}"; 
        $delete_query=mysqli_query($connection,$query);
    
}
?>
    
    </div>
  </div>
</div>

<hr>

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
