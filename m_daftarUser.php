<?php
class m_daftarUser
{
    public $hasil = array();
    

    public function setRegister(
        $username,
        $pass,
        $namaLengkap,
        $jenisKelamin,
        $alamat,
    ) {

        require "koneksiMVC.php";
        $rs = $mysqli->query("INSERT INTO `05_login` (`username`, `pass`, `stats`, `nama_lengkap`, `jenis_kelamin`, `alamat`) VALUES ('$username', '$pass', 'user', '$namaLengkap', '$jenisKelamin', '$alamat');");
    }

    public function getKuota()
    {
        require "koneksiMVC.php";
        $rs = $mysqli->query("SELECT * FROM 05_kuota");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }

    public function register(){
        require("koneksiMVC.php");
        $rs = $mysqli->query("SELECT * FROM 05_login");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;

    }

    

}
?>