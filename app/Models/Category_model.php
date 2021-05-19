<?php 

namespace App\Models;

use CodeIgniter\Model;

class Category_model extends Model
{
    protected $table = 'kategori';
    protected $primaryKey =  'ID_KATEGORI';
    protected $allowedFields = ['ID_KATEGORI', 'NAMA_KATEGORI', 'PREFIX_KATEGORI'];

    // public function __construct() {
    //     $this->builder = $this->builder($this->table);
    // }
}