<!DOCTYPE html>
<html lang="en">
<head></head>
    <body>
        <?php
             include "koneksi.php";
             $un=$_GET['un'];
             $query="SELECT * FROM siswa WHERE un='$un'";
             $result=mysqli_query($connect, $query);
        ?>
        <form action="prosesEdit.php" method="GET">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td>No UN:</td>
                        <td><input type="text" name="un" value="<?php echo $row['un'];?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap:</td>
                        <td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin:</td>
                        <td><input type="radio" name="jenis_kelamin" value = "L" value=" <?php echo $row['jenis_kelamin'];?>"> Laki-Laki</td> 
                        <td><input type="radio" name="jenis_kelamin" value = "P" value=" <?php echo $row['jenis_kelamin'];?>">Perempuan</td>
                    </tr>
                    <tr>
                        <td>Tempa Lahir:</td>
                        <td><input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'];?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir:</td>
                        <td><input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Orang Tua/Wali:</td>
                        <td><input type="text" name="nama_ortu" value="<?php echo $row['nama_ortu'];?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat:</td>
                        <td><textarea name="alamat" rows="5" cols="20">
                            <?php echo $row['alamat'];?></textarea></td>
                    </tr>
                    <tr>
                        <td>Kota/Kabupaten:</td>
                        <td><input type="text" name="kota" value="<?php echo $row['kota'];?>"></td>
                    </tr>
                    <tr>
                        <td>No Telp:</td>
                        <td><input type="text" name="no_telp" value="<?php echo $row['no_telp'];?>"></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah:</td>
                        <td><input type="text" name="asal" value="<?php echo $row['asal'];?>"></td>
                    </tr>
                    <tr>
                        <td>Agama:</td>
                        <td><input type="text" name="agama" value="<?php echo $row['agama'];?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="simpan" value="simpan"></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </body>
</html>