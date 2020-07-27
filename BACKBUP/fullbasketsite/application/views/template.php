<?php
	$this->load->view('head', isset($meta) && $meta ? $meta : ['title' => 'Full Basket Property: Best Property Portal in India ', 'image' => base_url('assets/img/logo.png'), 'description' => 'Buy Residential Properties in India at Full Basket Property, the best property agent in India. Choose from the list of top Real Estate Properties in India.  ','keywords'=>'Real Estate Websites in India, Property Sites in India, Property Portal in India, Property for Sale in India, Real Estate India, Properties in India, India Real Estate, Residential Properties in India, Property Agent in India, Apartments, Plots, Villas, Real Estate, India Property']);
	$this->load->view('header');
	$this->load->view($view_page, $this->data);
	$this->load->view('footer');
?>