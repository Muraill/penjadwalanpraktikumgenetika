<?php

namespace App\Models;

use BadFunctionCallException;
use CodeIgniter\Model;

class Dosen_Model extends Model
{
    protected $table = 'dosen';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_dosen', 'kode_dosen'];

    public function search($keyword)
    {
        // $builder = $this->table('jadwal');
        // $builder->like('nama', $keyword);
        // return $builder;
        return $this->table('dosen')->like('kode_dosen', $keyword)->orLike('nama_dosen', $keyword);
    }


    public function getDosen($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
