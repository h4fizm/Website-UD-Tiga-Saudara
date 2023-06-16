<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PostsModel;

class Article extends BaseController
{
    function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->m_posts = new PostsModel();
        helper("global_fungsi_helper");
        /** untuk konfigurasi internal */
        $this->halaman_controller = "article";
        $this->halaman_label = "Artikel";


    }

    function api($kode = NULL)
    {
        $data = [];

        if ($kode != NULL) {
            $dataPost = $this->m_posts->getPostByKode($kode);
            if (empty($dataPost)) {
                // return redirect()->to('admin/' . $this->halaman_controller);
            }
            $hasil['record'] = $dataPost;
        } else {
            $post_type = 'article';
            $jumlahBaris = 5;
            $katakunci = $this->request->getVar('katakunci');
            $group_dataset = "dt";

            $hasil = $this->m_posts->listPostLimit($post_type, $jumlahBaris, $katakunci, $group_dataset);

            $data['record'] = $hasil['record'];
            $data['pager'] = $hasil['pager'];
            $data['katakunci'] = $katakunci;
            $currentPage = $this->request->getVar('page_dt');
            $data['nomor'] = nomor($currentPage, $jumlahBaris);
        }


        //header
        echo view("admin/api_article", $hasil);
        //footer
    }
    function index()
    {
        $data = [];
        if ($this->request->getVar('aksi') == 'hapus' && $this->request->getVar('post_id')) {
            $dataPost = $this->m_posts->getPost($this->request->getVar('post_id'));
            if ($dataPost['post_id']) { #memastikan bahwa ada data
                @unlink(LOKASI_UPLOAD . "/" . $dataPost['post_thumbnail']);
                $aksi = $this->m_posts->deletePost($this->request->getVar('post_id'));
                if ($aksi == true) {
                    session()->setFlashdata('success', "Data berhasil dihapus");
                } else {
                    session()->setFlashdata('warning', ['Gagal menghapus data']);
                }
            }
            return redirect()->to("admin/" . $this->halaman_controller);
        }

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
        echo view("admin/v_template_header", $data);
        echo view("admin/v_article", $data);
        echo view("admin/v_template_footer", $data);
        //footer
    }


    function tambah()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getVar(); #setiap yang diinputkan akan dikembalikan ke view
            $aturan = [
                'post_kode' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode barang harus diisi'
                    ],
                ],
                'post_title' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama barang harus diisi'
                    ],
                ],
                'post_description' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Stok harus diisi'
                    ],
                ],
                'post_thumbnail' => [
                    'rules' => 'is_image[post_thumbnail]',
                    'errors' => [
                        'is_image' => 'Hanya gambar yang diperbolehkan untuk diupload'
                    ]
                ]
            ];
            $file = $this->request->getFile('post_thumbnail');
            if (!$this->validate($aturan)) {
                session()->setFlashdata('warning', $this->validation->getErrors());
            } else {
                $post_thumbnail = '';
                if ($file->getName()) {
                    $post_thumbnail = $file->getRandomName();
                }
                $record = [
                    'username' => session()->get('akun_username'),
                    'post_kode' => $this->request->getVar('post_kode'),
                    'post_title' => $this->request->getVar('post_title'),
                    'post_status' => $this->request->getVar('post_status'),
                    'post_thumbnail' => $post_thumbnail,
                    'post_description' => $this->request->getVar('post_description'),
                    'post_content' => $this->request->getVar('post_content')
                ];

                $aksi = $this->m_posts->insertPost($record, $post_type = 'article');
                if ($aksi != false) {
                    $page_id = $aksi;
                    if ($file->getName()) {
                        $lokasi_direktori = LOKASI_UPLOAD; #diambil dari constants
                        $file->move($lokasi_direktori, $post_thumbnail);
                    }
                    session()->setFlashdata('success', 'Data berhasil dimasukkan');
                    return redirect()->to('admin/article/tambah');
                } else {
                    session()->setFlashdata('warning', ['Gagal memasukkan data']);
                    return redirect()->to('admin/article/tambah');
                }

            }
        }

        $data['templateJudul'] = "Penambahan Barang";
        echo view("admin/v_template_header", $data);
        echo view("admin/v_article_tambah", $data);
        echo view("admin/v_template_footer", $data);

    }

    function monitor()
    {
        $data = [];
        $data['templateJudul'] = "Tabel Monitor Barang";

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
        echo view("admin/v_template_header", $data);
        echo view("admin/v_article_monitor", $data);
        echo view("admin/v_template_footer", $data);
        //footer
    }

    function edit($post_id)
    {
        $data = [];
        // $post_id = 'post_id';
        $dataPost = $this->m_posts->getPost($post_id);
        if (empty($dataPost)) {
            // return redirect()->to('admin/' . $this->halaman_controller);
        }
        $data = $dataPost;

        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getVar(); #setiap yang diinputkan akan dikembalikan ke view
            $aturan = [
                'post_kode' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode barang harus diisi'
                    ],
                ],
                'post_title' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus diisi'
                    ],
                ],
                'post_description' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Stok harus diisi'
                    ],
                ],
                'post_thumbnail' => [
                    'rules' => 'is_image[post_thumbnail]',
                    'errors' => [
                        'is_image' => 'Hanya gambar yang diperbolehkan untuk diupload'
                    ]
                ]
            ];
            $file = $this->request->getFile('post_thumbnail');
            if (!$this->validate($aturan)) {
                session()->setFlashdata('warning', $this->validation->getErrors());
            } else {
                $post_thumbnail = $dataPost['post_thumbnail'];
                if ($file->getName()) {
                    $post_thumbnail = $file->getRandomName();
                }
                $record = [
                    'username' => session()->get('akun_username'),
                    'post_kode' => $this->request->getVar('post_kode'),
                    'post_title' => $this->request->getVar('post_title'),
                    'post_status' => $this->request->getVar('post_status'),
                    'post_thumbnail' => $post_thumbnail,
                    'post_description' => $this->request->getVar('post_description'),
                    'post_content' => $this->request->getVar('post_content'),
                    'post_id' => $post_id #untuk update perlu tambah post_id sebagai primary key
                ];
                $post_type = $this->halaman_controller;
                $aksi = $this->m_posts->insertPost($record, $post_type);
                if ($aksi != false) {
                    $page_id = $aksi;
                    if ($file->getName()) {
                        if ($dataPost['post_thumbnail']) {
                            @unlink(LOKASI_UPLOAD . "/" . $dataPost['post_thumbnail']);
                        }
                        $lokasi_direktori = LOKASI_UPLOAD; #diambil dari constants
                        $file->move($lokasi_direktori, $post_thumbnail);
                    }
                    session()->setFlashdata('success', 'Data berhasil diperbaiki');
                    return redirect()->to('admin/' . $this->halaman_controller . '/edit/' . $page_id);
                } else {
                    session()->setFlashdata('warning', ['Gagal memperbaiki data']);
                    return redirect()->to('admin/' . $this->halaman_controller . '/edit/' . $page_id);
                }
            }
        }

        $data['templateJudul'] = "Laman Edit Barang";
        echo view("admin/v_template_header", $data);
        echo view("admin/v_article_tambah", $data);
        echo view("admin/v_template_footer", $data);
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

        echo view("admin/v_template_header", $data);
        echo view("admin/v_article_laporan", $data);
        echo view("admin/v_template_footer", $data);
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
        echo view("admin/v_template_header", $data);
        echo view("admin/v_article_gambar", $data);
        echo view("admin/v_template_footer", $data);
        //footer
    }
    function qrcode()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getVar(); #setiap yang diinputkan akan dikembalikan ke view
            $aturan = [
                'post_kode' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode barang harus diisi'
                    ],
                ],
                'post_title' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama barang harus diisi'
                    ],
                ],
                'post_description' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Stok harus diisi'
                    ],
                ],
                'post_thumbnail' => [
                    'rules' => 'is_image[post_thumbnail]',
                    'errors' => [
                        'is_image' => 'Hanya gambar yang diperbolehkan untuk diupload'
                    ]
                ]
            ];
            $file = $this->request->getFile('post_thumbnail');
            if (!$this->validate($aturan)) {
                session()->setFlashdata('warning', $this->validation->getErrors());
            } else {
                $post_thumbnail = '';
                if ($file->getName()) {
                    $post_thumbnail = $file->getRandomName();
                }
                $record = [
                    'username' => session()->get('akun_username'),
                    'post_kode' => $this->request->getVar('post_kode'),
                    'post_title' => $this->request->getVar('post_title'),
                    'post_status' => $this->request->getVar('post_status'),
                    'post_thumbnail' => $post_thumbnail,
                    'post_description' => $this->request->getVar('post_description'),
                    'post_content' => $this->request->getVar('post_content')
                ];

                $aksi = $this->m_posts->insertPost($record, $post_type = 'article');
                if ($aksi != false) {
                    $page_id = $aksi;
                    if ($file->getName()) {
                        $lokasi_direktori = LOKASI_UPLOAD; #diambil dari constants
                        $file->move($lokasi_direktori, $post_thumbnail);
                    }
                    session()->setFlashdata('success', 'Data berhasil dimasukkan');
                    return redirect()->to('admin/article/qrcode');
                } else {
                    session()->setFlashdata('warning', ['Gagal memasukkan data']);
                    return redirect()->to('admin/article/qrcode');
                }

            }
        }

        $data['templateJudul'] = "Penambahan Barang";
        //header
        echo view("admin/v_template_header", $data);
        echo view("admin/v_qrcode", $data);
        echo view("admin/v_template_footer", $data);
        //footer
    }



    function qrcode_generator($post_id = "NULL")
    {
        $data = [];

        if ($post_id != 'NULL') {
            $dataPost = $this->m_posts->getPost($post_id);
            if (empty($dataPost)) {
                // return redirect()->to('admin/' . $this->halaman_controller);
            }
            $data = $dataPost;
        }

        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getVar(); #setiap yang diinputkan akan dikembalikan ke view
            $aturan = [
                'post_kode' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode barang harus diisi'
                    ],
                ],
                'post_title' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama barang harus diisi'
                    ],
                ],
                'post_description' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Stok harus diisi'
                    ],
                ]
            ];
            if (!$this->validate($aturan)) {
                session()->setFlashdata('warning', $this->validation->getErrors());
            } else {
                $record = [
                    'username' => session()->get('akun_username'),
                    'post_kode' => $this->request->getVar('post_kode'),
                    'post_title' => $this->request->getVar('post_title'),
                    'post_status' => $this->request->getVar('post_status'),
                    'post_description' => $this->request->getVar('post_description'),
                    'post_content' => $this->request->getVar('post_content')
                ];

                $aksi = $this->m_posts->insertPost($record, $post_type = 'article');
                if ($aksi != false) {
                    $page_id = $aksi;
                    session()->setFlashdata('success', 'Data berhasil dimasukkan');
                    return redirect()->to('admin/article/qrcode_generator');
                } else {
                    session()->setFlashdata('warning', ['Gagal memasukkan data']);
                    return redirect()->to('admin/article/qrcode_generator');
                }

            }
        }

        $data['templateJudul'] = "QR Code Generator";
        //header
        echo view("admin/v_template_header", $data);
        echo view("admin/v_qrcode_generator", $data);
        echo view("admin/v_template_footer", $data);
        //footer
    }

    function qrcode_edit($post_kode = "NULL")
    {
        $data = [];

        if ($post_kode != 'NULL') {
            $dataPost = $this->m_posts->getPostByKode($post_kode);
            if (empty($dataPost)) {
                session()->setFlashdata('warning', ['Kode barang `' . $post_kode . '` tidak ditemukan!']);
                return redirect()->to('admin/article/qrcode_edit');
            }
            return redirect()->to('admin/article/edit/' . $dataPost['post_id']);
        }

        $data['templateJudul'] = "QR Code Edit";
        //header
        echo view("admin/v_template_header", $data);
        echo view("admin/v_qrcode_edit", $data);
        echo view("admin/v_template_footer", $data);
        //footer
    }
}