<div class="card-header">
    <i class="fas fa-chart-area me-1"></i>
        <?php echo $templateJudul ?>
</div>
<div class="card-body">
    <div class="row mb-3">
        <div class="col-lg-9 pt-1 pb-1">
            <a href="<?php echo site_url("admin/article/tambah") ?>" class="btn btn-xl btn-primary">+ Tambah Barang</a>
        </div>
    </div>
    <?php
    $session = \Config\Services::session();
    if ($session->getFlashdata('warning')) {
    ?>
        <div class="alert alert-warning">
            <ul>
                <?php
                foreach ($session->getFlashdata('warning') as $val) {
                ?>
                    <li><?php echo $val ?></li>
                <?php
                }
                ?>
            </ul>
        </div>
    <?php
    }
    if ($session->getFlashdata('success')) {
    ?>
        <div class="alert alert-success"><?php echo $session->getFlashdata('success') ?></div>
    <?php
    }
    ?>
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr>
                <th class="text-center col-1">No.</th>
                <th class="text-center col-1">Kode</th>
                <th class="text-center col-2">Nama Barang</th>
                <th class="text-center col-1">Stok</th>
                <th class="text-center col-1">Status</th>
                <th class="text-center col-3">Catatan</th>
                <th class="text-center col-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($record as $value) {
                $post_id = $value['post_id'];
                $link_edit = site_url("admin/article/edit/$post_id");
                $link_delete = site_url("admin/article/?aksi=hapus&post_id=$post_id");
                $post_id = $value['post_id'];
                $post_thumbnail = $value['post_thumbnail']
            ?>
                <tr>
                    <td class="text-center"><?php echo $nomor ?></td>
                    <td class="text-center"><?php echo $value['post_kode'] ?></td>
                    <td class="text-center"><?php echo $value['post_title'] ?></td>
                    <td class="text-center"><?php echo $value['post_description'] ?></td>
                    <td class="text-center"><?php echo $value['post_status'] ?></td>
                    
                    <td class="text-center"><?php echo $value['post_content'] ?></td>
                    
                    <td class="text-center">
                        <a href='<?php echo $link_edit ?>' class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?php echo $link_delete ?>" onclick="return confirm('Yakin akan menghapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="<?php echo base_url(LOKASI_UPLOAD . "/" . $post_thumbnail) ?>" class="btn btn-sm btn-info">Preview</a>
                    </td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>