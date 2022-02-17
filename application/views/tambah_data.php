<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Tambah data</h1>
        <form action="<?= base_url('profile/action_tambah_data')?>" method="post">
        <table>
             <tr>

                <td>ID</td>
                 <td>:</td>
                <td><input type="text" name="id"></td>

            </tr>
            <tr>

                <td>Nama</td>
                 <td>:</td>
                <td><input type="text" name="nama"></td>

            </tr>
             <tr>

                 <td>Alamat</td>
                 <td>:</td>
                 <td><input type="text" name="alamat"></td>

            </tr>
             <tr>

                 <td>Jenis Kelamain</td>
                 <td>:</td>
                 <td><input type="text" name="jk"></td>

            </tr>
             <tr>

                 <td>Kelas</td>
                 <td>:</td>
                 <td><input type="text" name="kls"></td>

            </tr>
             <tr>

                 <td>Jurusan</td>
                 <td>:</td>
                 <td><input type="text" name="jurusan"></td>

            </tr>
             <tr>

                 <td>Hobi</td>
                 <td>:</td>
                 <td><input type="text" name="hobi"></td>

            </tr>

            <td>
                 <button typr="submit">simpan</button>
            </td>
        </table>
    </form>
</body>
</html>