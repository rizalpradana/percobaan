<?php
class mobil{

	public $nama;
	public $keluaran;
	public $kelas;
	public $warna;
//konstraktor
public function __construct($nama,$keluaran,$kelas,$warna){
	$this->nama = $nama;
	$this->keluaran = $keluaran;
	$this->kelas = $kelas;
	$this->warna = $warna;
}
public function get_nama()
	{
	return	$this->nama;
	}
public function get_keluaran()
	{
	return	$this->keluaran;
	}
	public function get_kelas()
	{
	return	$this->kelas;
	}
	public function get_warna()
	{
	return	$this->warna;
	}
}
 
?>