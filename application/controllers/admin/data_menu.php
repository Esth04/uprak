<?php 
/**
* 
*/
class Data_menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role_id')!='1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert"> Anda Belum Login!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
		# code...
		$data['menu'] = $this->model_menu->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_menu',$data); 
		$this->load->view('template_admin/footer');
	}
	public function tambah_menu()
	{
		$nama_menu 	= $this->input->post('nama_menu');
		$keterangan = $this->input->post('keterangan');
		$kategori	= $this->input->post('kategori');
		$harga 		= $this->input->post('harga');
		$stok 		= $this->input->post('stok');
		$gambar 	= $_FILES['gambar']['name'];

		if($gambar	=''){}else{
			$config ['upload_path'] = './upload';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('gambar')) {
				# code...
				echo "gambar gagal di upload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_menu' => $nama_menu,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar,

		);

		$this->model_menu->tambah_menu($data,'tb_menu');
		redirect('admin/data_menu/index');
	}

	public function edit($id)
	{
		$where = array ('id_menu' =>$id);
		$data['menu'] = $this->model_menu->edit_menu($where,'tb_menu')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/edit_menu',$data); 
		$this->load->view('template_admin/footer');

	}
	public function update()
	{
		$id_menu 	= $this->input->post('id_menu');
		$nama_menu 	= $this->input->post('nama_menu');
		$keterangan = $this->input->post('keterangan');
		$kategori	= $this->input->post('kategori');
		$harga 		= $this->input->post('harga');
		$stok 		= $this->input->post('stok');

		$data = array(
			'nama_menu' => $nama_menu,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar,

		);

		$where = array(
			'id_menu' => $id_menu
			);
		$this->model_menu->update_data($where,$data,'tb_menu');
		redirect('admin/data_menu/index');
	}

	public function hapus($id)
	{
		$where = array('id_menu'=>$id);
		$this->model_menu->hapus_data($where, 'tb_menu');
		redirect('admin/data_menu/index');
	}
}
 ?>