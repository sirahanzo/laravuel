<?php

namespace App\Http\Controllers;

use App\Http\Requests\NetworkRequest;
use App\Http\Requests\SiteInfoRequest;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SettingController extends Controller {


    /**
     * Update network table
     *
     * @param NetworkRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function saveNetwork(NetworkRequest $request)
    {
        DB::table('network')->update($request->except('_token'));

        return response('Success', 200);

    }


    /**
     * Update site_info table
     *
     * @param SiteInfoRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function saveSiteInfo(SiteInfoRequest $request)
    {
        DB::table('site_info')->update($request->except('_token'));

        return response('Success', 200);
    }

}
