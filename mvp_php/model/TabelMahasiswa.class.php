<?php

class TabelMahasiswa extends DB
{
    // Ambil semua data mahasiswa
    function getMahasiswa()
    {
        $query = "SELECT * FROM mahasiswa";
        return $this->execute($query);
    }

    // Ambil data mahasiswa berdasarkan ID
    function getMahasiswaById($id)
    {
        $query = "SELECT * FROM mahasiswa WHERE id = '$id'";
        return $this->execute($query);
    }

    // Tambah data mahasiswa baru
    function insertMahasiswa($nim, $nama, $tempat, $tl, $gender, $email, $telp)
    {
        $query = "INSERT INTO mahasiswa (nim, nama, tempat, tl, gender, email, telp) 
                  VALUES ('$nim', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";
        return $this->execute($query);
    }

    // Update data mahasiswa berdasarkan ID
    function updateMahasiswa($id, $nim, $nama, $tempat, $tl, $gender, $email, $telp)
    {
        $query = "UPDATE mahasiswa SET 
                    nim = '$nim',
                    nama = '$nama',
                    tempat = '$tempat',
                    tl = '$tl',
                    gender = '$gender',
                    email = '$email',
                    telp = '$telp'
                  WHERE id = '$id'";
        return $this->execute($query);
    }

    // Hapus data mahasiswa berdasarkan ID
    function deleteMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = '$id'";
        return $this->execute($query);
    }
}
