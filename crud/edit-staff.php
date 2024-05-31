<?php
    include_once("./connect.php");
    
    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "UPDATE staff SET nama= '$nama', telp='$telp', email='$email' WHERE id=$id");
        header("Location: staff.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>Form edit Staff</h1>
    <form action=""method="POST">
        <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input value="<?php echo $staff['nama']?>" type="text" id="nama" class="form-control" name="nama">
        </div>
        <div>
        <label for="isbn" class="form-label">Telepon</label>
        <input class="form-control" value="<?php echo $staff['telp']?>" type="text" id="telp" name="telp">

        </div>
        
        <div>
            
        <label class="form-label" for="unit">Email</label>
        <input class="form-control" value="<?php echo $staff['email']?>" type="email" id="email" name="email">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
</html>