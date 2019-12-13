<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit Data Menu</h3>

	<?php foreach ($menu as $mnu): ?>
		<form method="post" action="<?php echo base_url().'admin/data_menu/update'; ?>">
			<div class="form-group">
				<div class="form-group">
        		<input type="hidden" name="id_menu" class="form-control" value="<?php echo $mnu->id_menu ?>">
        	</div>
			<div class="form-group">
				<div class="form-group">
        		<label>Nama Menu</label>
        		<input type="text" name="nama_menu" class="form-control" value="<?php echo $mnu->nama_menu ?>">
        	</div>
        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control" value="<?php echo $mnu->keterangan ?>">
        	</div>
        	<div class="form-group">
        		<label>Kategori</label>
        		<select name="kategori" class="form-control" value="<?php echo $mnu->kategori ?>">
        			<option value="food">Food</option>
        			<option value="drink">Drink</option>
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Harga</label>
        		<input type="number" name="harga" class="form-control" value="<?php echo $mnu->harga ?>">
        	</div>
        	<div class="form-group">
        		<label>Stok</label>
        		<input type="number" name="stok" class="form-control" value="<?php echo $mnu->stok ?>">
		</div>
			<button class="btn btn-sm btn-primary" type="submit">Save</button>
		</form>
	<?php endforeach ?>
</div>
<tr>
		