 <table >
        <tr>
            <td width="500">
                <img src="images/pekanbaru.png" width="90" height="90">
            </td>
            
            <td >
                <center>
                    <font size="4">PEMERINTAH 1KOTA PEKANBARU</font><br>
                    <font size="4">DINAS PERDAGANGAN DAN PERINDUSTRIAN</font><br>
                    <font size="4">UPT METROLOGI LEGAL</font><br>
                    <font size="4">Jl. Jend. Ahmad Yani No. 128 Telp. (0761)8440334 Pekanbaru (28127)</font><br>
                </center>
            </td>
            <td width="100"></td>
            <td>
                <img src="images/metrologi.jpg" width="90" height="90">
            </td>
        </tr>
    </table>
    <table>
    <tr>
    	<td> UTTP </td>
    	<td> : </td>
    	<td> <?= $identitas['uttp']?></td>
    </tr>
    <tr>
    	<td> Pemilik </td>
    	<td> : </td>
    	<td> <?= $identitas->pemilik['nama']?></td>
    </tr>
    <tr>
    	<td> Merk Buatan </td>
    	<td> : </td>
    	<td> <?= $identitas['merk_buatan']?></td>
    </tr>    
     <tr>
    	<td> Model </td>
    	<td> : </td>
    	<td> <?= $identitas['model']?></td>
    </tr>
     <tr>
    	<td> Volume </td>
    	<td> : </td>
    	<td> <?= $identitas['volume_nominal']?></td>
    </tr>
     <tr>
    	<td> Jumlah Kompartemen </td>
    	<td> : </td>
    	<td> <?= $identitas['jml_kompartemen']?></td>
    </tr>
     <tr>
    	<td> Merk Kendaraan </td>
    	<td> : </td>
    	<td> <?= $identitas['merk_kendaraan']?></td>
    </tr>       
     <tr>
    	<td> No. Polis </td>
    	<td> : </td>
    	<td> <?= $identitas['no_polis']?></td>
    </tr>    
     <tr>
    	<td> No. Polis </td>
    	<td> : </td>
    	<td> <?= $identitas['no_polis']?></td>
    </tr>  
     <tr>
    	<td> Metode </td>
    	<td> : </td>
    	<td> <?= $identitas->metode['metode']?></td>
    </tr> 
    <tr>
    	<td> Tgl Pemeriksaan </td>
    	<td> : </td>
    	<td> <?= $identitas['tgl_pemeriksaan']?></td>
    </tr>  
    <tr>
    	<td> Penguji </td>
    	<td> : </td>
    	<td> <?= $identitas->penguji['nama']?></td>
    </tr>           
    </table>  