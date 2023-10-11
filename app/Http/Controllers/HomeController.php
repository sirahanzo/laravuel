<?php

namespace App\Http\Controllers;

use App\Models\Baudrate;
use App\Models\Network;
use App\Models\SiteInfo;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller {


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        //return view('home');
        //return view('dashboard');
        return view('layouts.master');

    }


    /**
     * Get all device information
     *
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function info(Request $request)
    {
        $data = [
            'site_info' => SiteInfo::first(),
            'network'   => Network::first(),
            'baudrate'   => Baudrate::all(),
        ];

        return response($data);

    }


}
