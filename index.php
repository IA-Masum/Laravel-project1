<?php $current_page = "index"; ?>
<?php $title = "Home"?>
<?php require_once('header.php'); ?>

<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <img class="card-img-top" src="assets/baby.jpg">
              <h5 class="card-title px-3 pt-3"><a href="post.php">Card title</a></h5>
            </div>
          </div>
        </div>
        <hr>
        <div class="row px-3">
          <div class="row">
            <div class="col-md-12">
              <h6 class="category"><a href="category.php">Category 1</a></h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="assets/baby.jpg">
                <h5 class="card-title px-3 pt-3"><a href="post.php">Card title</a></h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="assets/baby.jpg">
                <h5 class="card-title px-3 pt-3"><a href="post.php">Card title</a></h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="assets/baby.jpg">
                <h5 class="card-title px-3 pt-3"><a href="post.php">Card title</a></h5>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row px-3">
          <div class="row">
            <div class="col-md-12">
              <h6 class="category"><a href="category.php">Category 2</a></h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="assets/baby.jpg">
                <h5 class="card-title px-3 pt-3"><a href="post.php">Card title</a></h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="assets/baby.jpg">
                <h5 class="card-title px-3 pt-3"><a href="post.php">Card title</a></h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="assets/baby.jpg">
                <h5 class="card-title px-3 pt-3"><a href="post.php">Card title</a></h5>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row px-3">
          <div class="row">
            <div class="col-md-12">
              <h6 class="category"><a href="category.php">Category 3 </a></h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="assets/baby.jpg">
                <h5 class="card-title px-3 pt-3"><a href="post.php">Card title</a></h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="assets/baby.jpg">
                <h5 class="card-title px-3 pt-3"><a href="post.php">Card title</a></h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="assets/baby.jpg">
                <h5 class="card-title px-3 pt-3"><a href="post.php">Card title</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php require_once("sidebar.php");?>
    </div>
  </div>
</div>

<?php 
require_once('footer.php');
?>