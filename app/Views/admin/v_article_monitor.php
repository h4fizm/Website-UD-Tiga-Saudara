<div class="card-header">
    <i class="fas fa-chart-area me-1"></i>
        <?php echo $templateJudul ?>
</div>
<div class="card-body">
    <div class="row mb-3">
        <div class="col-lg-3 pt-1 pb-1">
            <form action="" method="GET">
                <input type="text" placeholder="Katakunci..." name="katakunci" class="form-control" value="<?php echo $katakunci ?>">
            </form>
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
    <form action="" method="POST" enctype="multipart/form-data">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="col-1">No.</th>
                <th class="col-3">Nama Barang</th>
                <th class="col-1">Stok</th>
                <th class="col-1">Status</th>
                <th class="col-3">Tanggal</th>
                <th class="col-3">Catatan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($record as $value) {
                $post_id = $value['post_id'];
            ?>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $value['post_title'] ?></td>
                    <td><?php echo $value['post_description'] ?></td>
                    <td><?php echo $value['post_status'] ?></td>
                    <td><?php echo tanggal_indonesia($value['post_time']) ?></td>
                    <td><?php echo $value['post_content'] ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
    <?php echo $pager->links('dt', 'datatable') ?>
</div>