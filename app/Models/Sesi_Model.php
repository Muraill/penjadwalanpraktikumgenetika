<?php

namespace App\Models;

use BadFunctionCallException;
use CodeIgniter\Model;

class Sesi_Model extends Model
{
    protected $table = 'sesi';
    protected $useTimestamps = true;
    protected $allowedFields = ['sesi', 'waktu'];

    public function search($keyword)
    {
        // $builder = $this->table('jadwal');
        // $builder->like('nama', $keyword);
        // return $builder;
        return $this->table('sesi')->like('sesi', $keyword)->orLike('waktu', $keyword);
    }


    public function getSesi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
