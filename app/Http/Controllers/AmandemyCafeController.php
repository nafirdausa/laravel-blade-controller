<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmandemyCafeController extends Controller
{
    public function getAllData()
    {
        // Daftar Pilihan Menu Cafe
        $NamaMenu = [
            [
                "nm_kopi" => "Espresso",
                "img" => "espresso.jpg",
                "deskripsi"=>"Espreso adalah jenis kopi yang dihasilkan dengan mengekstraksi biji kopi yang sudah digiling dengan menyemburkan air panas di bawah tekanan tinggi.",
                "harga" => 18000,
            ],
            [
                "nm_kopi" => "Macchiato",
                "img" => "macchiato.jpg",
                "deskripsi"=>"Coffee macchiato adalah minuman kopi yang dibuat dengan mencampurkan espresso dengan susu. Ada dua jenis macchiato yang biasanya disajikan, yaitu espresso macchiato dan latte macchiato.",
                "harga" => 20000,
            ],
            [
                "nm_kopi" => "Latte",
                "img" => "latte.jpeg",
                "deskripsi"=>"Latte atau Caffè latte adalah espreso atau kopi yang dicampur dengan susu dan memiliki lapisan busa yang tipis di bagian atasnya. Perbandingan antara susu dengan kopi pada caffè latte adalah 2:1.",
                "harga" => 25000,
            ],
            [
                "nm_kopi" => "Cappucino",
                "img" => "cappuccino.jpeg",
                "deskripsi"=>"Kapucino adalah minuman kopi khas Italia yang dibuat dari espreso dan susu, tetapi referensi lain juga ada yang menyebutkan bahwa kapucino berawal dari biji biji kopi tentara Turki yang tertinggal setelah peperangan",
                "harga" => 19000,
            ],
        ];
        return $NamaMenu;
    }

    public function index()
    {
        $menu = $this->getAllData();

        return view('layout.master', [
            'hero' => view('layout.hero'),
            'list' => view('layout.list', ['menu' => $menu])
        ]);
    }
}
