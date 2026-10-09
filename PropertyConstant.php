<?php

class produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    
    //constant
    public const PAJAK = 0.11;

}

//objek
$produk = new produk();

//input ke properti
$produk->kode = 'P0001';
$produk->nama = 'LAPTOP';
$produk->harga = 10000000;
$produk->stok = 5;

//output
$pajak = produk::PAJAK * 100;
$jumlahpajak = $produk->harga * produk::PAJAK;

//total
$total = $produk->harga + $jumlahpajak;

echo 'produk :'.$produk->nama;
echo '<br>';
echo 'harga :'.$produk->harga;
echo '<br>';
echo 'stok :'.$produk->stok;
echo '<br>';
echo 'pajak : '.$pajak . '%';
echo '<br>';
echo 'total harga setelah pajak : Rp. '.$total;