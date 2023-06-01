<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Pdf</title>

</head>

<body>
    <h2 align="center">Data Pengajuan</h2>

    <table width="100%" cellspacing="1" border="1">
        <tr>
            <th>Tanggal</th>
            <th>Penyelenggara</th>
            <th>Jenis</th>
            <th>Anggaran</th>
            <th>Sumber Dana</th>
            <th>Tgl Pembahasan</th>
        </tr>

        <?php
        $totalAnggaran = 0; // Initialize the total variable
        foreach ($dataAPBD as $value) :
            $totalAnggaran += $value['anggaran']; // Add the anggaran value to the total
        ?>
            <tr>
                <td align="center"><?= $value['tgl']; ?></td>
                <td align="center"><?= $value['penyelenggara']; ?></td>
                <td align="center"><?= $value['jenis']; ?></td>
                <td align="center"><?= number_to_currency($value['anggaran'], 'IDR'); ?></td>
                <td align="center"><?= $value['sumberdana']; ?></td>
                <td align="center"><?= $value['tgl_pembahasan']; ?></td>
            </tr>
        <?php endforeach ?>

        <!-- Footer row with total -->
        <tr>
            <td colspan="3" align="right"><strong>Total:</strong></td>
            <td align="center"><strong><?= number_to_currency($totalAnggaran, 'IDR');?></strong></td>
            <td colspan="2"></td>
        </tr>
    </table>

</body>

</html>