<?php
    include_once("./connect.php");
    
    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "UPDATE buku SET nama= '$nama', isbn='$isbn', unit=$unit WHERE id=$id");
        header("Location: buku.php");
        exit;
    }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Form edit buku</h1>

    <form action=""method="POST">
        <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input value="<?php echo $buku['nama']?>" type="text" id="nama" class="form-control" name="nama">
        </div>
        <div>
        <label for="isbn" class="form-label">ISBN</label>
        <input class="form-control" value="<?php echo $buku['isbn']?>" type="text" id="isbn" name="isbn">

        </div>
        
        <div>
            
        <label class="form-label" for="unit">Unit</label>
        <input class="form-control" value="<?php echo $buku['unit']?>" type="number" id="unit" name="unit">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</html>
    
    