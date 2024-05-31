<?php
    include_once("./connect.php");


    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "INSERT INTO buku VALUES (
            NULL, '$nama', '$isbn', $unit
        )");
    header("Location: buku.php");
    exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>Form tambah daftar buku</h1>
    
    <form class="table" method="POST">
        <div class="form-floating mb-3">
            <input type="text" class="form-control"  name="nama" placeholder="Masukan Nama Staff">
            <label for="floatingInput">Nama</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="isbn"   placeholder="ISBN">
            <label for="floatingPassword">ISBN</label>
        </div>
        <div class="form-floating">
            <input type="number"  class="form-control" name ="unit"  placeholder="Unit">
            <label for="floatingPassword">Unit</label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
</html>