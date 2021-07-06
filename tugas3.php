<?php
  $jarak = 360;
  $kecepatan = 90;
  $waktu = $jarak/$kecepatan;

  echo "
    Jarak kota A - Z = $jarak Km <br>
    Kecepatan motor = $kecepatan <br>
    Waktu Tempuh = ? <br>
    Jawaban : <b>$waktu</b> Menit

    <br>===================<br>
  ";

  $tabung = 150000;
  $bunga = 12.5;
  $hasil = ($bunga/100) * 150000;
  $hasil2 = $tabung + $hasil;

  echo "
    Tabungan Awal = Rp. $tabung <br>
    Bunga Setahun = $bunga % <br>
    Total Tabungan Setahun = ? <br>
    Jawaban : Rp. <b>$hasil2</b>
  ";
?>
