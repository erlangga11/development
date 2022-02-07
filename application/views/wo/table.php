<div class="col-12">
  <div class="card shadow">
    <div class="card-body">
      <table class="table" id="dtable">
        <thead>
          <!-- <th>No</th> -->
          <th>Asset Num</th>
          <th>WO Num</th>
          <th>Desc</th>
          <th>WTNUM</th>
          <th>Task Desc</th>
          <th>Priority</th>
          <th>Status</th>
          <th>Report Date</th>
          <th>worktype</th>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($wo as $item) : ?>
            <tr>
              <!-- <td><?= $no++ ?></td> -->
              <td><?= $item->assetnum ?></td>
              <td><?= $item->wonum ?></td>
              <td><?= $item->wodesc  ?></td>
              <td><?= $item->wtnum ?></td>
              <td><?= $item->taskdesc  ?></td>
              <td><?= $item->priority  ?></td>
              <td><?= $item->wtstatus  ?></td>
              <td><?= $item->reportdate ?></td>
              <td><?= $item->worktype  ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>