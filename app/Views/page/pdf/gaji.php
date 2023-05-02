
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
                    <th>No Surat</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>TTL</th>
                    <th>Pekerjaan</th>
                    <th>No KIP</th>
                    <th>No KIS</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                  </tr>

                  <?php foreach ($datagaji as $value) : ?>
                  <tr>
                    <td align="center"><?= $value['tgl']; ?></td>
                    <td align="center"><?= $value['nsurat']; ?></td>                       
                    <td align="center"><?= $value['nama']; ?></td>
                    <td align="center"><?= $value['nik']; ?></td>                    
                    <td align="center"><?= $value['ttl']; ?></td> 
                    <td align="center"><?= $value['pekerjaan']; ?></td>                      
                    <td align="center"><?= $value['no_kip']; ?></td>
                    <td align="center"><?= $value['no_kis']; ?></td> 
                    <td align="center"><?= $value['ket']; ?></td>        
                    <td align="center"><?= $value['status']; ?></td>                  
                  </tr>

                <?php endforeach ?>
                 
                 
                </table>
            
</body>  

</html>

