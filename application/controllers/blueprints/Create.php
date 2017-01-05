<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Create extends MY_Controller {
    function __construct() {
        parent::__construct();
            $this->load->helper('string');
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        }

    public function index() {
        $this->form_validation->set_rules('url_address', $this->lang->line('create_url_address'), 'required|min_length[1]|max_length[1000]|trim');

        if ($this->form_validation->run() == FALSE) {
            // Set initial values for the view
            $page_data = array('success_fail'   => null,
                               'encoded_url'    => false);
            $page_data['title'] = "Create Page";
            $page_data['heading'] = "Url create";
            $page_data['main'] = 'blueprints/create/create';
            $this->load->view('ci_profess/template',$page_data);
           
           
        } else {
            // Begin to build data to be passed to database
            $data = array(
                'url_address' => $this->input->post('url_address'),
            );

            $this->load->model('bp_model/Urls_model');
            if ($res = $this->Urls_model->save_url($data)) {
                $page_data['success_fail'] = 'success'; // Set to display success message
                $page_data['encoded_url'] = $res; // Contains url_code returned by model
            } else {
                // Some sort of error, set to display error message
                $page_data['success_fail'] = 'fail'; 
            }

            // Build link which will be displayed to the user
            $page_data['encoded_url'] = base_url('index.php') . '/' . $res;

            $page_data['title'] = "Create Page";
            $page_data['heading'] = "Create Page";
            $page_data['main'] = 'blueprints/create/create';
            $this->load->view('ci_profess/template',$page_data);
          
        }
    }
}

/* End of file create.php */
/* Location: ./application/controllers/create.php */