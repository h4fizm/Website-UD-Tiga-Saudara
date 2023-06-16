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
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr>
                <th class="text-center col-1">No.</th>
                <th class="text-center col-2">Nama Barang</th>
                <th class="text-center col-9">Gambar Barang</th>
             
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($record as $value) {
                $post_id = $value['post_id'];
                $post_thumbnail = $value['post_thumbnail']
            ?>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $value['post_title'] ?></td>
                    <td>
                    <img src="<?php echo base_url(LOKASI_UPLOAD . "/" . $post_thumbnail) ?>" 
                    class="pb-2 mb-2 img-thumbnail w-100" />
                    </td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>