<?php

class FormEditMahasiswa implements KontrakView
{
    private $tpl;
    private $proses;

    function __construct()
    {
        $this->proses = new ProsesMahasiswa();
    }

    function tampil()
    {
        $this->proses->prosesDataMahasiswa();
        $id = $_GET['id']; 
        $mahasiswa = $this->proses->getMahasiswaById($id); // Dapatkan objek mahasiswa

        $this->tpl = new Template("templates/form_edit.html");

        if ($mahasiswa !== null) {
            $this->tpl->replace("DATA_NIM", $mahasiswa->getNim());
            $this->tpl->replace("DATA_NAMA", $mahasiswa->getNama());
            $this->tpl->replace("DATA_TEMPAT", $mahasiswa->getTempat());
            $this->tpl->replace("DATA_TGL", $mahasiswa->getTl());
            $this->tpl->replace("DATA_EMAIL", $mahasiswa->getEmail());
            $this->tpl->replace("DATA_TELP", $mahasiswa->getTelp());
            $this->tpl->replace("DATA_L", $mahasiswa->getGender() == "Laki-laki" ? "selected" : "");
            $this->tpl->replace("DATA_P", $mahasiswa->getGender() == "Perempuan" ? "selected" : "");
            $this->tpl->replace("DATA_ID", $mahasiswa->getId());
        } else {
            // Jika tidak ditemukan, berikan pesan error atau arahkan ke halaman lain
            echo "Mahasiswa tidak ditemukan.";
        }

        $this->tpl->write();
    }
}
