<?php
//panggil koneksi database
include "koneksi_pendaftaranujian.php";

//uji coba tombol simpan
if (isset($_POST['bsimpan'])) {
    //persiapan simpan data baru
    $simpan = mysqli_query($konek, "INSERT INTO pendaftaran_ujian (laporan_kp,jadwal_ujian)
                                    VALUES('$_POST[tlaporan_kp]',
                                            '$_POST[tjadwal_ujian]')");
    if ($simpan) {
        echo "<script>
                alert('Simpan data succes!');
                document.location='pendaftaranujian.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='pendaftaranujian.php';
                </script>";
    }
}

//uji coba tombol ubah
if (isset($_POST['bubah'])) {
    //persiapan ubah data baru 
    $ubah = mysqli_query($konek, "UPDATE pendaftaran_ujian SET laporan_kp = '$_POST[tlaporan_kp]',
                                                          jadwal_ujian    =  '$_POST[tjadwal_ujian]'
                                                          WHERE id_pendaftaran_ujian = '$_POST[id_pendaftaran_ujian]'
                                                        ");
    if ($ubah) {
        echo "<script>
                alert('Ubah data succes!');
                document.location='pendaftaranujian.php';
                </script>";
    } else {
        echo "<script>
                alert('Ubah  data Gagal!');
                document.location='pendaftaranujian.php';
                </script>";
    }
}

//uji coba tombol Hapus
if (isset($_POST['bhapus'])) {
    //persiapan hapus data baru 
    $hapus = mysqli_query($konek, "DELETE FROM pendaftaran_ujian WHERE id_pendaftaran_ujian = '$_POST[id_pendaftaran_ujian]' ");

    //jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data succes!');
                document.location='pendaftaranujian.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='pendaftaranujian.php';
                </script>";
    }
}
