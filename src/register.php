
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
<form method="post" action="./auth/register.php" enctype="multipart/form-data" >
  <h2 class="mt-4" >Sign Up</h2>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input  name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
   </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input  name="password"  type="password" class="form-control" id="passwprd">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>