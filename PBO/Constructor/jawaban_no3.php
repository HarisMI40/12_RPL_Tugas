<?php 
   class data_siswa {
    public $nis = "katun";
    public $nama = "sweeter";
    public $kelas = "5000";

    function tampil_siswa(){
        echo "bahan : $this->bahan, jenis :  $this->jenis, harga : $this->harga";
    }
   }
   $toko = new toko_baju;
   $toko->tampil_siswa();