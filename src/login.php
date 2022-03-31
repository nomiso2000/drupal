
<!DOCTYPE html>
<html lang="en">
<?php
require_once './views/blocks/header.php'
?>
<body>

<?php
require_once './views/blocks/navbar.php'
?>

<div class="container">
<form method="post" action="./auth/login.php" >
  <h2 class="mt-4" >Sign In</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div   id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>