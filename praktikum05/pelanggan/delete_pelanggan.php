<?php 
    require_once 'dbkoneksi.php';
    //menyimpan data idle
    $delete = $_GET['idle'];
    
    //membuat query sql
    $sql = "DELETE FROM pelanggan WHERE id=?";
    
    //menginisiasi query
    $st = $dbh->prepare($sql);
    
    //menjalankan query
    $st->execute([$delete]);

    header('location:list_pelanggan.php');
?>