<?php

class Mahasiswa{
	private $NIM = "";
    private $Nama = "";
    private $JenisKelamin = "";
    private $ProgramStudi = "";
    private $Semester = "";

	public function __construct($NIM = "", $Nama = "", $JenisKelamin = "", $ProgramStudi = "", $Semester = ""){
		$this->NIM = $NIM;
        $this->Nama = $Nama;
        $this->JenisKelamin = $JenisKelamin;
        $this->ProgramStudi = $ProgramStudi;
        $this->Semester = $Semester;
	}

	public function setNIM($NIM){
		$this->NIM = $NIM;
	}
    public function getNIM(){
		return $this->NIM;
	}

    public function setNama($Nama){
		$this->Nama = $Nama;
	}
    public function getNama(){
		return $this->Nama;
	}

    public function setJenisKelamin($JenisKelamin){
		$this->JenisKelamin = $JenisKelamin;
	}
    public function getJenisKelamin(){
		return $this->JenisKelamin;
	}

    public function setProgramStudi($ProgramStudi){
		$this->ProgramStudi = $ProgramStudi;
	}
    public function getProgramStudi(){
		return $this->ProgramStudi;
	}

    public function setSemester($Semester){
		$this->Semester = $Semester;
	}
    public function getSemester(){
		return $this->Semester;
	}
}

?>