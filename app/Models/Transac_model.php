<?php 

namespace App\Models;

use CodeIgniter\Model;

class Transac_model extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey =  'ID_TRANSAKSI';
    protected $allowedFields = ['ID_TRANSAKSI' ,'ID_BARANG', 'ID_VENDOR', 'JUMLAH_BARANG', 'KETERANGAN_TRANSAKSI', 'DATE_IN', 'DATE_OUT', 'TOTAL_HARGA', 'TIPE_TRANSAKSI'];

    // public function __construct() {
    //     $this->builder = $this->builder($this->table);
    // }
}