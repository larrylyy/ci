<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blog
 *
 * @author yuyong.li
 * 2012-5-17 15:18:40
 */
class Blog extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        echo 'hello world from blog.php';
    }
}

//end of script