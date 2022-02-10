<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="form">
    <h2>
      Form
    </h2>
    <form action="contactform.php" method="post">
  <input  type="text" name="name" required placeholder="Full name" pattern="[A-Za-zА-Яа-яЁё]{2,}"></input>
  <input  type="text" type="email" name="mail" required placeholder="Your e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></input>
  <input  type="text" name="subject" placeholder="Subject"></input>
  <button type="submit" name="submit">SEND MAIL</button>
    </form>
</body>
</html>