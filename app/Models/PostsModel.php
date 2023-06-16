<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table = "posts";
    protected $primaryKey = "post_id";
    protected $allowedFields = ['username', 'post_kode', 'post_title', 'post_title_seo', 'post_status', 'post_type', 'post_thumbnail', 'post_description', 'post_content'];


    function setTitleSeo($title)
    {
        $builder = $this->table($this->table);
        $url = strip_tags($title); #hilangkan tag html
        $url = preg_replace('/[^A-Za-z0-9]/', " ", $url);
        $url = trim($url);
        $url = preg_replace('/[^A-Za-z0-9]/', "-", $url);
        $url = strtolower($url);

        $builder->where('post_title', $title);
        $jumlah = $builder->countAllResults();
        if ($jumlah > 0) {
            $jumlah = $jumlah + 1;
            return $url . "-" . $jumlah;
        }
        return $url;
    }

    function insertPost($data, $post_type)
    {
        helper("global_fungsi_helper");

        $builder = $this->table($this->table);
        $data['post_type'] = $post_type;

        foreach ($data as $key => $value) {
            $data[$key] = purify($value);
        }

        if (isset($data['post_id'])) {
            $aksi = $builder->save($data);
            $id = $data['post_id'];
        } else {
            /**
             * syarat title_seo = hanya huruf dan angka
             * 
             * title = Hello World
             * title_seo = hello-world
             * 
             * title2 = Hello World
             * title_seo2 = hello-world-2
             */
            $data['post_title_seo'] = $this->setTitleSeo($data['post_title']);
            $aksi = $builder->save($data);
            $id = $builder->getInsertID();
        }

        if ($aksi) {
            return $id;
        } else {
            return false;
        }
    }


    public function listPost($post_type, $jumlahBaris, $katakunci = null, $group_dataset = null, $start_date = null, $end_date = null)
    {
        $builder = $this->db->table('posts');
        $builder->where('post_type', $post_type);
        if ($katakunci != null) {
            $builder->like('post_title', $katakunci);
        }
        if ($start_date != null && $end_date != null) {
            $builder->where('post_time >=', $start_date);
            $builder->where('post_time <=', $end_date);
            $builder->groupBy($group_dataset); // menambahkan klausul GROUP BY
        }
        $builder->orderBy('post_time', 'DESC');
        $query = $builder->get();
    
        $results['record'] = $query->getResultArray();
    
        $pager = \Config\Services::pager();
        $pager->setPath('dt');
        $pager->makeLinks(1, $jumlahBaris, count($results['record']), 'datatable');
    
        $results['pager'] = $pager;
    
        return $results;
    }
    
    public function listPostLimit($post_type, $jumlahBaris, $katakunci = null, $group_dataset = null, $start_date = null, $end_date = null)
    {
        $builder = $this->db->table('posts');
        $builder->where('post_type', $post_type);
        if ($katakunci != null) {
            $builder->like('post_title', $katakunci);
        }
        if ($start_date != null && $end_date != null) {
            $builder->where('post_time >=', $start_date);
            $builder->where('post_time <=', $end_date);
            $builder->groupBy($group_dataset); // menambahkan klausul GROUP BY
        }
        $builder->orderBy('post_time', 'DESC')->limit(5);
        $query = $builder->get();
    
        $results['record'] = $query->getResultArray();
    
        $pager = \Config\Services::pager();
        $pager->setPath('dt');
        $pager->makeLinks(1, $jumlahBaris, count($results['record']), 'datatable');
    
        $results['pager'] = $pager;
    
        return $results;
    }

    function getPost($post_id)
    {
        $builder = $this->table($this->table);

        $builder->where('post_id', $post_id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    function getPostByKode($post_kode)
    {
        $builder = $this->table($this->table);

        $builder->where('post_kode', $post_kode);
        $query = $builder->get();
        return $query->getRowArray();
    }

    function deletePost($post_id)
    {
        $builder = $this->table($this->table);
        $builder->where('post_id', $post_id);
        if ($builder->delete()) {
            return true;
        } else {
            return false;
        }
    }

    function getPostBySeo($post_title_seo)
    {
        $builder = $this->table($this->table);
        $builder->where('post_title_seo', $post_title_seo);
        $query = $builder->get();
        return $query->getRowArray();
    }

    

    
    

    
}

