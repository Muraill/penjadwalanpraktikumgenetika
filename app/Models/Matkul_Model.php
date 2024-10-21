<?php

namespace App\Models;

use BadFunctionCallException;
use CodeIgniter\Model;

class Matkul_Model extends Model
{
    protected $table = 'matkul';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_matkul'];

    public function search($keyword)
    {
        // $builder = $this->table('jadwal');
        // $builder->like('nama', $keyword);
        // return $builder;
        return $this->table('matkul')->like('nama_matkul', $keyword);
    }


    public function getMatkul($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
