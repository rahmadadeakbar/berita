<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form berita</title>
</head>
<body>

    <form action="proses/proses_input.php" method="POST" enctype="multipart/form-data">

    <input type="text" name="judul" placeholder="masukkan judul">
    <input type="date" name="tanggal" >
    <textarea name="konten"  cols="30" rows="10"></textarea>
    <input type="file" name="foto">

    <input type="submit" name="tambah" value="Posting">

    </form>
    
</body>
</html>