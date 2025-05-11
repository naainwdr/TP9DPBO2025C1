<?php

class FormTambahMahasiswa implements KontrakView
{
    private $tpl;

    function __construct()
    {
        $this->tpl = new Template("templates/form_tambah.html");
    }

    function tampil()
    {
        $this->tpl->write();
    }
}
