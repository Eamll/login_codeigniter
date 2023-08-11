<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $usersModel = new UsersModel();
        $loggedUserId= session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserId);
        $data = [
            'tittle'=>'Dashboard',
            "userInfo"=>$userInfo,
        ];
        return view('welcome_message',$data);
    }

    function profile(){
        $usersModel = new UsersModel();
        $loggedUserId= session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserId);
        $data = [
            'tittle'=>'Profile',
            "userInfo"=>$userInfo,
        ];
        return view('profile',$data);
    }
}