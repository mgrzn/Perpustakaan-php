<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Web Perpustakaan
    </a>
  </div>
</nav>

<div class="mx-auto p-2" style="width: 200px;" >
    <form method="POST" action="./login_proccess.php">
        <div>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
        </div><br>
        <div>
            <label for="Password">Password:</label><br>
            <input type="text" id="password" name="password"><br>
        </div><br>
        <button class="btn btn-primary"  type="submit" name="submit">Login</button> 
      </bform>
      <p>Belum punya akun ?</p>
      <a class="btn btn-primary" href="./register.php" role="button">Register</a>      
</div>

</body>

</html>