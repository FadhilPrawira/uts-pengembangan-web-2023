<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Civitas extends CI_Controller {

    public function __construct()
    {
        // Mengambil construct dari class parent/induk
        parent::__construct();

        // load model "civitas_model"
        $this->load->model('civitas_model');

        // load library "form_validation" untuk validasi form
        $this->load->library('form_validation');
    }
 
    // Mengatur rules untuk library "form_validation"
    public function rules()
    {
        return 
        [
            [
                'field' => 'nama',
                'label' => 'Nama civitas',
                'rules' => 'required|max_length[50]',
                'errors' => 
                [
                'required' => '%s wajib diisi',
                'max_length' => 'Panjang %s maksimal 50 karakter'
                ]
            ], [
                'field' => 'username',
                'label' => 'Username civitas',
                'rules' => 'required|is_unique[user_fadhil.username_fadhil]|max_length[50]',
                'errors' => 
                [
                'required' => '%s wajib diisi',
                'max_length' => 'Panjang %s maksimal 50 karakter',
                'is_unique' => '%s telah digunakan seseorang. Buat username baru'
                ]

            ], [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
                'errors' => 
                [
                'required' => '%s wajib diisi',
                'min_length' => 'Panjang %s minimal 8 karakter'
                ]
            ], [
                'field' => 'level',
                'label' => 'Level Civitas',
                'rules' => 'required',
                'errors' => 
                [
                'required' => '%s wajib dipilih'
                ]
            ]
        ];
        
    }


// rules untuk edit()
public function rules_edit()
{
    return 
    [
        [
                'field' => 'username_edit',
                'label' => 'Username civitas Baru',
                'rules' => 'max_length[50]',
                'errors' => 
                [                    
                'max_length' => 'Panjang %s maksimal 50 karakter'
                ]    
        ], [
            'field' => 'password_edit',
            'label' => 'Password Baru',
            'rules' => 'required|min_length[8]',
            'errors' => 
            [
            'required' => '%s wajib diisi',
            'min_length' => 'Panjang %s minimal 8 karakter'
            ]
        ], [
            'field' => 'nama_edit',
            'label' => 'Nama civitas Baru',
            'rules' => 'required|max_length[50]',
            'errors' => 
            [
            'required' => '%s wajib diisi',
            'max_length' => 'Panjang %s maksimal 50 karakter'
            ]
        ],        [
            'field' => 'level_edit',
            'label' => 'Level Civitas Baru',
            'rules' => 'required',
            'errors' => 
            [
            'required' => '%s wajib dipilih'
            ]
        ]
    ];
    
}


// rules login()
public function rules_login()
{
    return 
    [
        [
                'field' => 'username',
                'label' => 'Username civitas',
                'rules' => 'max_length[50]',
                'errors' => 
                [                    
                'max_length' => 'Panjang %s maksimal 50 karakter'
                ]    
        ], [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required',
            'errors' => 
            [
            'required' => '%s wajib diisi'
            ]
        ]
    ];
    
}

    // Menampilkan home
	public function index()
	{
        $data['active'] = 'index';
        $data['title'] = 'Home';
		$this->load->view('home.php', $data);
	}

    // Menampilkan data 
    // SELECT * FROM buku;
    public function dashboard()
    {
        $data['active'] = 'dashboard';
        $data['title'] = 'Dashboard';
        // SELECT * FROM buku
        // Memasukkan data dari query ke array $data, dengan key "books"
        $data["users"] = $this->civitas_model->getAll();
        $this->load->view('dashboard.php', $data);
    }

    // Mencari data dan menampilkan  hasil pencarian
    // SELECT * FROM buku WHERE nama LIKE '%nama%';
    public function search()
    {
        $data['active'] = 'search';
        $data['title'] = 'Search Data';
        // Menangkap 'keyword'
        $data['keyword'] = $this->input->post('keyword');
        // define model
        $this->load->model('civitas_model');

		$data['search_result'] = $this->civitas_model->caridata($data['keyword']);

        $this->load->view('search.php', $data);
    }

    // Menambahkan data
    // INSERT INTO buku VALUES();
    public function add()
    {
        $data['active'] = 'add';
        $data['title'] = 'Add Data';
        // define model
        $civitas = $this->civitas_model;        
        // define library form_validation
        $validation = $this->form_validation;        
        // define rules for form_validation        
        $validation->set_rules($this->rules());

        if ($validation->run()) { // default FALSE. If TRUE, do INSERT
            $civitas->insert_query();
            $myMessage = '<div class="alert alert-success mt-4" role="alert">';
            $myMessage .= 'Berhasil disimpan. Klik untuk menuju ';
            $myMessage .= '<a href="';
            $myMessage .= site_url('civitas/dashboard');
            $myMessage .= '">Dashboard</a>';
            $myMessage .= '</div>';
            $this->session->set_flashdata('message_alert', $myMessage);
            
        } else {
            $myMessage = '<div class="alert alert-danger mt-4" role="alert">';
            $myMessage .= validation_errors();
            $myMessage .= '</div>';
            if(empty(validation_errors())) {
                $this->session->set_flashdata('message_alert', '');
            } else {
                $this->session->set_flashdata('message_alert', $myMessage);
            }
            
        }

        $this->load->view('add.php', $data);
    }


    // Menampilkan halaman tentang kami
    public function about_us()
    {
        $data['active'] = 'about_us';
        $data['title'] = 'About Us';
        $this->load->view('about.php', $data);
    }

    // Menampilkan halaman tentang kami
    public function contact_me()
    {
        $data['active'] = 'contact_me';
        $data['title'] = 'Contact Me';
        $this->load->view('contact.php', $data);
    }

    public function edit($id = null)
    {
        $data['active'] = 'edit';
        $data['title'] = 'Edit Data';
        if (!isset($id)) {
            // if id didn't exist, redirect to home
            redirect('civitas/index');
        }  else {
            // define model
            $civitas = $this->civitas_model;
            // SELECT * FROM nama_tabel WHERE id=$id;
            $data["user"] = $civitas->getById($id);
            // View in browser with data from database
            $this->load->view("edit", $data);

            // define library form_validation
            $validation = $this->form_validation;
            // define rules for form_validation
            $validation->set_rules($this->rules_edit());
            
            if ($validation->run()) { // default false. If true, do update
                $civitas->update();
                $myMessage = '<div class="alert alert-success mt-4" role="alert">';
                $myMessage .= 'Berhasil disimpan. Klik untuk menuju ';
                $myMessage .= '<a href="';
                $myMessage .= site_url('civitas/dashboard');
                $myMessage .= '">Dashboard</a>';
                $myMessage .= '</div>';
                $this->session->set_flashdata('message_alert', $myMessage);
                
                redirect('civitas/dashboard');
            } else {
                $myMessage = '<div class="alert alert-danger mt-4" role="alert">';
                $myMessage .= validation_errors();
                $myMessage .= '</div>';
                if(empty(validation_errors())) {
                    $this->session->set_flashdata('message_alert', '');
                } else {
                    $this->session->set_flashdata('message_alert', $myMessage);
                }
        
                if (!$data["user"]) {
                    show_404();
                }
            }
        }
    }
    public function delete($id=null)
    {
        $data['active'] = 'delete';
        $data['title'] = 'Delete Data';
        if (!isset($id)) {
            show_404();
        } else {
            if ($this->civitas_model->delete($id)) {
                redirect(site_url('civitas/dashboard'));
            }
        }
    }

    
    public function login()
	{
        $data['active'] = 'login';
        $data['title'] = 'Login';
		$this->load->model('civitas_model');
		$this->load->library('form_validation');
        
		$rules = $this->rules_login();
		$this->form_validation->set_rules($rules);
        
		if($this->form_validation->run() == FALSE){
			return $this->load->view("login", $data);

		}

		$username = $this->input->post('username');
		$password = sha1(md5($this->input->post('password')));

		if($this->civitas_model->login($username, $password)){
			redirect('civitas/dashboard');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}

        $this->load->view("login", $data);
	}

    public function signup() {
        $data['active'] = 'sign up';
        $data['title'] = 'Sign Up';

        // define model
        $civitas = $this->civitas_model;        
        // define library form_validation
        $validation = $this->form_validation;        
        // define rules for form_validation        
        $validation->set_rules($this->rules());

        if ($validation->run()) { // default FALSE. If TRUE, do INSERT
            $civitas->insert_query();
            $myMessage = '<div class="alert alert-success mt-4" role="alert">';
            $myMessage .= 'Berhasil disimpan. Klik untuk menuju ';
            $myMessage .= '<a href="';
            $myMessage .= site_url('civitas/login');
            $myMessage .= '">Login</a>';
            $myMessage .= '</div>';
            $this->session->set_flashdata('message_alert', $myMessage);
            
        } else {
            $myMessage = '<div class="alert alert-danger mt-4" role="alert">';
            $myMessage .= validation_errors();
            $myMessage .= '</div>';
            if(empty(validation_errors())) {
                $this->session->set_flashdata('message_alert', '');
            } else {
                $this->session->set_flashdata('message_alert', $myMessage);
            }
            
        }

        $this->load->view("signup", $data);
    }
}
