 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
    
 <table >
        <tr>
            <td width="100" height="150">
                <img src="images/pekanbaru.png" width="120" height="120">
            </td>
            
            <td width="550">
                <center>
                    <font size="8" face="times new roman"><b>PEMERINTAH KOTA PEKANBARU</b></font><br>
                    <font size="8" face="times new roman"><b>DINAS PERDAGANGAN DAN PERINDUSTRIAN</b></font><br>
                    <font size="7" face="times new roman"><b>UPT METROLOGI LEGAL</b></font><br>
                    <font size="4" face="times new roman"><b>Jl. Jend. Ahmad Yani No. 128 Telp. (0781)8440334 Pekanbaru (28127)</b></font><br>
                </center>
            </td>
            
            <td width="100">
                <img src="images/metrologi.jpg" width="100" height="100">
            </td>
        </tr>
    </table>

    <table>
        
        <tr style="margin-bottom: 30px;"><td width="250"></td><td width="350">
            <p style="font-family: times new roman; font-size: 18px; "><b>Surat Keterangan Hasil Pengujian</b></p>
        </td><td width="200"></td></tr>
        <tr style="margin-bottom: 30px;"><td></td><td>
            <P style="font-family: times new roman; font-size: 18px; ">700/DPP/UPT.1.3/218/X/2020</P>
        </td><td width="150"></td></tr>
       
    </table>

    <table border="1" >
    <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">UTTP</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Tangki Ukur Mobil Untuk</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"><?= $identitas['uttp']?></p></td>
        <td></td>
    </tr>
    <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Pemilik</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"><?= $identitas->pemilik['nama']?></p></td>
    </tr>
    <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Merk / Buatan</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"><?= $identitas['merk_buatan']?></p></td>
    </tr>    
     <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Model / Nomor Seri</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <?= $identitas['model']?></p></td>
    </tr>
     <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Volume Nominal</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <?= $identitas['volume_nominal']?></p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">Liter</p></td>
        <td></td>
        
    </tr>
    <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Merek Kendaraan</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <?= $identitas['merk_kendaraan']?></p></td>
    </tr>
     <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">No.Pol / Chasis</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <?= $identitas['no_polis']?></p></td>
    </tr>
    <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Metode</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <?= $identitas->metode['metode']?></p></td>
    </tr>

    <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Suhu Dasar</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> 28 C<p></td>
    </tr>
    <tr rowspan="2">
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Di Tera oleh</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <?= $identitas->pemeriksa['nama']?></p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <?= $identitas->pemeriksa['nip_pemeriksa']?></p></td>
        <td></td>

    </tr>
    <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'"></p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"></p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <?= $identitas->penguji['nama']?></p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <?= $identitas->penguji['nip_penguji']?></p></td>
        <td></td>
    </tr>
    <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Tanggal</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <?= date_format(date_create($identitas["tgl_pemeriksaan"]),"d-m-Y"); ?></p></td>
    </tr>
    <tr>
        <td> <p style="font-size: 12pt; font-family:'times new roman'">Hasil</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'">:</p></td>
        <td colspan="2"><p style="font-size: 12pt; font-family:'times new roman'"> Memenuhi syarat tehnis kemtrologian untuk</p></td>
        <td><p style="font-size: 12pt; font-family:'times new roman'"> <b>TERA Tahun 2020</b></p></td>
    </tr> 
    </table>  

    <table style="border: 1.0mm solid black">
        <tr><td>
            <center>
            <p style="font-size: 12pt; font-family:'times new roman'"><b>CAP TERA PADA INDEKS ISI NOMINAL</b></p>
            <p style="font-size: 12pt; font-family:'times new roman'"><b>DAN TUTUP DOM : SP8 (20)</b></p>
        </center>
        </td></tr>
    </table>
    <table >
        <tr>
            <th rowspan="13">
                <img src="images/tanki1.PNG" width="330" height="200" >
            </th>
        </tr>
            <tr>
                <td>.</td>
                <td colspan="10"><center>KOMPARTEMEN</center></td>
            </tr>
            <tr>
            <td>
                <td colspan="4"><center>I</center></td>
                <td colspan="3"><center>II</center></td>
                <td colspan="3"><center>III</center></td>
            </td></tr>

            <tr>
                
                 <td width="35"><p style="font-family: 'times new roman'; font-size: 8pt;">t1</p></td>
                
                    <?php $x=1;foreach ($kompartemen as $kom){ ?>
                <td width="35">
                    <p style="font-family: 'times new roman'; font-size: 8pt;">=</p>      
                </td>
                <td width="35">
                <p style="font-family: 'times new roman'; font-size: 8pt;"><?= $kom['t1']?></p>
                </td>
                <td width="35">
                    <p style="font-family: 'times new roman'; font-size: 8pt;">mm</p>
                </td>
            </tr>
                <?php } ?>

            <tr>
               
                 <td><p style="font-family: 'times new roman'; font-size: 8pt;">t2</p></td>
                
                    <?php $x=1;foreach ($kompartemen as $kom){ ?>
                <td>
                    <p style="font-family: 'times new roman'; font-size:8pt;">=</p>        
                </td>
                <td>
                <p style="font-family: 'times new roman'; font-size: 8pt;"><?= $kom['t2']?></p>
                </td>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">mm</p>
                </td>
            </tr>
                <?php } ?>
            <tr>
                
                 <td><p style="font-family: 'times new roman'; font-size: 8pt;">t3</p></td>
                
                    <?php $x=1;foreach ($kompartemen as $kom){ ?>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">=</p>        
                </td>
                <td>
                <p style="font-family: 'times new roman'; font-size: 8pt;"><?= $kom['t3']?></p>
                </td>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">mm</p>
                </td>
            </tr>
                <?php } ?>

            <tr>
                
                 <td><p style="font-family: 'times new roman'; font-size: 8pt;">t4</p></td>
                
                    <?php $x=1;foreach ($kompartemen as $kom){ ?>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">=</p>        
                </td>
                <td>
                <p style="font-family: 'times new roman'; font-size: 8pt;"><?= $kom['t4']?></p>
                </td>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">mm</p>
                </td>
            </tr>
                <?php } ?>

            <tr>
                
                 <td><p style="font-family: 'times new roman'; font-size: 8pt;">T</p></td>
                
                    <?php $x=1;foreach ($kompartemen as $kom){ ?>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">=</p>        
                </td>
                <td>
                <p style="font-family: 'times new roman'; font-size: 8pt;"><?= $kom['T']?></p>
                </td>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">mm</p>
                </td>
            </tr>
                <?php } ?>

            <tr>
                
                 <td><p style="font-family: 'times new roman'; font-size: 8pt;">d</p></td>
                
                    <?php $x=1;foreach ($kompartemen as $kom){ ?>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">=</p>        
                </td>
                <td>
                <p style="font-family: 'times new roman'; font-size: 8pt;"><?= $kom['D']?></p>
                </td>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">mm</p>
                </td>
            </tr>
                <?php } ?>

            <tr>
               
                 <td><p style="font-family: 'times new roman'; font-size: 8pt;">p</p></td>
                
                    <?php $x=1;foreach ($kompartemen as $kom){ ?>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">=</p>        
                </td>
                <td>
                <p style="font-family: 'times new roman'; font-size: 8pt;"><?= $kom['P']?></p>
                </td>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">mm</p>
                </td>
            </tr>
                <?php } ?>

            <tr>
                
                 <td><p style="font-family: 'times new roman'; font-size: 8pt;">q</p></td>
                
                    <?php $x=1;foreach ($kompartemen as $kom){ ?>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">=</p>        
                </td>
                <td>
                <p style="font-family: 'times new roman'; font-size: 8pt;"><?= $kom['Q']?></p>
                </td>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">mm</p>
                </td>
            </tr>
                <?php } ?>

            <tr>
                
                 <td><p style="font-family: 'times new roman'; font-size: 8pt;">s</p></td>
                
                    <?php $x=1;foreach ($kompartemen as $kom){ ?>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">=</p>        
                </td>
                <td>
                <p style="font-family: 'times new roman'; font-size: 8pt;"><?= $kom['S']?></p>
                </td>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">mm</p>
                </td>
            </tr>
                <?php } ?>

            <tr>
                
                 <td><p style="font-family: 'times new roman'; font-size: 8pt;">R</p></td>
                
                    <?php $x=1;foreach ($kompartemen as $kom){ ?>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">=</p>        
                </td>
                <td>
                <p style="font-family: 'times new roman'; font-size: 8pt;"><?= $kom['R']?></p>
                </td>
                <td>
                    <p style="font-family: 'times new roman'; font-size: 8pt;">mm</p>
                </td>
            </tr>
                <?php } ?>
            
    </table>
        <table border="1">
        <tr>
            <td width="250" rowspan="2"><center>
            <img src="images/tanki2.PNG" width="150" height="130">
            </center>
            </td>
                <td height="30">
            <center><p style="font-family: 'times new roman'; font-size: 9pt;">DISAHKAN BERDASARKAN UNDANG-UNDANG RI NOMOR 2 TAHUN 1981 TENTANG</p>
                <p style="font-family: 'times new roman'; font-size: 9pt;">METROLOGI LEGAL DENGAN MEMBUBUHKAN TANDA TERA SAH DAN JAMINAN.</p></center>
        </td>
       </tr>
    <tr>
        <td style="vertical-align: bottom;">
            <center>
        <p style="font-family: 'times new roman'; font-size: 10pt;">Pekanbaru, <?= date_format(date_create($identitas["tgl_pemeriksaan"]),"d-m-Y");  ?>
            </p></center>
        </td>
    </tr>
        </table>
        <table border="1">
        <tr>
            <td colspan="4">
                <p style="font-family: 'times new roman'; font-size: 8pt;">Catatan :</p>
           </td>
           <td><p style="font-family: 'times new roman'; font-size: 10pt;"><b>KEPALA UPT METROLOGI LEGAL</b></p></td>
        </tr>
        <tr>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">1.</p></td>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">Ditera ulang kembali</p></td>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">14 Oktober 2022</p></td>
            <td></td>
            <td><p style="font-family: 'times new roman'; font-size: 10pt;"><b>KOTA PEKANBARU</b></p></td>
        </tr>
        <tr>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">2.</p></td>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">Tangki Ukur Mobil Terdiri dari</p></td>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">3(tiga)</p></td>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">Kompartemen</p></td>
        </tr>
        <tr>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">3.</p></td>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">Kepekaan di sekitar indeks petunjuk</p></td>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">=R</p></td>
        </tr>
        <tr>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;">4.</p></td>
            <td colspan="2"><p style="font-family: 'times new roman'; font-size: 8pt;">Salinan/ foto copy Surat Keterangan Pengujian ini</p></td>
            <td></td>
            <td><p style="font-family: 'times new roman'; font-size: 10pt;"><b> <?= $identitas->kepala['nama'] ?></b></p></td>
        </tr>
        <tr>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;"></p></td>
            <td colspan="2"><p style="font-family: 'times new roman'; font-size: 8pt;">tidak berlaku tanpa pengesahan dari Kepala UPT</p></td>
            <td></td>
            <td><p style="font-family: 'times new roman'; font-size: 10pt;" ><b>Penata Muda Tk.I(III/b)</b></p></td>
        </tr>
        <tr>
            <td><p style="font-family: 'times new roman'; font-size: 8pt;"></p></td>
            <td colspan="2"><p style="font-family: 'times new roman'; font-size: 8pt;">Metrologi Pekanbaru.</p></td>
            <td><p style="font-family: 'times new roman'; font-size: 10pt;"><b> </b></p></td>
        </tr>
    </table>
 </body>
 </html>
 