<?php

namespace pbo\marketplace;

require_once('./PropertyConstant.php');

use pbo\marketplace\produk;

class Jasa 
{
    use produk;
    
    public function payment($tipe)
    {
        return match ($tipe) 
        {
            'virtual' => 'Virtual Account' ,
            'qris' => 'QRIS' ,
            default => 'hanya bisa pembayaran va dan qris'
        };
    }
}