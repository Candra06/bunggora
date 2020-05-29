<?php

class Flasher{
    public static function setFlash($pesan, $aksi, $tipe){
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo ' <div class="alert alert-'.$_SESSION['flash']['tipe'].'"> Data '.$_SESSION['pesan'].' '.$_SESSION['aksi'].'.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>';
        }
    }
}
?>