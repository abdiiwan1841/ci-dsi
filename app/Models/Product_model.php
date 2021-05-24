<?php 

namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model
{
    protected $table = 'barang';
    protected $primaryKey =  'ID_BARANG';
    protected $allowedFields = ['ID_BARANG', 'ID_SATUAN', 'ID_LOKASI','ID_KATEGORI', 'NAMA_BARANG', 'KETERANGAN_BARANG', 'HARGA_BARANG'];

    // public function __construct() {
    //     $this->builder = $this->builder($this->table);
    // }
}