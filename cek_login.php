<?php
require 'koneksi.php';
$user=$_POST['username']; 
$pass=$_POST['password'];
$sqli=mysqli_query($konek, "select * from masyarakat where username='$user' and password='$pass' ");
$cek=mysqli_num_rows($sqli);

    if($cek>0)
    {
        $data=mysqli_fetch_array($sqli);
        session_start();
        $_SESSION['nama']=$user;
        $_SESSION['nik']=$data['nik'];
        header('location:masyarakat.php');
    }
    else
    {
        ?>
        <script type="text/javascript">
        alert ('Login Gagal, cek kembali dan silahkan untuk mengulangi dan memasukan data yang benar! ');
        window.location="login.php";
        </script>
<?php
    }
    ?>