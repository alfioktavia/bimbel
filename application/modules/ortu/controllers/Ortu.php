<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ortu extends CI_Controller {

	/**
	 * code by rifqie rusyadi
	 * email rifqie.rusyadi@gmail.com
	 */
	
	public $folder = 'ortu/';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ortu_m', 'data');
		//signin();
		//group(array('1'));
	}
	
	//halaman index
	public function index()
	{
		$data['head'] 		= 'Data Orang Tua Siswa';
		
		$data['content'] 	= $this->folder.'default';
		$data['style'] 		= $this->folder.'style';
		$data['js'] 		= $this->folder.'js';
		
		$this->load->view('template', $data);
	}
	
	public function created()
	{
		$data['head'] 		= 'Tambah Data Ortu';
		$data['record'] 	= $this->data->get_new();
		$data['content'] 	= $this->folder.'form';
		$data['style'] 		= $this->folder.'style';
		$data['js'] 		= $this->folder.'js';
		$data['jk'] 	= $this->data->get_group_jk();
		$data['agama'] 	= $this->data->get_group_agama();
		
		$this->load->view('template', $data);
	}
	
	public function updated($id)
	{
		$data['head'] 		= 'Ubah Data Ortu';
		$data['record'] 	= $this->data->get_id($id);
		$data['content'] 	= $this->folder.'form_edit';
		$data['style'] 		= $this->folder.'style';
		$data['js'] 		= $this->folder.'js';
		$data['jk'] 	= $this->data->get_group_jk();
		$data['agama'] 	= $this->data->get_group_agama();

		$this->load->view('template', $data);
	}
	
	public function ajax_list()
    {
        $record	= $this->data->get_datatables();
        $data 	= array();
        $no 	= $_POST['start'];
		
        foreach ($record as $row) {
            $no++;
            $col = array();
			$col[] = $row->nama;
			$col[] = $row->alamat;
			$col[] = $row->tempat;
			$col[] = $row->tgl_lhr;
			$col[] = $row->jk;
			$col[] = $row->agama;
			
            //add html for action
            $col[] = '<a class="btn btn-xs btn-flat btn-warning" onclick="edit_data();" href="'.site_url('ortu/ortu/updated/'.$row->id_ortu).'" data-toggle="tooltip" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                  <a class="btn btn-xs btn-flat btn-danger" data-toggle="tooltip" title="Hapus" href="'.site_url('ortu/ortu/ajax_delete/'.$row->id_ortu).'""><i class="glyphicon glyphicon-trash"></i></a>';
 
            $data[] = $col;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->data->count_all(),
                        "recordsFiltered" => $this->data->count_filtered(),
                        "data" => $data,
                );
        
		echo json_encode($output);
    }
	
	public function ajax_save()
    {
        $data = array(
				'id_ortu' => $this->input->post('id_ortu'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'tempat' => $this->input->post('tempat'),
				'tgl_lhr' => $this->input->post('tgl_lhr'),
				'jk' => $this->input->post('jk'),
				'agama' => $this->input->post('agama'),
				'no_telp' => $this->input->post('no_telp'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'foto' => $this->input->post('foto'),
				'created_at' => date ('Y-m-d H:m:s'),
        );
        
            $insert = $this->data->save($data);
			//helper_log("add", "Menambah Daftar Pengguna");
        
        redirect ('ortu/ortu');
    }
    
    public function ajax_update($id)
    {
         $data = array(
				'id_ortu' => $this->input->post('id_ortu'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'tempat' => $this->input->post('tempat'),
				'tgl_lhr' => $this->input->post('tgl_lhr'),
				'jk' => $this->input->post('jk'),
				'agama' => $this->input->post('agama'),
				'no_telp' => $this->input->post('no_telp'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'foto' => $this->input->post('foto'),
				'updated_at' => date ('Y-m-d H:m:s'),

        );
		
        
            $this->data->edit($data, $id);
			//helper_log("edit", "Merubah Daftar Pengguna");
                redirect ('ortu/ortu');

    }
    
    public function ajax_delete($id)
    {
    	$data = array (
    		'deleted_at' => date ('Y-m-d H:m:s')
    	);
        $this->data->hapus($data,$id);
		redirect ('ortu/ortu');
    }
    
   
	
	private function validation($id=null)
    {
        $data = array('success' => false, 'messages' => array());
        
		
		
		
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        
        if($this->form_validation->run()){
            $data['success'] = true;
        }else{
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }
        }
        echo json_encode($data);
        return $this->form_validation->run();
    }
}
