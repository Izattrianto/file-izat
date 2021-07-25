<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>
    <link rel="stylesheet" href="akun.css">
</head>
<body>
     
    <div class="akun">
        <div class="container">
        <form action="data.php" method="GET">
        <h2>TAMBAHKAN AKUN</h2>
        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td><input type="number" name="NPM" ></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td><input type="radio" name="jk" value="LAKI-LAKI">LAKI LAKI</td>
                <td><input type="radio" name="jk" value="PEREMPUAN">PEREMPUAN</td>
            </tr>
            <tr>
                <td>HOBY</td>
                <td><input type="checkbox" name="hoby" value="NONTON ANIME">NONTON ANIME</td>
                <td><input type="checkbox" name="hoby" value="GAME">GAME</td>
                
            </tr>
            <tr>
               <td>TANGGAL LAHIR</td>
               <td><input type="date" name="tanggal" ></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><textarea cols="20" rows="3" name="lokasi" ></textarea></td>
             </tr>
             <tr>
                 <td>EMAIL</td>
                 <td><input type="email" name="akun" id=""></td>
             </tr>
             <tr>
                 <td>PASSWORD</td>
                 <td><input type="password" name="kode" id=""></td>
             </tr>
             <tr>
                 <td><button type="submit" name="simpan">SIMPAN</button></td>
                 <td><button type="reset" name="hapus">HAPUS</button></td>
                 <td><button type="button" name="kembali">KEMBALI</button>
             </tr>
        </table>
    </form>
    </div>
    </div>
</body>
</html>