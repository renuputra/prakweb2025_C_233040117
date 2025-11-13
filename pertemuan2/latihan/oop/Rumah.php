<?php

class Rumah{
    //property
    public $warnaCat = "Putih";
    public $jmlKamar = 10;
    public $alamat = "Jl. Setiabudhi";

    //method
    public function __construct($warnaCat, $jmlKamar){
        $this->warnaCat = $warnaCat;
        $this->jmlKamar = $jmlKamar;

    }


    public function kunciPintu(){
        return "Rumah ini dikunci";
    }

    public function gantiWarna($warnaCat){
        $this->warnaCat = $warnaCat;
    }

}

function pasangListrik(Rumah $rumah){
    return "Rumah ini dipasang listrik, rumah yang berwarna". $rumah->warnaCat;
}

$rumahAndi = new Rumah('Ungu', 2);
echo pasangListrik($rumahAndi);


// Rumah Saya
$rumahSaya = new Rumah("Biru", 10);
//$rumahSaya->gantiWarna('Biru');
echo "Rumah saya: ". $rumahSaya->warnaCat;
echo "<br>";
echo "Jumlah Kamar: ". $rumahSaya->jmlKamar;
echo "<br>";

// Rumah Tetangga
$rumahTetangga = new Rumah("Oren", 1);
//$rumahTetangga->gantiWarna('Oren');
echo "Rumah Tetangga: ". $rumahTetangga->warnaCat;
echo "<br>";
echo "Jumlah Kamar: ". $rumahTetangga->jmlKamar;
echo "<br>";


?>

