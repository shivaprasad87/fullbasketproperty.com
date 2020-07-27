<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Thankyou extends Public_Controller
{

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();

        // load the language file
        $this->lang->load('welcome');
        $this->load->model('home_model');
        $this->load->model('properties_model');
        $this->load->model('Builders_model', 'bm');
        // $this->session->unset_userdata('city');
        $this->data['property_types'] = $this->home_model->getWhere(array('status' => 1), 'property_types');
        
    }

    function index(){
        
        $this->data['meta'] = 
            array(
            'title'         => 'Thank You | Full Basket Property: Best Property Portal in India', 
            'description'   => 'Full Basket Property: Best Property Portal in India',
            'keywords'      => 'Full Basket Property: Best Property Portal in India'
        );
        if($this->input->get('type') == 'home')
            $this->data['properties'] = $this->home_model->getProperties('properties', 7);
        
        if($this->input->get('builder') && $this->input->get('location') && $this->input->get('property')){            
            $builderName = $this->security->xss_clean($this->input->get('builder'));
            $location    = $this->security->xss_clean($this->input->get('location'));
            $property    = $this->security->xss_clean($this->input->get('property'));
            
            $builder  = $this->bm->getBuilderById('id', ['name'=>$builderName]);
            $this->data['similar_builder_property'] = $this->properties_model->getPropertiesByLimit(array('p.builder_id' =>$builder['id'], 'p.slug !='=>$property), 0, 10);
            
            $propData = $this->properties_model->getPropertyBySlug($property);            
            $this->data['similar_location_property'] = $this->properties_model->getPropertiesByLimit(array('p.area' =>$propData['area'], 'p.slug !='=>$property), 0, 10);
        }
        $this->data['sliders'] = $this->home_model->order_by('id', 'desc')->getWhere(array('status' => 1, 'type'=>'T'), 'sliders');
        $this->data['view_page'] = 'thank-you';
        $this->load->view('template', $this->data);
    }
    

}
