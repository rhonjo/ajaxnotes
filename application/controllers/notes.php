<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model("Update");
	}
	public function index_json()
    {
    	$data["note"] = $this->Update->get_all_notes();
    	echo json_encode($data);
    }
    public function index_html()
    {
    	$data["note"] = $this->Update->get_all_notes();
    	$this->load->view("partial/notes", $data);
    }
	public function index()
	{
		
		$data['note'] = $this->Update->get_all_notes();
		$this->load->view('index', $data);
	}
	public function add()
    {   

        $this->Update->add_note($this->input->post());
        $data["note"] = $this->Update->get_all_notes();
        $this->load->view("partial/notes", $data);
     
    }
    public function delete($id)
    {   			
        $this->Update->delete_note($id);
        $data['note'] = $this->Update->get_all_notes();
        $this->load->view("partial/notes", $data);
    }
    public function update($id)
    {   			
        $this->Update->update_note($this->input->post('title'),$this->input->post('desc'),$id);
        $data['note'] = $this->Update->get_all_notes();
        $this->load->view("partial/notes", $data);
    }
    
}
