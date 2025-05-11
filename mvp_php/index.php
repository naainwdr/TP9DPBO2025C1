<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/
include("view/KontrakView.php");
include("view/TampilMahasiswa.php");
include("view/FormTambahMahasiswa.php");
include("view/FormEditMahasiswa.php");
include("presenter/ProsesMahasiswa.php");

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
    case 'tambahform':
        $form = new FormTambahMahasiswa();
        $form->tampil();
        break;

    case 'tambah':
        $pm = new ProsesMahasiswa();
        $pm->addMahasiswa(
            $_POST['nim'],
            $_POST['nama'],
            $_POST['tempat'],
            $_POST['tl'],
            $_POST['gender'],
            $_POST['email'],
            $_POST['telp']
        );

        header("Location: index.php");
        break;

    case 'editform':
        $form = new FormEditMahasiswa();
        $form->tampil();
        break;

    case 'update':
        $pm = new ProsesMahasiswa();
        $pm->updateMahasiswa(
            $_POST['id'],
            $_POST['nim'],
            $_POST['nama'],
            $_POST['tempat'],
            $_POST['tl'],
            $_POST['gender'],
            $_POST['email'],
            $_POST['telp']
        );
        header("Location: index.php");
        break;

    case 'hapus':
        $pm = new ProsesMahasiswa();
        $pm->deleteMahasiswa($_GET['id']);
        header("Location: index.php");
        break;

    default:
        $tp = new TampilMahasiswa();
        $tp->tampil();
        break;
}
