<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
       $this->load->model('home_model');
       $this->load->model('properties_model');
       $this->load->model('blogs_model');
    }

    function index()
    {

        $data['blogs'] = $this->blogs_model->order_by('id', 'desc')->getAll('blog');
        //print_r($data['blogs']);die;
        $data['items']  = $this->home_model->properties_site_map();
        $data['cities'] = $this->properties_model->getWhere(array('status' => 1), 'cities');
        $data['blog_type'] = $this->home_model->getWhere(array('status' => 1), 'blog_type');
 
    //header("Content-Type: text/xml;charset=iso-8859-1");
    $this->load->view('sitemap', $data);
    }

}
