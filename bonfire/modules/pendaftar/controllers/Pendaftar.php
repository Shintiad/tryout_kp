<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends Front_Controller {

    public function __construct() {
        parent::__construct();

        // Load form helper, form validation library, and the model
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('pendaftar_model');
    }

    // Method to display the list of registered data
    public function index()
    {
        $data['pageTitle'] = 'Pengajuan Daftar';
        $data['pendaftaran'] = $this->pendaftar_model->get()->result();
        $data['pageContent'] = $this->load->view('pendaftarlist.php', $data, TRUE);
        $this->load->view('pendaftarlist', $data);
    }

    // Method to display registration form
    public function daftar() {
        // Set validation rules
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required|max_length[255]');
        $this->form_validation->set_rules('alamat_sekolah', 'Alamat Sekolah', 'required|max_length[255]');
        $this->form_validation->set_rules('nip', 'NIP', 'required|max_length[20]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[255]');

        // Check if form validation is successful
        if ($this->form_validation->run() === FALSE) {
            // Load the registration view with error messages
            $this->load->view('pendaftar');
        } else {
            // Form is valid, process the data and save to the database
            $data = array(
                'nama_sekolah'   => $this->input->post('nama_sekolah'),
                'alamat_sekolah' => $this->input->post('alamat_sekolah'),
                'nip'            => $this->input->post('nip'),
                'email'          => $this->input->post('email'),
            );

            // Insert the data into the database using the model
            if ($this->pendaftar_model->insert($data)) {
                // Set success message and redirect to the list page (index)
                $this->session->set_flashdata('success', 'Pendaftaran berhasil!');
                redirect('pendaftar/index');
            } else {
                // Handle error
                $this->session->set_flashdata('error', 'Terjadi kesalahan. Silakan coba lagi.');
                redirect('pendaftar/daftar');
            }
        }
    }

	// public function acc ()
	// {
	// 	// Mengambil data POST
    //     $email_tujuan = "shintiadewi789@gmail.com";
    //     $subject = "coba aja nihh";
    //     $pesan = "mencoba lagi yang ke sekian kali";

    //     // Mengatur konfigurasi email
    //     $config = [
    //         'protocol'  => 'smtp',
    //         'smtp_host' => 'smtp.gmail.com',
    //         'smtp_port' => 465,
    //         'smtp_user' => 'hmmtesting76@gmail.com', // Ganti dengan email Gmail Anda
    //         'smtp_pass' => 'ncotczmurwcnjsgm',  // Ganti dengan password aplikasi
    //         'smtp_crypto' => 'ssl', // Gunakan 'tls' jika menggunakan port 587
    //         'mailtype'  => 'html',
    //         'charset'   => 'utf-8',
    //         'wordwrap'  => TRUE,
    //         'crlf'      => "\r\n",
    //         'newline'   => "\r\n"
    //     ];

    //     // Load library email dan konfigurasinya
    //     $this->load->library('email');
    //     $this->email->initialize($config);

    //     // Mengatur email
    //     $this->email->from('hmmtesting76@gmail.com', 'testing dari nana');
    //     $this->email->to($email_tujuan);
    //     $this->email->subject($subject);
    //     $this->email->message($pesan);

    //     // Mengirim email dan menampilkan hasil
    //     if ($this->email->send()) {
    //         echo 'Email terkirim';
    //     } else {
    //         $data = $this->email->print_debugger(['headers']);
    //         echo '<pre>' . print_r($data, true) . '</pre>';
    //     }
	// }

    public function acc($id) {
        // Load the model
        $this->load->model('pendaftar_model');
    
        // Fetch the record by ID
        $record = $this->pendaftar_model->get_by_id($id);
    
        if ($record) {
            $email_tujuan = $record->email; // Extract email from the record
            $subject = "coba aja nihh";
            $pesan = "mencoba lagi yang ke sekian kali";
    
            // Configure email settings
            $config = [
                'protocol'  => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'hmmtesting76@gmail.com', // Replace with your Gmail address
                'smtp_pass' => 'ncotczmurwcnjsgm', // Replace with your application-specific password
                'smtp_crypto' => 'ssl', // Use 'tls' if using port 587
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'wordwrap'  => TRUE,
                'crlf'      => "\r\n",
                'newline'   => "\r\n"
            ];
    
            // Load email library and configure
            $this->load->library('email');
            $this->email->initialize($config);
    
            // Set up the email
            $this->email->from('hmmtesting76@gmail.com', 'testing dari nana');
            $this->email->to($email_tujuan);
            $this->email->subject($subject);
            $this->email->message($pesan);
    
            // Send the email and display result
            if ($this->email->send()) {
                $this->session->set_flashdata('message', ['message' => 'Email terkirim']);
            } else {
                $data = $this->email->print_debugger(['headers']);
                $this->session->set_flashdata('message', ['message' => '<pre>' . print_r($data, true) . '</pre>']);
            }
        } else {
            $this->session->set_flashdata('message', ['message' => 'Record not found']);
        }
    
        // Redirect back to the list page
        redirect('pendaftar');
    }
    
}
