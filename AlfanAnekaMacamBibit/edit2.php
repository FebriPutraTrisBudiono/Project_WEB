<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi, "select * from user where id = '$id'");
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>
                    <input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="simpan">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>