<?php 
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>Daftar Staff</h1>

    <table class="table">
    <tr>
        <td  class="table-primary">Nama</td>
        <td  class="table-primary">Telepon</td>
        <td  class="table-primary">Email</td>
        <td  class="table-primary">ACTION</td>
    </tr>
   
    <?php foreach($query as $staff) {?>
        <tr>
            <td><?php echo $staff["nama"] ?></td>
            <td><?php echo $staff["telp"] ?></td>
            <td><?php echo $staff["email"] ?></td>
            <td>
                <a href=<?php echo "edit-staff.php?id=".$staff["id"]?>>EDIT</a> |
                <a href=<?php echo "delete-staff.php?id=".$staff["id"]?>>HAPUS</a>
            </td>
                
        </tr>
    <?php } ?>
 </table>
 <a class="btn btn-primary" href="./tambah-staff.php" role="button">Tambah Data Staff</a>  <a class="btn btn-primary" href="./index.php" role="button">Kembali Ke Halama Utama</a>

</body>
</html>
