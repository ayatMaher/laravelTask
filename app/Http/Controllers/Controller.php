<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests,DispatchesJobs, ValidatesRequests;
    public function index(){
        $data['services']=Service::query()->get();
        $data['clients']=Client::query()->get();
        return view('index',$data);
    }
    public function about(){
        return view('about');
    }
}
