<?php
class makanan{
    public $nama;
       public $warna;

       public function __construct($nama, $warna){
        $this->nama = $nama;
        $this->warna = $warna;
       }
    }

    $nasigoreng = new makanan("nasigoreng", "nasi pasifik");
    $nasigoreng = new makanan("nasigoreng", "nasi pasifik");
    print_r($nasigoreng);
    print"<p>";
    print_r($nasigoreng);

    print_r("<p><strong>by: nelfi sahra");