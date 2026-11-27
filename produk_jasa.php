<?php

require('./Jasa.php');

use pbo\marketplace\Jasa;

//objek
$produk = new Jasa();

$produk ->setKode('P0001')
        ->setNama('Laptop')
        ->setHarga(10000000)
        ->setStok(5);


echo 'produk :'.$produk->getNama();
echo '<br>';
echo 'harga :'.$produk->getHarga();
echo '<br>';
echo 'stok :'.$produk->getStok();
echo '<br>';
echo 'pajak : '.$produk->pajak(). '%';
echo '<br>';
echo 'total harga setelah pajak : Rp. '.$produk->total();
echo '</br>';
echo "Metode pembayarannya : " .$produk->payment('qris');