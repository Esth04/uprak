<div class="container-fluid">
	<div class="row text-center">
		<?php foreach ($menu as $mnu) : ?>
			<div class="card ml-3" style="width: 16rem;">
  			<img src="<?php echo base_url().'/upload/'.$mnu->gambar ?>" class="card-img-top" alt="...">
 			 <div class="card-body">
 			  <h5 class="card-title mb-1"><b><?php echo $mnu->nama_menu ?></b></h5>
  			  <small><?php echo $mnu->keterangan ?> </small> <br>
  			  <span class="badge badge-pill badge-success mb-2">Rp. <?php echo number_format($mnu->harga) ?></span>
          <span class="badge badge-pill badge-primary mb-2"><?php echo $mnu->kategori ?></span>
  			  <br>
  			  <?php echo anchor('dashboard/tambah_ke_keranjang/'.$mnu->id_menu,'<div class="btn btn-sm btn-primary">Add to Cart</div>'); ?>
  			</div>
			</div>
		<?php endforeach ?>
	</div>
</div>