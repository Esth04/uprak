

<div class="containter-fluid p-5">
	<h4>My Cart</h4>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama Menu</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub Total</th>
		</tr>

		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items ) : ?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $items['name'] ?></td>
			<td><?php echo $items['qty'] ?></td>
			<td>Rp. <?php echo number_format($items['price']) ?></td>
			<td>Rp. <?php echo number_format($items['subtotal']) ?></td>
		</tr>
		<?php endforeach ?>
		<tr>
			<td colspan="4" align="center"><b>TOTAL</b></td>
			<td>Rp. <?php echo number_format($this->cart->total()) ?></td>
		</tr>
	</table>
	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
		<a href="<?php echo base_url('dashboard/index') ?>"><div class="btn btn-sm btn-success">Lanjut Belanja</div></a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm btn-primary">Bayar</div></a>
	</div>
</div>
)