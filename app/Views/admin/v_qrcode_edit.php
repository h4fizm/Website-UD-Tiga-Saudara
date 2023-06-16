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
    <h5>Kode Barang: <a id="kode"></a></h5>
</div>

<script>
    function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        var qrData = JSON.parse(decodedText);

        if (qrData.hasOwnProperty('kode')) {
            document.getElementById('kode').innerHTML = qrData.kode;
            location.href = "<?= site_url("admin/article/qrcode_edit/") ?>" + qrData.kode
        }
    }

    const html5QrCode = new Html5Qrcode("reader");
    const config = { fps: 10 };

    // If you want to prefer back camera
    html5QrCode.start({ facingMode: "environment" }, config, onScanSuccess);
</script>

