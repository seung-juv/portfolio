<?php

namespace App\Http\Controllers\Admin\Config;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(Request $request)
    {
        return $this->view('admin.config.default.index');
    }

    public function post(Request $request)
    {
        Config::firstOrCreate()->update([
            'app_lang' => $request->app_lang,
            'app_title' => $request->app_title,
            'app_description' => $request->app_description,
            'app_copyright' => $request->app_copyright,
            'app_og_locale' => $request->app_og_locale,
            'app_og_title' => $request->app_og_title,
            'app_og_description' => $request->app_og_description,
            'app_og_site_name' => $request->app_og_site_name,
            'app_og_type' => $request->app_og_type,
            'app_og_image' => $request->app_og_image,
            'github_url' => $request->github_url,
            'facebook_url' => $request->facebook_url,
            'instagram_url' => $request->instagram_url,
            'google_url' => $request->google_url,
        ]);
        return redirect('/admin/config/default');
    }
}
