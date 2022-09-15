<?php
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE) {
         $this->view('template/header', $vars, $return);
         $this->view($template_name, $vars, $return);
         $this->view('template/footer', $vars, $return);
    }
}