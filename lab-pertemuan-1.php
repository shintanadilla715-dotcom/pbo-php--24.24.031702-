<?php
// LAB 1 — Gaya prosedural vs OOP
// Spesifikasi: class Buku dengan constructor(string $judul, string $penulis, int $tahun)
//              dan method info(): string yang memuat judul & tahun.

// 1) Versi prosedural
$buku = [
    ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
    ['judul' => 'Perahu Kertas', 'penulis' =>' Dewi Lestari', 'tahun' =>2003], 
    ['judul' => 'Sang Pemimpi', 'penulis' =>' Andrea Hirata', 'tahun' =>2006],
    
];
foreach ($buku as $b) {
    echo "{$b['judul']} - {$b['penulis']} ({$b['tahun']})\n";
}

// 2) Versi OOP
class Buku
{
    public string $judul;
    public string $penulis;
    public string $tahun;
    
    public function __construct(string $judul, string $penulis, int $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun   = $tahun;
    }
    
    public function info(): string
    {
        return "{$this->judul} - {$this->penulis} ({$this->tahun})";
    }
}

// TODO: buat 3 object Buku lalu tampilkan info()-nya
$buku1 = new Buku('Laskar Pelangi', 'Andrea Hirata', 2005);
$buku2 = new Buku('Perahu Kertas', 'Dewi Lestari', 2003);
$buku3 = new Buku('Sang Pemimpi', 'Andrea Hirata', 2006);

echo $buku1->info() . "\n";
echo $buku2->info() . "\n";
echo $buku3->info() . "\n";