<?php
    include'../koneksi/koneksi.php';

    if(isset($_POST['tambah'])){
        $id_berita=uniqid();
        $judul=$_POST['judul'];
        $tanggal=$_POST['tanggal'];
        $konten=$_POST['konten'];

        $nama_file=$_FILES['foto']['name'];
        $format=explode(".", $nama_file);
        $fileExtension = end($format);
        $nama_sementara=$_FILES['foto']['tmp_name'];
        $md5file = md5($nama_file) . "." . $fileExtension;
        $lokasi_upload= "../upload/"; 
        $fungsi_upload=move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);

        $input=mysqli_query($koneksi,"INSERT INTO berita VALUES('$id_berita','$judul','$tanggal','$konten','$md5file')")or die(mysqli_error($input));

        if($input){
            echo'
                <script>
                    alert(berita sudah di input!);
                </script>
            ';
        }else{
            echo'data gagal di input';
        }
    }
?>