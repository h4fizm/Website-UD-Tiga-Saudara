<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = "admin";
    protected $primaryKey = "email";
    protected $allowedFields = ['username', 'password', 'nama_lengkap', 'token'];

    /**
     * untuk insert data
     */
   
    public function register($data)
    {
        return $this->insert($data);
    }

    /**
     * untuk ambil data berdasarkan username atau email
     */
    public function getData($parameter)
    {
        $builder = $this->db->table($this->table);
        $builder->where('username', $parameter);
        $builder->orWhere('email', $parameter);
        $query = $builder->get();
        return $query->getRowArray();
    }

    /** untuk update / simpan data */
    public function updateData($data)
    {
        $builder = $this->db->table($this->table);
        $builder->where('email', $data['email']);
        if ($builder->update($data)) {
            return true;
        } else {
            return false;
        }
    }
}
