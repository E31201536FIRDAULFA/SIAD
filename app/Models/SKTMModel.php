<?php

namespace App\Models;

use CodeIgniter\Model;

class SKTMModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'sktm';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'tgl',
        'userid',
        'nik',
        'no_kk',
        'nama',
        'jk',
        'ttl',
        'stswarga',
        'nama_ayah',
        'ttlayah',
        'agama',
        'pekerjaan',
        'alamatayah',
        'gaji',
        'keperluan',
        'scankk',
        'status',
        'suratsktm'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
