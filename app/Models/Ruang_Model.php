<?php

namespace App\Models;

use BadFunctionCallException;
use CodeIgniter\Model;

class Ruang_Model extends Model
{
    protected $table = 'ruang';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_ruang'];

    public function search($keyword)
    {
        // $builder = $this->table('jadwal');
        // $builder->like('nama', $keyword);
        // return $builder;
        return $this->table('ruang')->like('nama_ruang', $keyword);
    }


    public function getRuang($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
