<?php


class mail extends CI_Model{
    //put your code here
    public function send_email($data,$email_tmplt)
    {
        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['from'],$data['admin_name']);
                $this->email->to($data['to']);
                $this->email->subject($data['sub']);
                $body=  $this->load->view('mailscript/'.$email_tmplt,$data,true);
                echo $body;
                exit();
                $this->email->message($body);
                $this->email->send();
                $this->email->clear();
                
    }
            
}

?>
