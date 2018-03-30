<?php
/**
 * Created by PhpStorm.
 * User: ronen
 * Date: 30/03/2018
 * Time: 14:39
 */
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movies extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('layout/head');
        $this->load->view('movies/movies_list');
        $this->load->view('layout/bottom');
    }




    public function test()
    {
        echo 'test';
        //$this->load->view('test');
    }

    public function getallmovies()
    {
        $data = $this->input->get();
        echo json_encode($data);
        //$this->load->view('test');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */