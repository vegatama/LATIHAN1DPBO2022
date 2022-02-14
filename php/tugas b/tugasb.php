<?php

class Timbola{
    private $Nama = "";
    private $NegaraAsal = "";
    private $TahunBerdiri = "";
    private $Pemain = array();

	public function __construct($Nama = "", $NegaraAsal = "", $TahunBerdiri = "", $Pemain = array()){
        $this->Nama = $Nama;
        $this->NegaraAsal = $NegaraAsal;
        $this->TahunBerdiri = $TahunBerdiri;
        $this->Pemain = $Pemain;
	}

    public function setNama($Nama){
		$this->Nama = $Nama;
	}
    public function getNama(){
		return $this->Nama;
	}

    public function setNegaraAsal($NegaraAsal){
		$this->NegaraAsal = $NegaraAsal;
	}
    public function getNegaraAsal(){
		return $this->NegaraAsal;
	}

    public function setTahunBerdiri($TahunBerdiri){
		$this->TahunBerdiri = $TahunBerdiri;
	}
    public function getTahunBerdiri(){
		return $this->TahunBerdiri;
	}

    public function setPemain($Pemain){
		$this->Pemain = $Pemain;
	}
    public function getPemain($i){
		return $this->Pemain[$i];
	}
}

?>