<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Civitas_model extends CI_Model
{
    private $_table = "user_fadhil";
    const SESSION_KEY = 'user_id';

    // define nama kolom di dalam tabel "user_fadhil"
    public $id_fadhil;
    public $nama_fadhil;
    public $username_fadhil;
    public $password_fadhil;
    public $level_fadhil;

    // SELECT * FROM nama_tabel;
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_fadhil" => $id])->row();
    }

    public function insert_query()
    {
        // Menangkap $_POST
        $post = $this->input->post();
        
        // Mendefinisikan masing-masing column_name berdasarkan $_POST 
        // $this->id = $post["id"];
        // ID tidak didefinisikan karena di MySQL bersifat Auto Increment
        // Selain itu ID juga tidak dituliskan di dalam form di views/add.php
        $this->nama_fadhil = $post["nama"];
        $this->username_fadhil = $post["username"];
        $this->password_fadhil = sha1(md5($post["password"]));
        $this->level_fadhil = $post["level"];

        return $this->db->insert($this->_table, $this);
    }

    public function caridata($keyword)
    {
	    if(!$keyword){
		    return null;
	    } 
	    $this->db->like('nama_fadhil', $keyword);
	    $query = $this->db->get($this->_table);
	    return $query->result();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_fadhil = $post["id"];
        $this->nama_fadhil = $post["nama_edit"];
        $this->username_fadhil = $post["username_edit"];
        $this->password_fadhil = sha1(md5($post["password_edit"]));
        $this->level_fadhil = $post["level_edit"];
        return $this->db->update($this->_table, $this, array('id_fadhil' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_fadhil" => $id));
    }

    public function login($username, $password)
	{
        $post = $this->input->post();
        // $this->username_fadhil = $post["username"];
        $this->password_fadhil = sha1(md5($post["password"]));

		$this->db->where('username_fadhil', $username);
		$query = $this->db->get($this->_table);
		$user = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!($password == $user->password_fadhil)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $user->id_fadhil]);
		$this->_update_last_login($user->id_fadhil);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

    public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id_fadhil' => $user_id]);
		return $query->row();
	}
    private function _update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['id_fadhil' => $id]);
	}
}