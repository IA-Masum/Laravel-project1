<div class="col-md-3">
  <div class="row  bg-white">
    <div class="col">
      <h5 class="mt-2">Most</h5>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" id="recent">Recent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="read">Read</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="liked">Liked</a>
        </li>
      </ul>
      <div class="p-2 border border-top-0">
        <h6 class="my-1 p-1 border border-secondary rounded most"> <a href="post.php"> Post Title</a></h6>
        <h6 class="my-1 p-1 border border-secondary rounded most"> <a href="post.php"> Post Title</a></h6>
        <h6 class="my-1 p-1 border border-secondary rounded most"> <a href="post.php"> Post Title</a></h6>
        <h6 class="my-1 p-1 border border-secondary rounded most"> <a href="post.php"> Post Title</a></h6>
        <h6 class="my-1 p-1 border border-secondary rounded most"> <a href="post.php"> Post Title</a></h6>
      </div>
    </div>
  </div>
  <hr>
  <div class="row  bg-white">
    <div class="col">
      <h5 class="mt-2">Archive</h5>
      <ul>
        <li><a href="archive.php">January 2019</a></li>
        <li><a href="archive.php">January 2019</a></li>
        <li><a href="archive.php">January 2019</a></li>
        <li><a href="archive.php">January 2019</a></li>
        <li><a href="archive.php">January 2019</a></li>
        <li><a href="archive.php">January 2019</a></li>
      </ul>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {

  var read = $("#read");
  var recent = $("#recent");
  var liked = $("#liked");
  
  read.click(function(){
    read.addClass('active');
    recent.removeClass('active');
    liked.removeClass('active');
  });

  recent.click(function(){
    recent.addClass('active');
    read.removeClass('active');
    liked.removeClass('active');
  });

  liked.click(function(){
    liked.addClass('active');
    recent.removeClass('active');
    read.removeClass('active');
  });
});
</script>