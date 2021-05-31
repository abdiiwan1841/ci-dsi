<?php 

namespace App\Models;

use CodeIgniter\Model;

class Transac_model extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey =  'ID_TRANSAKSI';
    protected $allowedFields = ['ID_TRANSAKSI' ,'ID_BARANG', 'ID_VENDOR', 'JUMLAH_BARANG', 'KETERANGAN_TRANSAKSI', 'DATE_IN', 'DATE_OUT', 'TOTAL_HARGA', 'TIPE_TRANSAKSI'];

    public function getTransaksiMasuk()
    {
         return $this->db->table('transaksi')
         ->join('barang','barang.ID_BARANG=transaksi.ID_BARANG', 'left')
         ->join('lokasi', 'lokasi.ID_LOKASI=barang.ID_LOKASI', 'left')
         ->join('vendor', 'vendor.ID_VENDOR=transaksi.ID_VENDOR', 'left')
         ->join('satuan', 'satuan.ID_SATUAN=barang.ID_SATUAN', 'left')
         ->where('transaksi.DATE_IN !=', null)
         ->groupBy('transaksi.ID_TRANSAKSI')
         ->get()->getResultArray();  
    }

    public function getTransaksiKeluar()
    {
        return $this->db->table('transaksi')
        ->join('barang','barang.ID_BARANG=transaksi.ID_BARANG', 'left')
        ->join('lokasi', 'lokasi.ID_LOKASI=barang.ID_LOKASI', 'left')
        ->join('vendor', 'vendor.ID_VENDOR=transaksi.ID_VENDOR', 'left')
        ->join('satuan', 'satuan.ID_SATUAN=barang.ID_SATUAN', 'left')
        ->where('transaksi.DATE_OUT !=', null)
        ->groupBy('transaksi.ID_TRANSAKSI')
        ->get()->getResultArray();  
    }

}