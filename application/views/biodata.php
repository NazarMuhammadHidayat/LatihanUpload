<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Biodata Siswa </h1>
        <a href="<?= base_url('profile/tambah_data')?>">~~ Tambah Data ~~</a>
        <p>ID Siswa :            <?= $id?></p>
        <p>Nama Siswa :          <?= $nama?></p>
        <p>alamat :              <?= $alamat?></p>
        <p>Jeniskelamin :        <?= $jk?></p>
        <p>Kelas :               <?= $kls?></p>
        <p>Jurusan :             <?= $jurusan?></p>
        <p>Hobi :                <?= $hobi?></p>
</body>
</html>