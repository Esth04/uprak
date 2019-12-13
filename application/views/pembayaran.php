<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if($keranjang = $this->cart->contents())
				{
					foreach($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

					echo "Total Belanja Anda: Rp.".number_format($grand_total);
				
				?>
			</div>
			<br>
		<br>
		<h2>Nama Pemesan Dan Nomor Meja</h2>
		<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
		<div class="form-group">
			<input type="text" name="nama" placeholder="Nama Pemesan" class="form-control">
		</div>
		<div class="form-group">
			<input type="number" name="no_meja" placeholder="Nomor Meja" class="form-control">
		</div>
		
		<button type="submit" class="btn btn-sm btn-primary">Pesan</button>
		</form>
		<?php  
	}else{
		echo "Keranjang Pesanan Anda Masih Kosong";
	}
		?>
		</div>	
		
		<div class="col-md-2"></div>			
	</div>
</div>