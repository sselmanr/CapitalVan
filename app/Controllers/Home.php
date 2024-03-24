<?php

namespace App\Controllers;
use App\Models\UserModel;   
class Home extends BaseController{
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->admins()->paginate(5);

        $pager = $userModel->pager;
        $pager->setPath('home');

        $data['pager'] = $pager;

        echo view('header_view');
        echo view('home_view', $data);
        echo view('footer_logout_view');
    }
}
