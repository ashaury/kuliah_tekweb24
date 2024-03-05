<?php
class Kucing {
    public $nama;
    public $usia;
    public $suara;

    // kalau di java public Kucing(){}
    public function __construct($nama,$usia,$suara){
        $this->nama = $nama;
        $this->usia = $usia;
        $this->suara = $suara;
    }

    public function getNama(){
        //kalau di java : this.nama
        return $this->nama;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function call(){
        echo "<p>Hy my name is ".$this->nama."</p>";
    }
    public function miaw(){
        echo "<p>meowyeah ".$this->suara."</p>";
    }

}
?>