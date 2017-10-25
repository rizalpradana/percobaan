<?php
require_once '1.php';
$mobil = new mobil ('suzuki','2008','250cc','biru');
echo"<h3>mobil</h3>";
echo "nama :".$mobil->get_nama().'<br>';
echo "keluaran :".$mobil->get_keluaran().'<br>';
echo "kelas :".$mobil->get_kelas().'<br>';
echo "warna :".$mobil->get_warna().'<br>';
?>