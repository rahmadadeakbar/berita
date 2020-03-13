<?php
    $server="localhost";
    $username="root";
    $pass="";
    $db="berita";
    $koneksi=mysqli_connect($server,$username,$pass,$db)or die (mysqli_error($koneksi));

    if($koneksi){

    }else{
        echo'database tidak terkoneksi';
    }
?>