<?php

namespace App\Models;

use BadFunctionCallException;
use CodeIgniter\Model;

class kelas_Model extends Model
{
    protected $table = 'kelas';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_kelas'];

    public function search($keyword)
    {
        // $builder = $this->table('jadwal');
        // $builder->like('nama', $keyword);
        // return $builder;
        return $this->table('kelas')->like('nama_kelas', $keyword);
    }


    public function getKelas($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
