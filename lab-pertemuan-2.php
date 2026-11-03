<?php
// LAB 2 — Class, object, constructor
// Spesifikasi:
//  - Mahasiswa(string $nim, string $nama, string $prodi, float $ipk)
//      info(): string
//      predikat(): string  -> ipk >= 3.51 'Cumlaude', ipk >= 3.01 'Sangat Memuaskan', selain itu 'Memuaskan'
//  - Produk(string $nama, int $harga, int $stok)
//      totalNilai(): int   -> harga x stok

class Mahasiswa
{
    public string $nim;
    public string $nama;
    public string $prodi;
    public float $ipk;
    
    public function __construct(string $nim,  string $nama, string $prodi, float $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }
    
    public  function info (): string
    {
        return "NIM: {$this->nim}, Nama: {$this->nama}, Prodi: {$this->prodi}, IPK: {$this->ipk}";
    }
    
    public function predikat(): string
    {
        if ($this->ipk >= 3.51) {
            return 'Cumlaude';
        } elseif ($this->ipk >= 3.01) {
            return 'Sangat Memuaskan';
        } else {
            return 'Memuaskan';
        }
    }
}

class Produk
{
   public string $nama;
   public string $harga;
   public string $stok;
    
   public function __construct(string $nama, int $harga, int $stok)
   {
       $this->nama = $nama;
       $this->harga = $harga;
       $this->stok = $stok;
   }
    
   public function totalNilai(): int
   {
       return $this->harga * $this->stok;
   }
}

// TODO: buat 3 object Mahasiswa dan tampilkan info() + predikat()
$mhs1 = new mahasiswa ("24.24.031702", "shinta nadilla", "pti", 3.80);
echo $mhs1->info() . " -> " . $mhs1->predikat() . "\n";

$mhs2 = new mahasiswa ("24.24.031703", "chinta", "pti", 3.20);
echo $mhs2->info() . " -> " . $mhs2->predikat() . "\n";

$mhs3 = new mahasiswa ("24.24.031704", "nadilla", "pti", 3.90);
echo $mhs3->info() . " -> " . $mhs3->predikat() . "\n";


$produk1 = new Produk("Buku Pemprograman PHP", 75000, 10);
echo "Produk: {$produk1->nama} | Total Nilai: " . $produk1->totalNilai() . "\n";