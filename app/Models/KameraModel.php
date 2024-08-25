<?php

namespace App\Models;

use CodeIgniter\Model;

class KameraModel extends Model
{
    protected $table = 'tb_kamera';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['nama', 'alamat', 'no_hp', 'kamera', 'tgl_peminjaman', 'tgl_pengembalian'];
}

class JenisModel extends Model
{
    protected $table = 'tb_jenis';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['jenis'];
}
