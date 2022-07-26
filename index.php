<?php
$conn = new mysqli ("localhost","root","","arkatama");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleksi Skill</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <form action="" method="post">
        <h1 align="center">Input User</h1>
        <div class="container">
            <div class="form-group">
                <label class="form-label col-sm-3" for="">Nama</label>
                <input type="text" name="nama" class="form-control col-sm-6" id="nama">
            </div>
            <div class="form-group">
                <label class="form-label col-sm-3" for="">Usia</label>
                <input type="number" name="usia" class="form-control col-sm-6" id="usia">
            </div>

            <div class="form-group">
                <label class="form-label col-sm-3" for="">Kota</label>
                <input type="text" name="kota" class="form-control col-sm-6" id="kota">
            </div>
            <br>
            <div class="form-group">

                <div class="d-grid gap-2">
                    <button class="btn btn-primary rounded-pill" type="submit" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>

    <br><br>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Kota</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $getData = $conn->query("SELECT * FROM  tabel");
                while ($data = $getData->fetch_assoc()){
                    ?>
                    <tr>
                        <td> <?= $data['nama']; ?></td>
                        <td> <?= $data['usia']; ?></td>
                        <td> <?= $data['kota']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $nama_lengkap = $_POST['nama'];
    $kota_user = $_POST['kota'];
    $sql = "INSERT INTO tabel (nama, usia, kota) VALUES (
    '".$nama_lengkap."',
    '".$_POST['usia']."',
    '".$kota_user."')";
    $submit = mysqli_query($conn,$sql);
    mysqli_close($conn);
}

?>