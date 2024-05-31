<?php 
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Daftar Buku</h1>
 <table class="table">
    <tr>
        <td class="table-primary">Nama</td>
        <td class="table-primary">ISBN</td>
        <td class="table-primary">Unit</td>
        <td class="table-primary">ACTION</td>
    </tr>
   
    <?php foreach($query as $buku) {?>
        <tr>
            <td><?php echo $buku["nama"] ?></td>
            <td><?php echo $buku["isbn"] ?></td>
            <td><?php echo $buku["unit"] ?></td>
            <td>
                <a href=<?php echo "edit-buku.php?id=".$buku["id"]?>>EDIT</a> |
                <a href=<?php echo "delete-buku.php?id=".$buku["id"]?>>HAPUS</a>
            </td>
        </tr>
    <?php } ?>
 </table>
   
 <br>

 <a class="btn btn-primary" href="./tambah-buku.php" role="button">Tambah Daftar Buku</a>  <a class="btn btn-primary" href="./index.php" role="button">Kembali Ke Halama Utama</a>
</body>
</html>