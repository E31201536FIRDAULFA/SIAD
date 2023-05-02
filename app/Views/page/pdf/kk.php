
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
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Scan KK</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                  </tr>


                <?php foreach ($datakk as $value) : ?>
                  <tr>
                    <td align="center"><?= $value['tgl']; ?></td>                    
                    <td align="center"><?= $value['nama']; ?></td>
                    <td align="center"><?= $value['nik']; ?></td>                    
                    <td align="center"><?= $value['scanktp']; ?></td>                    
                    <td align="center"><?= $value['status']; ?></td>                  
                    <td align="center"><?= $value['keterangan']; ?></td>
                  </tr>
                <?php endforeach ?>
                 
                 
                </table>
            
</body>  

</html>

