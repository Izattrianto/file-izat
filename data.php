<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="akun.css">
</head>
<body>
<div class="data">
<h1>DATA AKUN</h1>
    <table border="5" cellspacing='20px'>
        <tr>
            <td>NAMA</td>
            <td><?php echo $_GET['nama']?></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td><?php echo $_GET['NPM']?></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td><?php echo $_GET['jk']?></td>
        </tr>
        <tr>
            <td>HOBY</td>
            <td><?php echo $_GET['hoby']?></td>
        </tr>
        <tr>
            <td>TANGGAL LAHIR</td>
            <td><?php echo $_GET['tanggal']?></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><?php echo $_GET['lokasi']?></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><?php echo $_GET['akun']?></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><?php echo $_GET['kode']?></td>
        </tr>
</table>
</div>
</body>
</html>