<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\PostsModel;

class Article extends BaseController{
    function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->m_posts = new PostsModel();
        helper("global_fungsi_helper");
        /** untuk konfigurasi internal */
        $this->halaman_controller = "article";
        $this->halaman_label = "Artikel";

    }
    
    function index()
    {
        $data = [];
        $data['templateJudul'] = "Tabel Editor Barang";

        $post_type = 'article';
        $jumlahBaris = 5;
        $katakunci = $this->request->getVar('katakunci');
        $group_dataset = "dt";

        $hasil = $this->m_posts->listPost($post_type, $jumlahBaris, $katakunci, $group_dataset);

        $data['record'] = $hasil['record'];
        $data['pager'] = $hasil['pager'];
        $data['katakunci'] = $katakunci;
        $currentPage = $this->request->getVar('page_dt');
        $data['nomor'] = nomor($currentPage, $jumlahBaris);


        //header
        echo view("user/v_template_header", $data);
        echo view("user/v_article_monitor", $data);
        echo view("user/v_template_footer", $data);
        //footer
    }
    function monitor()
    {
        $data = [];
        $data['templateJudul'] = "Tabel Editor Barang";

        $post_type = 'article';
        $jumlahBaris = 5;
        $katakunci = $this->request->getVar('katakunci');
        $group_dataset = "dt";

        $hasil = $this->m_posts->listPost($post_type, $jumlahBaris, $katakunci, $group_dataset);

        $data['record'] = $hasil['record'];
        $data['pager'] = $hasil['pager'];
        $data['katakunci'] = $katakunci;
        $currentPage = $this->request->getVar('page_dt');
        $data['nomor'] = nomor($currentPage, $jumlahBaris);


        //header
        echo view("user/v_template_header", $data);
        echo view("user/v_article_monitor", $data);
        echo view("user/v_template_footer", $data);
        //footer
    }

    public function laporan()
    {
        $data = [];
        $data['templateJudul'] = "Laporan Barang Berdasarkan Bulan";

        $post_type = 'article';
        $jumlahBaris = 5;
        $katakunci = $this->request->getVar('katakunci');
        $group_dataset = "posts";

        $start_date = $this->request->getVar('start_date');
        $end_date = $this->request->getVar('end_date');
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;

        // Filter data berdasarkan tanggal
        if ($start_date && $end_date) {
            $hasil = $this->m_posts->listPost($post_type, $jumlahBaris, $katakunci, $group_dataset, $start_date, $end_date);
        } else {
            $hasil = $this->m_posts->listPost($post_type, $jumlahBaris, $katakunci, $group_dataset);
        }

        $data['record'] = $hasil['record'];
        $data['pager'] = $hasil['pager'];
        $data['katakunci'] = $katakunci;
        $currentPage = $this->request->getVar('page_dt');
        $data['nomor'] = nomor($currentPage, $jumlahBaris);

        echo view("user/v_template_header", $data);
        echo view("user/v_article_laporan", $data);
        echo view("user/v_template_footer", $data);
    }


    function gambar()
    {
        $data = [];
        $data['templateJudul'] = "Tabel Gambar Barang";

        $post_type = 'article';
        $jumlahBaris = 5;
        $katakunci = $this->request->getVar('katakunci');
        $group_dataset = "dt";

        $hasil = $this->m_posts->listPost($post_type, $jumlahBaris, $katakunci, $group_dataset);

        $data['record'] = $hasil['record'];
        $data['pager'] = $hasil['pager'];
        $data['katakunci'] = $katakunci;
        $currentPage = $this->request->getVar('page_dt');
        $data['nomor'] = nomor($currentPage, $jumlahBaris);

        //header
        echo view("user/v_template_header", $data);
        echo view("user/v_article_gambar", $data);
        echo view("user/v_template_footer", $data);
        //footer
    }

   
}