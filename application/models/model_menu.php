<?php 
/**
* 
*/
class model_menu extends CI_Model{
	
	public function tampil_data()
	{
		# code...
		return $this->db->get('tb_menu');
	}
	public function tambah_menu($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function edit_menu($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function find($id)
	{
		$result = 	$this->db->where('id_menu',$id)
							 ->limit(1)
							 ->get('tb_menu');

		if ($result->num_rows() > 0) {
			# code...
			return $result->row();
		}else{
			return array();
		}
	}
}
 ?>