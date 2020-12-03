
    <?php
    if (@$_POST['edit']) {
        $nama = mysqli_real_escape_string($_POST['nama']);
        $alamat = mysqli_real_escape_string($_POST['alamat']);
        $no_telepon = mysqli_real_escape_string($_POST['no_telepon']);
        $username = mysqli_real_escape_string($_POST['username']);
        $password = mysqli_real_escape_string($_POST['password']);
        mysqli_query("UPDATE pengguna SET nama='$nama', alamat='$alamat', no_telepon='$no_telepon', username='$username', password='$password' WHERE id='$sesi'");
        header("location:edit_profil_admin.php");
    }
    ?>