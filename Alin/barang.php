<?php

Class Barang{
    
    public $namaBarang = "Bumi Series";
    public $harga = "100000";
    public $jumlah = "1";
}

Class Buku extends Barang{
    public $isbn = "9786020627526";
    public $pengarang = "Tere Liye";
    public $penerbit = "Gramedia Pusaka Utama";

    public function minjam() {
        return "<b>MEMINJAM BUKU</b> <br> 
        ___________________ <br>
        <br>
        Buku : $this->namaBarang <br>
        Pengarang : $this->pengarang <br>
        Penerbit : $this->penerbit <br>
        ISBN : $this->isbn <br>
        Harga : $this->harga <br>
        Jumlah : $this->jumlah";
      }
    
       public function mengembalikan() {
         return "<br><b>mengembalikan buku</b> dengan ISBN $this->isbn pengarangnya $this->pengarang dan penerbitnya $this->penerbit";
       }
}


$b = new Buku();

echo $b->minjam();
echo "<br>";
echo $b->mengembalikan();