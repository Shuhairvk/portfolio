<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function send()
    {
        if ($this->input->method() !== 'post') {
            show_404();
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim|max_length[100]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required|trim|max_length[2000]');

        if (!$this->form_validation->run()) {
            echo json_encode(array('status' => false, 'message' => 'Please fill all fields correctly.'));
            return;
        }

        $this->load->library('email');
        $this->email->from('no-reply@yourdomain.com', 'Portfolio');
        $this->email->reply_to($this->input->post('email', true), $this->input->post('name', true));
        $this->email->to('your@email.com');
        $this->email->subject('Portfolio message from ' . $this->input->post('name', true));
        $this->email->message($this->input->post('message', true));

        $ok = $this->email->send();

        echo json_encode(array(
            'status'  => (bool) $ok,
            'message' => $ok ? 'Message sent, thanks!' : 'Could not send. Try again later.'
        ));
    }
}
