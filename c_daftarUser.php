<?php
include_once("m_daftarUser.php");
class c_daftarUser
{
    public $model;
    public function __construct()
    {
        $this->model = new m_daftarUser();
    }
    public function invoke()
    {
        if (isset($_POST['save'])) {
            $this->model->setdaftarUser(
                $_POST['nama'],
                $_POST['umur'],
                $_POST['kel']
            );
        }


        $pemweb21 = $this->model->getSemuadaftarUser();
        include 'v_daftarUser.php';
    }

    function unsetPOST()
    {
        if (count($_POST) > 0) {
            $_POST = array();
        }
    }
}






?>