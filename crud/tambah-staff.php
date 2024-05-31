<?php
    include_once("./connect.php");


    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "INSERT INTO staff VALUES (
            NULL, '$nama', '$telp', '$email'
        )");
        header("Location: staff.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>Form tambah data staff</h1>
   
    <form class="table" action=""method="POST">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Staff">
            <label for="floatingInput">Nama</label>
        </div>
        <div class="form-floating">
            <input type="text" name="telp" class="form-control" placeholder="ISBN">
            <label for="floatingPassword">Telepon</label>
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control"  placeholder="Unit">
            <label for="floatingPassword">Email</label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

</body>
</html>