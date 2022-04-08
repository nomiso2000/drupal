<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php print $title ;?></title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href= <?php echo './assets/style.css' ;?>>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/todo">Todo</a>
        </li>

      </ul>
    </div>
  </div>
  <a class="nav-link active" href="/login">Login</a>
  <a class="nav-link active" href="/register">Register</a>
  <a class="nav-link active" href="/logout">Logout</a>
    <!-- <form action="/auth/logout" method="post">
      <button class="btn btn-danger" type="submit">Logout</button>
    </form> -->
</nav>
  <?php
    print $content;
    // print $time;
  ?>
</body>
</html>