<div class="col-12">
    <div class="card shadow">
        <div class="card-header">

        </div>
        <div class="card-body">
            <table class="table" id="dtable">
                <thead>
                    <th>No</th>
                    <th>Equipment</th>
                    <th>Parent</th>
                    <th>Deskripsi</th>
                    <th>Nilai WO</th>
                    <th>Nilai PDM</th>
                    <th>Nilai Total</th>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($equipment as $item): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $item->equipno ?></td>
                            <td><?= $item->parent ?></td>
                            <td><?= $item->diskripsi ?></td>
                            <td><?= $item->nilai_wo ?></td>
                            <td><?= $item->nilai_pdm ?></td>
                            <td><?= $item->nilai ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>