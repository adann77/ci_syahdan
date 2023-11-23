<?php
class buku
{
    function Perpustakaan($bukupinjam, $bukutersedia, $bukurusak, $bukutidakkembali)
    {
        $totalbuku = $bukupinjam + $bukutersedia + $bukurusak + $bukutidakkembali;
        echo "total keseluruhan buku adalah= ", $totalbuku;
        $totalbukuyangtersedia = $totalbuku - 75;
        echo "total buku yang tersedia bila sudah dikembalikan 75 buku adalah= ", $totalbukuyangtersedia;
        $totalbukukurangrusak = $totalbuku - $bukurusak * 0.2;
        echo "total buku apabila 20% buku rusak dibuang adalah= ", $totalbukukurangrusak;
    }
}
