<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Common extends CI_Controller 
{

    public function __construct() {
        parent::__construct();
    }

    public function get_image_to_display(){
        header('Content-Type: image/png');
        $image_name = image_name_decode($_GET['img']);
        readfile($image_name);
    }


}