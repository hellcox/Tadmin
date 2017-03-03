<?php
namespace Manage\Controller;
use Think\Controller;

class IndexController extends CommonController {

    public function index(){

    	$psd = '123';
    	$pass = get_pass($psd);
    	// dump($pass);

        $this->display();
    }

}