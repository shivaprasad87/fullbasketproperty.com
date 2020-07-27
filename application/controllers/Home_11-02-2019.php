<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller
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
        // $this->session->unset_userdata('city');
        $this->data['property_types'] = $this->home_model->getWhere(array('status' => 1), 'property_types');
        
    }


    /**
     * Default
     */
    function index()
    {
        $this->data['meta'] = array('title' => 'Full Basket Property: Best Property Portal in India', 'description' => 'Buy Residential Properties in India at Full Basket Property, the best property agent in India. Choose from the list of top Real Estate Properties in India.  ','keywords' =>'Real Estate Websites in India, Property Sites in India, Property Portal in India, Property for Sale in India, Real Estate India, Properties in India, India Real Estate, Residential Properties in India, Property Agent in India, Apartments, Plots, Villas, Real Estate, India Property');
        $location_where = array('status' => 1);
        if($this->session->userdata('city_id')){
            $location_where["city_id"] = $this->session->userdata('city_id');
        }
        $this->data['locations'] = $this->home_model->getWhere($location_where, 'locations');
        $this->data['testimonials'] = $this->home_model->getWhere(array('status' => 1), 'testimonials');
        $this->data['achievements'] = $this->home_model->getWhere(array('status' => 1), 'achievements');
        $this->data['amenities'] = $this->home_model->getWhere(array('status' => 1), 'amenities');
        $this->data['properties'] = $this->home_model->getProperties('properties', 7);
        $this->data['sliders'] = $this->home_model->order_by('id', 'desc')->getWhere(array('status' => 1), 'sliders');
        $this->data['builder_count'] = $this->home_model->countWhere(array('status' => 1), 'builders');
        $this->data['location_count'] = $this->home_model->countWhere(array('status' => 1), 'locations');
        $this->data['project_count'] = $this->home_model->countWhere(array('status' => 1), 'properties');
        $this->data['blog_count'] = $this->home_model->countWhere(array('status' => 1), 'blog');
        $this->data['display_images'] = $this->home_model->getOneWhere(array('status' => 1), 'display_images');
        $this->data['city_count'] = count($this->data['cities']);
        $this->data['price_range'] = $this->home_model->getPriceRanges();
        // load views
        $this->data['view_page'] = 'index';
        $this->load->view('template', $this->data);
    }

    public function locations($city_id){
        $locations = $this->home_model->getWhere(array("status"=>1, "city_id"=>$city_id), 'locations');
        echo '<option selected="" disabled="">Select Your Location</option>';
        foreach ($locations as $loc) {
            echo '<option value="'.$loc->id.'">'.$loc->name.'</option>';
        }
    }

    function listing()
    {
        $perpage = 10;
        $base_url = site_url('listing');
        $uri_segment = 2;
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;

        $content = $this->input->post() ? $this->input->post() : '';
        $total = $this->home_model->loadProperties(0, 0, true, $content);

        $properties = $this->home_model->loadProperties($perpage, $page, false, $content);

        if ($this->session->userdata('logged_in')) {
            $user = $this->session->userdata('logged_in');
            foreach ($properties as $property) {
                $is_fav = $this->home_model->getOneWhere(array(
                    'user_id' => $user['id'],
                    'property_id' => $property->id
                ), 'favourites');
                $property->class_heart = $is_fav ? 'fa-heart' : 'fa-heart-o';
            }
        }
        if ($this->input->post('showPattern')) {
            $this->data['showPattern'] = $this->input->post('showPattern');
        } else {
            $this->data['showPattern'] = 'list-group-item';
        }
        $this->data['keyword'] = $this->input->post('keyword') ? $this->input->post('keyword') : '';
        $this->data['properties'] = $properties;

        $this->data['pagination'] = $this->paginate($perpage, $total, $base_url, $uri_segment, $class = "");
        $this->data['page'] = $page;
        $this->data['total'] = $total;
        $this->data['perpage'] = $perpage;
        $this->data['price_range'] = $this->home_model->getPriceRanges();
        $this->data['amenities'] = $this->home_model->getWhere(array('status' => 1), 'amenities');
        $location_where = array('status' => 1);
        if($this->session->userdata('city_id')){
            $location_where["city_id"] = $this->session->userdata('city_id');
        }
        $this->data['locations'] = $this->home_model->getWhere($location_where, 'locations');
        
        $this->data['meta'] = array(
            'title' => 'Full Basket Property: Real Estate Properties for Sale in India',
            'description' => 'Find the best Real Estate Properties located in Bangalore, Pune, Hyderabad and Mumbai. Get advice from Expert Real Estate Agents with complete project details. ',
            'keywords' => 'Property for sale in India, Apartments for Sale, Flats for Sale, House for Sale, Residential Properties in India, Villas for Sale, Plots for Sale, Bangalore Real Estate, Pune Real Estate, Hyderabad Real Estate, Mumbai Real Estate, Real Estate India, Property Site India'
        );

        $this->data['view_page'] = 'listing';
        $this->load->view('template', $this->data);
    }


    public function sendmail()
    {
        if (!verify_captcha()) {
            $this->session->set_flashdata('error', 'Invalid Captcha');
            redirect($this->input->post('redirect', site_url()));
        }

        $this->config_email();

        $name = trim(stripslashes($_POST['name']));
        $email = trim(stripslashes($_POST['email']));
        $phone = trim(stripslashes($_POST['phone']));
        $message = trim(stripslashes($_POST['message']));

        $this->email->from($name, $email);
//         $this->email->to('vineeth@soarmorrow.com');
        $this->email->to('sales@fullbasketproperty.com');

        $this->email->subject('Enquiry for you');
        $data = array('post' => array('name' => $name, 'email' => $email, 'phone' => $phone, 'message' => $message));
        $this->email->message($this->load->view('mail_template.php', $data, true));

        if ($this->email->send()) {
            $this->session->set_flashdata('message', 'Your enquiry has been sent successfully');
            redirect($this->input->post('redirect', site_url()));
        }
        debug($this->email->print_debugger());
    }

    public function send()
    {
        if (!verify_captcha()) {
            $this->session->set_flashdata('error', 'Invalid Captcha');
            redirect($this->input->post('redirect', site_url()));
        }

        $this->config_email();


        $this->email->from($this->input->post('name'), $this->input->post('email'));
//        $this->email->to('vineeth@soarmorrow.com');
        $this->email->to('sales@fullbasketproperty.com');

        $this->email->subject('New Notification from fullbasketproperty');
        $post = array();
        foreach ($this->input->post() as $key => $value) {
               if (!in_array($key, array('redirect','g-recaptcha-response'))){
                   $post[$key] = $value;
               }
        }
        $data = compact('post');

        $this->email->message($this->load->view('mail_template.php', $data, true));

        if ($this->email->send()) {
            $this->session->set_flashdata('message', 'Email sent successfully');
            redirect($this->input->post('redirect', site_url()));
        }
        debug($this->email->print_debugger());
    }

    function config_email()
    {
        $config = array(
            'mailtype' => 'html',
            'protocol' => 'mail',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => '465',
            'smtp_timeout' => '7',
            'smtp_user' => 'fasilk008@gmail.com',
            'smtp_crypto' => 'ssl',
            'smtp_pass' => 'gjrsqxauohnslzag',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'validation' => true  // bool whether to validate email or not
        );
        // $config = Array(
        //     'protocol' => 'mail',
        //     'mailtype' => 'html',
        //     'charset' => 'utf-8',
        //     'newline' => "\r\n",
        //     'wordwrap' => TRUE,
        //     'validation' => TRUE
        //     );

        $this->load->library('email');
        $this->email->initialize($config);
    }

    public function city($city)
    {

        if ($city == 'all') {
            $this->session->unset_userdata('city');
            $this->session->unset_userdata('city_id');
            redirect(site_url());
        } else {
            $city_details = $this->home_model->getOneWhere(array('url_name' => $city, 'status' => 1), 'cities');
            $this->session->set_userdata('city', $city_details->name);
            $this->session->set_userdata('city_id', $city_details->id);
        }
        $perpage = 10;
        $base_url = site_url('city/' . $city);
        $uri_segment = 3;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;

        $content = $this->input->post() ? $this->input->post() : '';
        if ($this->input->post('showPattern')) {
            $this->data['showPattern'] = $this->input->post('showPattern');
        } else {
            $this->data['showPattern'] = 'list-group-item';
        }

        $this->db->where('p.city_id', $city_details->id);
        $total = $this->home_model->loadProperties(0, 0, true, $content);

        $this->db->where('p.city_id', $city_details->id);
        $properties = $this->home_model->loadProperties($perpage, $page, false, $content);

        if ($this->session->userdata('logged_in')) {
            $user = $this->session->userdata('logged_in');
            foreach ($properties as $property) {
                $is_fav = $this->home_model->getOneWhere(array(
                    'user_id' => $user['id'],
                    'property_id' => $property->id
                ), 'favourites');
                $property->class_heart = $is_fav ? 'fa-heart' : 'fa-heart-o';
            }
        }

        $this->data['keyword'] = $this->input->post('keyword') ? $this->input->post('keyword') : '';
        $this->data['properties'] = $properties;

        $this->data['pagination'] = $this->paginate($perpage, $total, $base_url, $uri_segment, $class = "");
        $this->db->where('city_id', $city_details->id);
        $this->data['locations'] = $this->home_model->getWhere(array('status' => 1), 'locations');
        $this->data['page'] = $page;
        $this->data['total'] = $total;
        $this->data['perpage'] = $perpage;
        $this->data['price_range'] = $this->home_model->getPriceRanges();
        $this->data['amenities'] = $this->home_model->getWhere(array('status' => 1), 'amenities');
        $this->data['meta'] = array(
            'title' => $city_details->name . ' Based Listing - FULLBASKET',
            'description' => 'Test City Based Listing Page Description'
        );

        $this->data['city_name'] = $city_details->name;
        $this->data['view_page'] = 'city_listing';
        $this->load->view('template', $this->data);
    }

    public function manage_favourites()
    {
        $user = $this->session->userdata('logged_in');
        if (!$user) {
            redirect(site_url());
        }

        $property_id = $this->input->post('id');
        $find = $this->home_model->getOneWhere(array('user_id' => $user['id'], 'property_id' => $property_id),
            'favourites');
        if ($find) {
            $this->home_model->deleteWhere(array('user_id' => $user['id'], 'property_id' => $property_id),
                'favourites');
            return true;
        } else {
            $this->home_model->insertRow(array('user_id' => $user['id'], 'property_id' => $property_id), 'favourites');
            return true;
        }
    }

    function searchListing()
    {
        $perpage = 0;
        $base_url = site_url('searchListing');
        $uri_segment = 2;
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;

        $content = $this->input->post() ? $this->input->post() : null;
        if ($this->input->post('showPattern')) {
            $this->data['showPattern'] = $this->input->post('showPattern');
        } else {
            $this->data['showPattern'] = 'list-group-item';
        }

        $total = $this->home_model->loadProperties(0, 0, true, $content);

        $properties = $this->home_model->loadProperties($perpage, $page, false, $content);
        if ($this->session->userdata('logged_in')) {
            $user = $this->session->userdata('logged_in');
            foreach ($properties as $property) {
                $is_fav = $this->home_model->getOneWhere(array(
                    'user_id' => $user['id'],
                    'property_id' => $property->id
                ), 'favourites');
                $property->class_heart = $is_fav ? 'fa-heart' : 'fa-heart-o';
            }
        }

        $this->data['keyword'] = $this->input->post('keyword') ? $this->input->post('keyword') : '';
        $this->data['store_content'] = $content;
        $this->data['properties'] = $properties;

        $this->data['pagination'] = $this->paginate($perpage, $total, $base_url, $uri_segment, $class = "");
        $this->data['page'] = $page;
        $this->data['total'] = $total;
        $this->data['perpage'] = $perpage;
        $this->data['price_range'] = $this->home_model->getPriceRanges();
        $this->data['amenities'] = $this->home_model->getWhere(array('status' => 1), 'amenities');
        $this->data['locations'] = $this->home_model->getWhere(array('status' => 1), 'locations');
        $this->data['meta'] = array(
            'title' => 'Searched Properties Listing - FULLBASKET',
            'description' => 'Test Search Page Description'
        );

        $this->data['view_page'] = 'searchListing';
        $this->load->view('template', $this->data);
    }

    public function favourites()
    {
        $user = $this->session->userdata('logged_in');
        if (!$user) {
            redirect(site_url());
        }
        $perpage = 10;
        $base_url = site_url('favourites');
        $uri_segment = 2;
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;

        $content = $this->input->post() ? $this->input->post() : null;

        $total = $this->home_model->loadFavourites(0, 0, true, $content);

        $properties = $this->home_model->loadFavourites($perpage, $page, false, $content);

        if ($this->session->userdata('logged_in')) {
            $user = $this->session->userdata('logged_in');
            foreach ($properties as $property) {
                $is_fav = $this->home_model->getOneWhere(array(
                    'user_id' => $user['id'],
                    'property_id' => $property->id
                ), 'favourites');
                $property->class_heart = $is_fav ? 'fa-heart' : 'fa-heart-o';
            }
        }

        $this->data['properties'] = $properties;

        $this->data['pagination'] = $this->paginate($perpage, $total, $base_url, $uri_segment, $class = "");
        $this->data['page'] = $page;
        $this->data['total'] = $total;
        $this->data['perpage'] = $perpage;
        $this->data['meta'] = array(
            'title' => 'Favouite Properties Listing - FULLBASKET',
            'description' => 'Favourite Properties Listing Page Description'
        );

        $this->data['view_page'] = 'favourites';
        $this->load->view('template', $this->data);
    }

    public function subscribers()
    {
        $email = $this->input->post('email');
        $find = 0;//$this->home_model->getOneWhere(array('email' => $email), 'subscribers');
        if (!$find) {
            //$this->home_model->insertRow(array('email' => $email, 'created_at' => date('Y-m-d H:i:s')), 'subscribers');
            $this->session->set_flashdata('message', 'Subscribed Successfully');
            $this->config_email();
            $this->email->from("Fullbasket WebAdmin", 'no-reply@fullbasketproperty.com');
            $this->email->to('sales@fullbasketproperty.com');

            $this->email->subject("You received a new subscriber at fullbasket properties.");
            $data = array(
                'post' => array(
                    'email' => $email,
                    'message' => "$email just subscribed to fulllbasket properies."
                )
            );
            $this->email->message($this->load->view('mail_template.php', $data, true));

            $this->email->send();
        } else {
            $this->session->set_flashdata('info', 'Already Subscribed');
        }
        redirect(site_url());
    }

    public function price_range()
    {

        $price_range = $this->home_model->getPriceRanges();
        echo json_encode($price_range);
    }

    public function about()
    {
        $this->data['meta'] = array(
            'title'         => 'Full Basket Property | Leading Real Estate Agent in India', 
            'description'   => 'Looking for a property in India? Our experts will guide you to select among best properties in your preferred location by analyzing every project in detail.',
            'keywords'      =>'Real Estate Websites in India, Property Portals in India, Property Experts in India, Properties in India, Real Estate Properties, Online Property Sites, India Real Estate, Real Estate Agents in India, Property Sites in India, Property for Sale in India. '
        );
            
        $this->data['view_page'] = 'about';
        $this->load->view('template', $this->data);
    }

    public function property_details()
    {
        $this->data['view_page'] = 'property-details';
        $this->load->view('template', $this->data);
    }

    public function property_old($slug = null)
    {

        if (is_null($slug) || ($property = $this->home_model->getProperty($slug)) == null) {
            show_404();
        }
        if ($this->input->post()) {
            
            $this->config_email();

            $this->email->from($this->input->post('name'), $this->input->post('email'));
            $this->email->to('sales@fullbasketproperty.com');

            $this->email->subject($this->input->post('name') . ' has an interest in ' . $property->title);
            $data = array(
                'post' =>
                    array(
                        'Name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'phone' => $this->input->post('mobile'),
                        'message' => $this->input->post('name') . "(" . $this->input->post('mobile') . ") has just showed an interest in the listed property <a href='" . site_url("property/$property->slug") . "'>" . $property->title . "</a> ($property->id)."
                    )
            );
            $this->email->message($this->load->view('mail_template.php', $data, true));

            if ($this->email->send()) {
                $this->data['mail_sent'] = true;
            }
        }
        $property->amenities = $this->properties_model->getAmenities($property->id);
        $property->gallery = $this->properties_model->getGallery($property->id);
        $this->data['property'] = $property;
        $this->data['view_page'] = 'property';
        $this->load->view('template', $this->data);
    }

    public function property_enquiry()
    {

        $property = $this->properties_model->getOneWhere(array('id' => $this->input->post('property_id')),
            'properties');
        if (!verify_captcha()) {
            if ($this->input->is_ajax_request()) {
                die(json_encode(array('status' => 'failed')));
            } else {
                $this->session->set_flashdata('error', 'Invalid Captcha');
                redirect(site_url("property/$property->slug"));
            }
        }
        $this->config_email();

        $name = trim(stripslashes($_POST['name']));
        $email = trim(stripslashes($_POST['email']));
        $phone = trim(stripslashes($_POST['phone']));
        $message = trim(stripslashes($_POST['message']));

        $this->email->from($name, $email);
//        $this->email->to('vineeth@soarmorrow.com');
        $this->email->to('sales@fullbasketproperty.com');

        $this->email->subject("You have received a new enquiry for $property->title");
        $data = array(
            'post' => array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'property' => $property->title,
                'message' => $message
            )
        );

        $this->email->message($this->load->view('mail_template.php', $data, true));

        if ($this->email->send()) {
            if ($this->input->is_ajax_request()) {
                die(json_encode(array('status' => 'ok')));
            } else {
                $this->session->set_flashdata('message', 'Your enquiry has been sent successfully');
                redirect(site_url("property/$property->slug"));
            }
        }
        debug($this->email->print_debugger());
    }

    /**
     * Privacy Page
     */
    public function privacy()
    {
        $this->data['meta'] = array(
            'title'         => 'Privacy Policy - FullBasketProperty.com ', 
            'description'   => 'Privacy policy of Full Basket Property, a leading property agent in India. For any support and concerns, please connect at support@fullbasketproperty.com ',
            'keywords'      =>'Bangalore Real Estate, Hyderabad Real Estate, Mumbai Real Estate, Pune Real Estate, Real Estate Websites In India, Property Sites In India, Real Estate Agents In India, Property Portals In India, Real Estate, Indian Real Estate '
        );
        $privacy = $this->home_model->getAll('terms');
        $this->data['title'] = 'Privacy Policy';
        $this->data['content'] = isset($privacy[0]) ? $privacy[0]->content : '';
        $this->data['view_page'] = 'privacy';
        $this->load->view('template', $this->data);

    }

    /**
     * Disclaimer Page
     */
    public function disclaimer()
    {
        $this->data['meta'] = array(
            'title'         => 'Disclaimer - FullBasketProperty.com ', 
            'description'   => 'FullBasketProperty.com provides information regarding the Real Estate Projects in India.  ',
            'keywords'      =>'Bangalore Real Estate, Hyderabad Real Estate, Mumbai Real Estate, Pune Real Estate, Property Portals In Bangalore, Property Portals In Pune, Property Portals In Hyderabad, Property Portals In Mumbai, Real Estate, Indian Real Estate '
        );
        $privacy = $this->home_model->getAll('disclaimer');
        $this->data['title'] = 'Disclaimer';
        $this->data['content'] = isset($privacy[0]) ? $privacy[0]->content : '';
        $this->data['view_page'] = 'privacy';
        $this->load->view('template', $this->data);

    }

    public function blog()
    {
        $this->data['meta'] = array(
            'title'         => 'Full Basket Property Blogs | Latest Property Updates and Trends', 
            'description'   => 'Get the latest real estate property updates, news, opinions and trends in India. Expert insights to the events in the Indian Real Estate Market. ',
            'keywords'      =>'Real Estate Blogs, Real Estate Blogs For Buyers, Latest Real Estate News, Real Estate News India 2018, Property Blog India, Property Blog, Property Related Blogs, Best Property Blogs In India, Real Estate Blogs India, Property Experts, Top Property Blogs, Property For Sale, Apartments For Sale'
        );
        $this->load->model('blogs_model');
        $blogs = $this->blogs_model->order_by('id', 'desc')->getAll('blog');
        if ($blogs && isset($blogs[0])) {
            $this->data['blogs'] = $blogs;
            $this->data['view_page'] = 'blogs';
            $this->load->view('template', $this->data);
        } else {
            redirect(site_url());
        }
    }

    public function blog_view($slug = "")
    {
        $this->load->model('blogs_model');
        $blog = $this->blogs_model->getOneWhere(array('slug' => trim($slug)), 'blog');
        if ($blog) {
            $this->data['next_blog'] = $this->blogs_model->getNextBlog($blog->id);
            $this->data['prev_blog'] = $this->blogs_model->getPrevBlog($blog->id);
            $this->data['blog'] = $blog;
            $this->data['meta'] = array(
                'title' => $blog->meta_title,
                'keywords' => $blog-> meta_keywords,
                //'description' => substr(strip_tags($blog->meta_desc), 0, 200) . '...',
                'description' => strip_tags($blog->meta_desc),
                'image' => base_url('uploads/blog_images/' . $blog->image),
            );
            $this->data['view_page'] = 'blog';
            $this->load->view('template', $this->data);
        } else {
            redirect(site_url());
        }
    }
    

    public function contact()
    {
        $this->data['meta'] = array(
            'title'         => 'Full Basket Property Contact and Address Details', 
            'description'   => 'Want to buy a home or looking for property advice? Contact us at FullBasketProperty.com, best property portal in India. Find our contact details across India. ',
            'keywords'      =>'Full Basket Property Contact Details, Full Basket Property Address, Real Estate Bangalore, Real Estate Hyderabad, Real Estate Pune, Real Estate Mumbai, Real Estate Agent in Bangalore, Real Estate Agent in Hyderabad, Real Estate Agent in Pune, Real Estate Agent in Mumbai'
        );
        
        if ($this->input->post()) {
            if (!verify_captcha()) {
                $this->session->set_flashdata('error', 'Invalid Captcha');
                redirect('contact');
            }
            $this->config_email();

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $message = $this->input->post('message');

            $this->email->from($name, $email);
            $this->email->to('sales@fullbasketproperty.com');
//            $this->email->to('vineeth@soarmorrow.com');


            $this->email->subject("You have received a new enquiry for bullbasket properties");
            $data = array(
                'post' => array(
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'type' => $this->input->post('type'),
                    'comment' => $message
                )
            );

            $this->email->message($this->load->view('mail_template.php', $data, true));

            if ($this->email->send()) {
                $this->session->set_flashdata('message', 'Your enquiry has been sent successfully');
                redirect(site_url("contact"));
            }
            debug($this->email->print_debugger());
        }
        $this->data['view_page'] = 'contact';
        $this->load->view('template', $this->data);
    }

    /**
     * Careers
     */
    public function careers()
    {
        $this->data['meta'] = array(
            'title'         => 'Find Jobs – FullBasketProperty.com ', 
            'description'   => 'Career opportunities at Full Basket Property. Begin your journey in the world of Real Estate at a place where you can implement your ideas and make a difference.   ',
            'keywords'      =>'Bangalore Real Estate, Hyderabad Real Estate, Mumbai Real Estate, Pune Real Estate, Jobs in Bangalore, Jobs in Hyderabad, Jobs in Pune, Jobs in Mumbai, Job Vacancies, Job Search, Real Estate Career, Career Opportunities in Real Estate, Find Jobs Real Estate'
        );
        
        if ($this->input->post()) {

            if (!verify_captcha()) {
                $this->session->set_flashdata('error', 'Invalid Captcha');
                redirect('careers#en-application');
            }

            $this->form_validation->set_rules('email', "Email Address", 'required|valid_email');
            $this->form_validation->set_rules('name', "Name", 'required');
            $this->form_validation->set_rules('phone', "Mobile Number", 'required');
            $this->form_validation->set_rules('address', "Address", 'required');

            if ($this->form_validation->run() === true) {


                $this->config_email();

                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $self_introduction = $this->input->post('self_introduction');
                $address = $this->input->post('address');

                $this->email->from($name, $email);
                $this->email->to('sales@fullbasketproperty.com');
//                $this->email->to('vineeth@soarmorrow.com');


                $this->email->subject("You have received a new career request at bullbasket properties");

                $data = array(
                    'post' => array(
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'address' => $address,
                        'application_for' => $this->input->post('application_for'),
                        'self_introduction' => $self_introduction
                    )
                );

                $this->email->message($this->load->view('mail_template.php', $data, true));
                if (isset($_FILES) && $_FILES) {
                    if (isset($_FILES["resume"]['name']) && $_FILES["resume"]['name']) {
                        $this->email->attach($_FILES['resume']['tmp_name'], 'attachment',
                            "$name's Resume" . strrchr($_FILES["resume"]['name'], '.'));
                    }
                }
                if ($this->email->send()) {
                    $this->session->set_flashdata('message', 'Your enquiry has been sent successfully');
                    redirect(site_url("careers#en-application"));
                }
                debug($this->email->print_debugger());
            }
            debug(validation_errors());
        }
        $this->data['careers'] = $this->home_model->getAll('careers');
        $this->data['view_page'] = 'careers';
        $this->load->view('template', $this->data);
    }

    public function refine_search()
    {
        $content = $this->input->post() ? $this->input->post() : '';
        $properties = $this->home_model->loadProperties(0, null, false, $content);
        if ($this->session->userdata('logged_in')) {
            $user = $this->session->userdata('logged_in');
            foreach ($properties as $property) {
                $is_fav = $this->home_model->getOneWhere(array(
                    'user_id' => $user['id'],
                    'property_id' => $property->id
                ), 'favourites');
                $property->class_heart = $is_fav ? 'fa-heart' : 'fa-heart-o';
            }
        }
        $this->data['showPattern'] = $this->input->post('showPattern')?$this->input->post('showPattern') : 'list-group-item';
        $this->data['keyword'] = $this->input->post('keyword') ? $this->input->post('keyword') : '';
        $this->data['properties'] = $properties;
        echo $this->load->view('partials/property-list', $this->data, true);
        exit();
    }

    public function testimonials()
    {
        $this->data['meta'] = array(
            'title'         => 'Our Customer Reviews and Testimonials - Full Basket Property ', 
            'description'   => 'Our customers are very important to us. Read what they have to say about our services. Full Basket Property specializes in residential real estate in India.  ',
            'keywords'      =>'Bangalore Real Estate, Hyderabad Real Estate, Mumbai Real Estate, Pune Real Estate, Property in Bangalore, Property in Hyderabad, Property in Pune, Property in Mumbai, Customer Testimonials, Full Basket Property reviews, Client Testimonials'
        );
        $this->data['testimonials'] = $this->home_model->getWhere(array('status' => 1), 'testimonials');
        $this->data['view_page'] = 'testimonial';
        $this->load->view('template', $this->data);
    }

    public function property($slug = null)
    {
        if (is_null($slug) || ($property = $this->home_model->getProperty($slug)) == null) {
            show_404();
        }
        if ($this->input->post()) {
            
            if ($this->input->post('no-captcha') == null) {
                if (!verify_captcha()) {
                    $this->session->set_flashdata('error', 'Invalid Captcha');
                    redirect(site_url("property/$property->slug"));
                }
            }

            $this->config_email();

            $this->email->from($this->input->post('name'), $this->input->post('email'));
            $this->email->to('prashanth@soarmorrow.com');

            $this->email->subject($this->input->post('name') . ' has an interest in ' . $property->title);
            $data = array(
                'post' =>
                    array(
                        'Name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'phone' => $this->input->post('phone'),
                        'message' => $this->input->post('name') . "(" . $this->input->post('mobile') . ") has just showed an interest in the listed property <a href='" . site_url("property/$property->slug") . "'>" . $property->title . "</a> ($property->id)."
                    )
            );
            $units = '';
            if ($this->input->post('flat_types')){
                foreach ($this->input->post('flat_types') as $i => $id){
                    $flat_type = $this->home_model->getWhere(compact('id'),'property_flat_types');
                    if ($flat_type){
                        $units .= ($i+1).". ".$flat_type->name." (". $flat_type->size ." ". $flat_type->unit .")<br />";
                    }
                }
            }
            if ($units){
                $data['post']['units_interested'] = $units;
            }
            $this->email->message($this->load->view('mail_template.php', $data, true));

            if ($this->email->send()) {
                $this->data['mail_sent'] = true;
            }
        }
        $property->amenities = $this->properties_model->getAmenities($property->id);
        $property->gallery = $this->properties_model->getGallery($property->id);
        $this->data['property'] = $property;
        $this->data['view_page'] = 'property';
        $this->load->view('property-design', $this->data);
    }

    public function propertyDetails($city = null, $location = null, $slug = null)
    {
        if (is_null($slug) || ($property = $this->home_model->getProperty($slug)) == null) {
            show_404();
        }
        if ($this->input->post()) {
            if (!verify_captcha()) {
                $this->session->set_flashdata('error', 'Invalid Captcha');
                redirect(site_url("property/$property->slug"));
            }
            $this->config_email();

            $this->email->from($this->input->post('name'), $this->input->post('email'));
            $this->email->to('prashanth@soarmorrow.com');

            $this->email->subject($this->input->post('name') . ' has an interest in ' . $property->title);
            $data = array(
                'post' =>
                    array(
                        'Name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'phone' => $this->input->post('phone'),
                        'message' => $this->input->post('name') . "(" . $this->input->post('mobile') . ") has just showed an interest in the listed property <a href='" . site_url("property/$property->slug") . "'>" . $property->title . "</a> ($property->id)."
                    )
            );
            $units = '';
            if ($this->input->post('flat_types')){
                foreach ($this->input->post('flat_types') as $i => $id){
                    $flat_type = $this->home_model->getWhere(compact('id'),'property_flat_types');
                    if ($flat_type){
                        $units .= ($i+1).". ".$flat_type->name." (". $flat_type->size ." ". $flat_type->unit .")<br />";
                    }
                }
            }
            if ($units){
                $data['post']['units_interested'] = $units;
            }
            $this->email->message($this->load->view('mail_template.php', $data, true));

            if ($this->email->send()) {
                $this->data['mail_sent'] = true;
            }
        }
        $property->amenities = $this->properties_model->getAmenities($property->id);
        $property->gallery = $this->properties_model->getGallery($property->id);
        $this->data['property'] = $property;
        $this->data['view_page'] = 'property';
        $this->load->view('property-design', $this->data);
    }

}
