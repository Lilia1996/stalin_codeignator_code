<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_cal_db extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('date');
    }

    public function index() {
        redirect('app_cal_db/show');
    }

    public function show() {
        $prefs = array (
           'start_day'    => 'monday',
           'month_type'   => 'long',
           'day_type'     => 'short',
           'show_next_prev'  => TRUE,
           'next_prev_url'   => 'http://localhost:8080/stalin_projects/stalin_codeig_blog/app_cal_db/show/'
         );

        $this->load->library('calendar', $prefs);

        if ($this->uri->segment(4)) {
            $year= $this->uri->segment(3);
            $month = $this->uri->segment(4);
        } else {
            $year = date("Y", time());
            $month = date("m", time());
        }

        $this->load->model('App_cal_db_model');
        $appointments = $this->App_cal_db_model->get_appointments($year, $month);
        $data = array();

        foreach ($appointments->result() as $row) {
            $data[(int)date("d",$row->app_date)] = $row->app_url;
        }

        $data['cal_data'] = $this->calendar->generate($year, $month, $data);
        $this->load->view('templates/header');
        $this->load->view('app_cal_db/view', $data);
        $this->load->view('templates/footer');
    }        
}
