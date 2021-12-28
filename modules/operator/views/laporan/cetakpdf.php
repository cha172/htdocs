

<h4 class="text-center">Laporan Bulanan</h4>
<h4 class="text-center"> PERIODE <?php echo  strtoupper($model->konversibulan($model['bulan'])) . ' ' . $model['tahun'];?></h4>
<table class="table table-bordered">
	<tr>
		<th class="text-center"> No </th>
		<th class="text-center"> Tgl Surat</th>
		<th class="text-center"> Nama </th>
		<th class="text-center"> Merk/Buatan</th>
	</tr>
	<?php $x=1; foreach ($identitas as $dt){?>
	<tr>
		<td class="text-center"><?php echo $x++;?> </td>
		<td><?php echo $dt['tgl_pemeriksaan']?> </td>
		<td><?php echo $dt->pemilik['nama']?> </td>
		<td><?php echo $dt['merk_buatan']?></td>
	</tr>
	
	<?php }?>
</table>