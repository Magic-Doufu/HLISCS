<?php
/* 花蓮高工製圖科 
 * 2014/09/10
 */
class Hlis_cs extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $config['hostname'] = 'localhost';
        $config['username'] = 'admin';
        $config['password'] = '1234';
        $config['database'] = 'hliscs';
        $config['dbdriver'] = 'mysql';
        $config['pconnect'] = FALSE;
        $config['dbprefix'] = '';
        $config['db_debug'] = TRUE;
        $config['char_set'] = 'utf8';
        $config['dbcollat'] = 'utf8_general_ci';
        $this->load->model('Hlis_cs_model', 'hcm', $config);
    }
    public function index($pages = 'home') {
        if(!file_exists(APPPATH . '/views/pages/' . $pages . '.php')) {
            show_404();
        }
        $data['news'] = $this->hcm->get_latest_ten_news();
        $data['title'] = 'Hello World';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $pages, $data);
        $this->load->view('templates/footer', $data);
        

    }
}