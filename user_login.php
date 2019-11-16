<?php 
  $title = "User Login";
  $current_page = "login";
?>
<?php 
require_once('header.php');
?>

<div class="bg-light">
  <div class="cntr mx-auto py-4">
    <div class="card p-3">
      <h1 class="h1 my-4 text-center">Welcome To MyBlog</h1>
      <form>
        <div class="form-group">
          <label for="user_name">User Name</label>
          <input type="text" name="user_name" class="form-control" id="user_name"
            placeholder="User Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Rember Me</label>
        </div>
        <button type="submit" class="btn btn-primary">Log in</button>
      </form>
    </div>
  </div>
</div>

<?php 
require_once('footer.php');
?>