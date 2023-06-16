<script src="<?= base_url('qrcodejs/html5-qrcode.min.js'); ?>"></script>

<div class="card-header">
    <i class="fas fa-chart-area me-1"></i>
    Edit Barang dengan QR Code Scanner
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
    <label for="reader" class="form-label">Scanner QR</label>
    <div id="reader" class="mb-3" style="width: 50%"></div>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Kode Barang -->
        <div class="mb-3">
            <label for="input_post_title" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" id="kode" name="post_kode"
                value="<?php echo (isset($post_kode)) ? $post_kode : "" ?>">
        </div>
        <!-- Nama Barang -->
        <div class="mb-3">
            <label for="input_post_title" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="post_title"
                value="<?php echo (isset($post_title)) ? $post_title : "" ?>">
        </div>
        <!-- Status ditambahkan atau dikurangkan -->
        <div class="mb-3">
            <label for="input_post_status" class="form-label">Status</label>
            <select name="post_status" id="status" class="form-select">
                <option value="ditambahkan" <?php echo (isset($post_status) && $post_status == 'ditambahkan') ? "selected" : "" ?>>(+) ditambahkan</option>
                <option value="dikurangkan" <?php echo (isset($post_status) && $post_status == 'dikurangkan') ? "selected" : "" ?>>(-) dikurangkan</option>
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
            <textarea class="form-control" id="stok" name="post_description"
                rows="1"><?php echo (isset($post_description)) ? $post_description : '' ?></textarea>
        </div>
        <!-- keterangan/notes -->
        <div class="mb-3">
            <label for="input_post_content" class="form-label">Keterangan</label>
            <textarea class="form-control" id="notes" name="post_content"
                rows="10"><?php echo (isset($post_content)) ? $post_content : '' ?></textarea>
        </div>
        <div>
            <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">
        </div>
    </form>
</div>

<script>
    function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        var qrData = JSON.parse(decodedText);

        // kode barang
        if (qrData.hasOwnProperty('kode')) {
            document.getElementById('kode').value = qrData.kode;
        }
        // nama barang
        if (qrData.hasOwnProperty('nama')) {
            document.getElementById('nama').value = qrData.nama;
        }
        // status
        if (qrData.hasOwnProperty('status')) {
            document.getElementById('status').value = qrData.status;
        }
        // stok
        if (qrData.hasOwnProperty('stok')) {
            document.getElementById('stok').value = qrData.stok;
        }
        // deskripsi
        if (qrData.hasOwnProperty('notes')) {
            document.getElementById('notes').value = qrData.notes;
        }
    }

    // function onScanFailure(error) {
    //     // handle scan failure, usually better to ignore and keep scanning.
    //     // for example:
    //     console.warn(`Code scan error = ${error}`);
    // }

    // html5QrcodeScanner.render(onScanSuccess, onScanFailure);

    const html5QrCode = new Html5Qrcode("reader");
    const config = { fps: 10 };

    // If you want to prefer back camera
    html5QrCode.start({ facingMode: "environment" }, config, onScanSuccess);
</script>