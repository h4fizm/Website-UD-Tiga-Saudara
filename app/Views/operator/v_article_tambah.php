<div class="card-header">
    <i class="fas fa-chart-area me-1"></i>
    <?php echo $templateJudul ?>
</div>
<div class="card-body">
    <?php
    $session = \Config\Services::session();
    if ($session->getFlashdata('warning')) {
        ?>
        <div class="alert alert-warning">
            <ul>
                <?php
                foreach ($session->getFlashdata('warning') as $val) {
                    ?>
                    <li>
                        <?php echo $val ?>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <?php
    }
    if ($session->getFlashdata('success')) {
        ?>
        <div class="alert alert-success">
            <?php echo $session->getFlashdata('success') ?>
        </div>
        <?php
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Kode Barang -->
        <div class="mb-3">
            <label for="input_post_title" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" id="input_post_kode" name="post_kode"
                value="<?php echo (isset($post_kode)) ? $post_kode : "" ?>">
        </div>
        <!-- Nama Barang -->
        <div class="mb-3">
            <label for="input_post_title" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="input_post_judul" name="post_title"
                value="<?php echo (isset($post_title)) ? $post_title : "" ?>">
        </div>
        <!-- Status ditambahkan atau dikurangkan -->
        <div class="mb-3">
            <label for="input_post_status" class="form-label">Status</label>
            <select name="post_status" class="form-select">
                <option value="ditambahkan" <?php echo (isset($post_status) && $post_status == 'ditambahkan') ? "selected" : "" ?>>(+) ditambahkan</option>
                <option value="dikurangkan" <?php echo (isset($post_status) && $post_status == 'dikurangkan') ? "selected" : "" ?>(-) dikurangkan</option>
            </select>
        </div>
        <?php
        if (isset($post_thumbnail)) {
            ?>
            <div class="mb-3">
                <img src="<?php echo base_url(LOKASI_UPLOAD . "/" . $post_thumbnail) ?>"
                    class="pb-2 mb-2 img-thumbnail w-50" />
            </div>
            <?php
        }
        ?>
        <!-- upload gambar -->
        <div class="mb-3">
            <label for="input_post_thumbnail" class="form-label">Upload Gambar</label>
            <input type="file" class="form-control" id="input_post_thumbnail" name="post_thumbnail">
        </div>
        <!-- jumlah stok -->
        <div class="mb-3">
            <label for="input_post_description" class="form-label">Jumlah Stok</label>
            <textarea class="form-control" id="input_post_description" name="post_description"
                rows="1"><?php echo (isset($post_description)) ? $post_description : '' ?></textarea>
        </div>
        <!-- keterangan/notes -->
        <div class="mb-3">
            <label for="input_post_content" class="form-label">Keterangan</label>
            <textarea class="form-control" name="post_content"
                rows="10"><?php echo (isset($post_content)) ? $post_content : '' ?></textarea>
        </div>
        
        <div>
            <?php if ($templateJudul == "Laman Edit Barang") { ?>
                <button type="button" id="hapus" class="btn btn-sm btn-danger">Hapus Data</button>
            <?php } ?>
        </div>
    </form>
</div>

<?php if ($templateJudul == "Laman Edit Barang") { ?>
    <script type="text/javascript">
        document.getElementById("hapus").onclick = function (e) {
            e.preventDefault();
            if (confirm('Anda yakin ingin menghapus data ini?')) {
                // Lakukan operasi penghapusan data di sini
                // Misalnya, dapat menggunakan AJAX untuk mengirim permintaan penghapusan ke server
                // Setelah itu, Anda dapat mengarahkan pengguna ke halaman lain atau melakukan pembaruan tampilan
                alert('Data berhasil dihapus');
            }
            location.href = "<?= site_url("operator/article") ?>";
        };
    </script>
<?php } ?>