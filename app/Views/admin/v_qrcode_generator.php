<script src="<?= base_url('qrcodejs/qrcode.js'); ?>"></script>

<div class="card-header">
    <i class="fas fa-chart-area me-1"></i>
    QR-Code Generator
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
    <label for="qrcode" class="form-label">Gambar QR</label>
    <div id="qrcode" class="mb-3"></div>
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
    <button id="download" class="btn btn-success mt-3">Download Gambar QR</button>
</div>

<script>
    var qrcode = new QRCode("qrcode");
    setInterval(generateQrCode, 3000)

    function generateQrCode() {
        var jsonData = {
            kode: document.getElementById('kode').value,
            nama: document.getElementById('nama').value,
            status: document.getElementById('status').value,
            stok: document.getElementById('stok').value,
            notes: document.getElementById('notes').value
        };

        var jsonString = JSON.stringify(jsonData);
        qrcode.makeCode(jsonString);
    }

    var downloadBtn = document.getElementById('download');

    downloadBtn.addEventListener('click', function () {
        downloadImage('qrcode');
    });

    function downloadImage(id) {
        // Get the image element with the specified id
        var imgElement = document.getElementById(id).getElementsByTagName("img")[0];

        // Get the URL of the image from the src attribute
        var imgUrl = imgElement.src;

        // Create a new anchor element with download attribute
        var downloadLink = document.createElement('a');
        downloadLink.setAttribute('download', document.getElementById('nama').value);

        // Set the href attribute to the image URL
        downloadLink.href = imgUrl;

        // Append the anchor element to the document
        document.body.appendChild(downloadLink);

        // Trigger a click event on the anchor element to download the image
        downloadLink.click();

        // Remove the anchor element from the document
        document.body.removeChild(downloadLink);
    }
</script>