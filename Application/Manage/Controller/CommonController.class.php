<?php
namespace Manage\Controller;
use Think\Controller;

class CommonController extends Controller {

    public function _initialize(){

        // if(!array_key_exists('user', $_SESSION)) {
        //     $this->redirect('Account/login');
        // }
    }
}