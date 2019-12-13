<div class="container-fluid">
	<h1>Detail Pesanan <div class="btn btn-sm btn-success">Nomor Meja : <?php echo $invoice->no_meja; ?></div></h1>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Nama Menu</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>Sub Total</th>
		</tr>

		<?php 
		$total = 0;
		$no=1;
		foreach($pesanan as $psn):
			$subtotal = $psn->jumlah*$psn->harga;
			$total += $subtotal;
		 ?>

		  <tr>
		  	<td><?php echo $no++ ?></td>
		  	<td><?php echo $psn->nama_menu; ?></td>
		  	<td><?php echo $psn->jumlah; ?></td>
		  	<td><?php echo $psn->harga; ?></td>
		  	<td><?php echo number_format($subtotal); ?></td>
		  </tr>
		<?php endforeach ?>

		<tr>
			<td colspan="4" align="center"><b>TOTAL</b></td>
			<td>Rp. <?php echo number_format($total); ?></td>
		</tr>
	</table>
	<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/invoice/index') ?>">Back</a>

</div>