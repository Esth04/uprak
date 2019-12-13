<?php 
/**
* 
*/
class Dashboard extends CI_Controller
{
	
	
	public function index()
	{
		# code...
		$data['menu'] = $this->model_menu->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data); 
		$this->load->view('template/footer');
	}
	public function tambah_ke_keranjang($id)
	{
		$barang = $this->model_menu->find($id);

		$data = array(
      	  'id'      => $barang->id_menu,
      	  'qty'     => 1,
      	  'price'   => $barang->harga,
      	  'name'    => $barang->nama_menu,
		);

		$this->cart->insert($data);
		redirect('dashboard');
	}

	public function detail_keranjang()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keranjang'); 
		$this->load->view('template/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('dashboard/index');
	}

	public function pembayaran(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pembayaran'); 
		$this->load->view('template/footer');
	}

	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if ($is_processed) {
			# code...
			$this->cart->destroy();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('proses_pesanan'); 
			$this->load->view('template/footer');

		}else{
			echo "Maaf, Pesanan Anda Gagal Di Proses !";
		}
	

	}
}
 ?>