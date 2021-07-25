<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
if(isset ($_POST["masuk"])):?>
    <table border="1px">
    <h1>ANDA BERHASIL LOGIN</h1>
        <thead>
            <td>username</td>
            <td>password</td>
        </thead>
        <tbody>
            <td><?= $_POST['username']?></td>
            <td><?= $_POST['password']?></td>
        </tbody>
    </table>

<?php else : ?>
        <h1 style="color:red;">HARAP LOGIN TERLEBIH DAHULU!</h1>
        <?php endif; ?>
</body>
</html>