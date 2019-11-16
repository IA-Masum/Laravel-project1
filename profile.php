<?php $current_page = "profile"; ?>
<?php $title = "Profile"?>
<?php 
require_once('header.php');
?>

<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card p-2">
          <div class="row">
            <div class="col-md-6">
              <img class="card-img-top" src="assets/user.jpg" alt="">
            </div>
            <div class="col-md-6">
              <h4 class="card-title mt-3 mb-0 pb-0">IA Masum</h4>
              <small>aimran756@gmail.com</small>
              <h5 class="text-center mt-4">User Info</h5>
              <p class="m-0">User Since : January 2019</p>
              <p class="m-0">Post Liked : 23</p>
              <p class="m-0">Post Read : 23</p>
              <p class="m-0">Tolal Comments : 23</p>
              <div>
                <hr>
                <button class="btn btn-warning btn-sm">Edit Profile</button>
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