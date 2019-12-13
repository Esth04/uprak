<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_menu"><i class="fas fa-plus fa-sm"></i> Add Menu</button>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>Nama Menu</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="2">Action</th>
		</tr>

		<?php
		$no=1; 
		foreach($menu as $mnu) :?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $mnu->nama_menu ?></td>
				<td><?php echo $mnu->keterangan ?></td>
				<td><?php echo $mnu->kategori ?></td>
				<td><?php echo $mnu->harga ?></td>
				<td><?php echo $mnu->stok ?></td>
				<td><?php echo anchor('admin/data_menu/edit/'.$mnu->id_menu,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
				<td><?php echo anchor('admin/data_menu/hapus/'.$mnu->id_menu,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>');?></td>
			</tr>

		<?php endforeach ?>
	</table>
</div>

<div class="modal fade" id="tambah_menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_menu/tambah_menu'; ?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Nama Menu</label>
        		<input type="text" name="nama_menu" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Kategori</label>
        		<select name="kategori" class="form-control">
        			<option value="food">Food</option>
        			<option value="drink">Drink</option>
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Harga</label>
        		<input type="number" name="harga" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Stok</label>
        		<input type="number" name="stok" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Gambar Produk</label>
        		<input type="file" name="gambar" class="form-control">
        	</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      	</form>
    </div>
  </div>
</div>