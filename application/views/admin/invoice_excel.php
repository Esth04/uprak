<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=invoice.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<div class="container-fluid">
	<h1>Invoice Pemesanan</h1>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Nomor Meja</th>
			<th>Tanggal Pesan</th>
		
		</tr>
		<?php foreach($invoice as $inv) :?>
		<tr>
			<td><?php echo $inv->id ?></td>
			<td><?php echo $inv->nama?></td>
			<td><?php echo $inv->no_meja ?></td>
			<td><?php echo $inv->tgl_pesan ?></td>
			
		</tr>
		<?php endforeach ?>
	</table>
</div>