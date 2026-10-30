<?php

require('./PropertyConstant.php');

use pbo\marketplace\produk;

//objek
$produk = new produk('P0001', 'laptop', 10000000, 5);


echo 'produk :'.$produk->nama;
echo '<br>';
echo 'harga :'.$produk->harga;
echo '<br>';
echo 'stok :'.$produk->stok;
echo '<br>';
echo 'pajak : '.$produk->pajak(). '%';
echo '<br>';
echo 'total harga setelah pajak : Rp. '.$produk->total();