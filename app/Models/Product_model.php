<?php 

namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model
{
    protected $table = 'barang';
    protected $primaryKey =  'ID_BARANG';
    protected $allowedFields = ['ID_BARANG', 'ID_SATUAN', 'ID_LOKASI', 'ID_KATEGORI', 'NAMA_BARANG', 'KETERANGAN_BARANG', 'HARGA_BARANG'];

    public function getProduk()
    {
         return $this->db->table('barang')
         ->join('satuan','satuan.ID_SATUAN=barang.ID_SATUAN')
         ->join('lokasi', 'lokasi.ID_LOKASI=barang.ID_LOKASI')
         ->join('kategori', 'kategori.ID_KATEGORI=barang.ID_KATEGORI')
         ->groupBy('barang.ID_BARANG')
         ->get()->getResultArray();  
    }

    // public function __construct() {
    //     $this->builder = $this->builder($this->table);
    // }
}