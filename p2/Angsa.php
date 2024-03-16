<?php
class Angsa{
    //property atau atribut
    public $nama;
    public $usia;

    //method
    //constructor
    // public Angsa(){}
    public function __construct($nama,$usia)
    {
        $this->nama = $nama;
        $this->usia = $usia;
    }

    //Geter
    // dalam java public String getNama(){}
    public function getNama(){
        //dalam java this.nama
        return $this->nama;
    }
    //seter
    // dalam java public void setNama(String nama){}
    public function setNama($nama){
        $this->nama = $nama;
    }
    // Dalam Java public void panggil(){}
    public function panggil(){
        echo "Hi My Name is ".$this->nama;
    }


}
?>