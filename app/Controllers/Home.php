<?php

namespace App\Controllers;

use App\Models\UserModel;   
use App\Models\ServiceModel;    

class Home extends BaseController{
    
    public function index(){
        $servicesModel = new ServiceModel();
        $data['services'] = $servicesModel->activeServices()->paginate(3);
        
        $pager = $servicesModel->pager;
        $pager->setPath('home');

        $data['pager'] = $pager;

        echo view('header_view');
        echo view('home_view', $data);
        echo view('footer_logout_view');
    }
}
