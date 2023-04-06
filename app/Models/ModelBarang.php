<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBarang extends Model
{
    protected $table = "database_barang";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama', 'stok', 'status', 'keterangan'];

    function cari($katakunci)
    {
        //budi gmail
        $builder = $this->table("database_barang");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike('nama', $arr_katakunci[$x]);
            $builder->orLike('stok', $arr_katakunci[$x]);
            $builder->orLike('status', $arr_katakunci[$x]);
            $builder->orLike('keterangan', $arr_katakunci[$x]);
        }
        return $builder;
    }
}
