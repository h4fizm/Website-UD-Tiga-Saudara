<div class="card-header">
    <i class="fas fa-chart-area me-1"></i>
        <?php echo $templateJudul ?>
</div>
<div class="card-body">
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr>
                <th class="text-center col-1">No.</th>
                <th class="text-center col-3">Nama Barang</th>
                <th class="text-center col-1">Stok</th>
                <th class="text-center col-1">Status</th>
                <th class="text-center col-3" data-search="false">Tanggal</th>
                <th class="text-center col-3">Catatan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($record as $value) {
                $post_id = $value['post_id'];
            ?>
                <tr>
                    <td class="text-center"><?php echo $nomor ?></td>
                    <td class="text-center"><?php echo $value['post_title'] ?></td>
                    <td class="text-center"><?php echo $value['post_description'] ?></td>
                    <td class="text-center"><?php echo $value['post_status'] ?></td>
                    <td class="text-center"><?php echo tanggal_indonesia($value['post_time']) ?></td>
                    <td class="text-center"><?php echo $value['post_content'] ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
