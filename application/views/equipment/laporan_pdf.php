<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div style="text-align:center">
        <h3> Laporan PDF Toko Kita</h3>
    </div>
    <table id="table" class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Equipno</th>
                <th>Deskripsi</th>
                <th>Nilai_WO</th>
                <th>Nilai_PDM</th>
                <th>Nilai_Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //  $count =1;
            foreach ($equipment as $eq) { ?>
                <tr>
                    <td><?php echo ++$start ?></td>
                    <td><a href=""><?php echo $eq->equipno ?></a></td>
                    <td><?php echo $eq->diskripsi ?></td>
                    <td><?php echo $eq->nilai_wo ?></td>
                    <td><?php echo $eq->nilai_pdm ?></td>
                    <td><?php echo $eq->nilai ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body></html>