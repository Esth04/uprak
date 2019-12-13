
<div class="container-fluid">
	<h1>Invoice Pemesanan</h1>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Nomor Meja</th>
			<th>Tanggal Pesan</th>
			<th>Action</th>
		</tr>
		<?php foreach($invoice as $inv) :?>
		<tr>
			<td><?php echo $inv->id ?></td>
			<td><?php echo $inv->nama?></td>
			<td><?php echo $inv->no_meja ?></td>
			<td><?php echo $inv->tgl_pesan ?></td>
			<td><?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary" >Detail</div>') ?></td>
		</tr>
		<?php endforeach ?>
	</table>
	<form method="post" action="<?php echo base_url('excel/export_excel')?>">

     <input type="submit" name="export" class="btn btn-success" value="Export" />

    </form>
</div>