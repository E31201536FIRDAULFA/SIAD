
<html lang="en">  

<head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Cetak Pdf</title>  

</head>  

<body>  
<h2 align="center">Data Pengajuan </h2>   

<table width="100%" cellspacing="1" border="1">
        
                

                  <tr>
                    <th>Tanggal</th>
                    <th>Jenis</th>
                    <th>No Surat</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Keperluan</th>
                    <th>Keterangan</th>
                    <th>Tanggal Berlaku</th>
                    <th>Status</th>
                    <th>Surat Kehilangan</th>
                  </tr>

                  <?php foreach ($dataKehilangan as $value) : ?>
                  <tr>
                    <td align="center"><?= $value['tgl']; ?></td> 
                    <td align="center"><?= $value['jenis_surat']; ?></td> 
                    <td align="center"><?= $value['nsurat']; ?></td> 
                    <td align="center"><?= $value['userid']; ?></td> 
                    <td align="center"><?= $value['nama']; ?></td>
                    <td align="center"><?= $value['jk']; ?></td> 
                    <td align="center"><?= $value['nik']; ?></td>                    
                    <td align="center"><?= $value['pekerjaan']; ?></td>                    
                    <td align="center"><?= $value['alamat']; ?></td> 
                    <td align="center"><?= $value['keperluan']; ?></td> 
                    <td align="center"><?= $value['ket']; ?></td> 
                    <td align="center"><?= $value['tgl_berlaku']; ?></td> 
                    <td align="center"><?= $value['status']; ?></td>                  
                    <td align="center"><?= $value['suratkehilangan']; ?></td>
                  </tr>

                <?php endforeach ?>
                 
                 
                </table>
            
</body>  

</html>

