<?php
if($_POST){
    $nik_pegawai=$_POST['nik_pegawai'];
    $nama_pegawai=$_POST['nama_pegawai'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_telp=$_POST['no_telp'];
    $jabatan=$_POST['jabatan'];
    if(empty($nik_pegawai)){
        echo "<script>alert('nik pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($nama_pegawai)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($jenis_kelamin)){
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($no_telp)){
        echo "<script>alert('no telp tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($jabatan)){
        echo "<script>alert('jabatan tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into tabel_pegawai (nik_pegawai, nama_pegawai, alamat, jenis_kelamin, no_telp, jabatan) value ('".$nik_pegawai."','".$nama_pegawai."','".$alamat."','".$jenis_kelamin."','".$no_telp."','".$jabatan."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>
