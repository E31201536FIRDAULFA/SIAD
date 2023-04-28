
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
        
                <?php foreach ($dataSKTM as $value) : ?>

                  <tr>
                    <th>Tanggal</th>
                    <th>No Surat</th>
                    <th>NIK</th>
                    <th>Nama</th>                    
                    <th>Jenis Kelamin</th>
                    <th>TTL</th>
                    <th>Status Warga</th>
                    <th>Nama Ayah</th>
                    <th>TTL Ayah</th>
                    <th>Agama</th>
                    <th>Pekerjaan</th>
                    <th>Alamat Ayah</th>
                    <th>Gaji</th>
                    <th>Keperluan</th>
                    <th>Status</th>
                    
                  </tr>

                  <tr>
                    <td align="center"><?= $value['tgl']; ?></td>  
                    <td align="center"><?= $value['nsurat']; ?></td>                                      
                    <td align="center"><?= $value['nik']; ?></td>     
                    <td align="center"><?= $value['nama']; ?></td>                                   
                    <td align="center"><?= $value['jk']; ?></td>     
                    <td align="center"><?= $value['ttl']; ?></td> 
                    <td align="center"><?= $value['stswarga']; ?></td>                                                      
                    <td align="center"><?= $value['nama_ayah']; ?></td>
                    <td align="center"><?= $value['ttlayah']; ?></td>
                    <td align="center"><?= $value['agama']; ?></td>
                    <td align="center"><?= $value['pekerjaan']; ?></td>
                    <td align="center"><?= $value['alamatayah']; ?></td>
                    <td align="center"><?= $value['gaji']; ?></td> 
                    <td align="center"><?= $value['keperluan']; ?></td>                                                                                                                                           
                    <td align="center"><?= $value['status']; ?></td>                  
               
                  </tr>

                <?php endforeach ?>
                 
                 
                </table>
            
</body>  

</html>

