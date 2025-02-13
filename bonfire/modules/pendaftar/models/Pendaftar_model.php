<?php defined('BASEPATH') || exit('No direct script access allowed');

class Pendaftar_model extends BF_Model
{
    public $table_name = 'pendaftar_guru';  
    protected $key = 'id_pendaftar_guru';  
    protected $date_format = 'datetime';

    protected $log_user = false;
    protected $set_created = false;
    protected $set_modified = false;
    protected $soft_deletes = false;


    protected $before_insert = array();
	protected $after_insert = array();
	protected $before_update = array();
	protected $after_update = array();
	protected $before_find = array();
	protected $after_find = array();
	protected $before_delete = array();
	protected $after_delete = array();

    protected $return_insert_id = false;

	// The default type for returned row data.
	protected $return_type = 'object';

	// Items that are always removed from data prior to inserts or updates.
	protected $protected_attributes = array('id');

    // Table fields and validation rules
    protected $validation_rules = array(
        array(
            'field' => 'nama_sekolah',
            'label' => 'Nama Sekolah',
            'rules' => 'required|max_length[255]',
        ),
        array(
            'field' => 'alamat_sekolah',
            'label' => 'Alamat Sekolah',
            'rules' => 'required|max_length[255]',
        ),
        array(
            'field' => 'nip',
            'label' => 'NIP',
            'rules' => 'required|max_length[20]',
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email|max_length[255]',
        ),
    );

    public function __construct()
    {
        parent::__construct();
    }

    // Method to register a new user
    public function register($data)
    {
        // Insert data into the database
        return $this->db->insert($this->table_name, $data);
    }

    public function get()
	{
		$query = $this->db->get($this->table_name);
		return $query;
	}
    public function get_by_id($id) {
        $this->db->where('id_pendaftar_guru', $id);
        $query = $this->db->get('pendaftar_guru'); // Use your table name here
        return $query->row(); // Return a single row
    }
    
}
