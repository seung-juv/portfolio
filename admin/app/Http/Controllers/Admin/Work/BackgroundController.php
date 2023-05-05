<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\WorkBackground;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackgroundController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(Request $request)
    {
        $this->with('work_backgrounds', DB::table('work_backgrounds')->paginate($request->limit ?? 10));
        return $this->view('admin.work.background.index');
    }

    public function getCreate(Request $request)
    {
        return $this->view('admin.work.background.create');
    }

    public function postCreate(Request $request)
    {
        $set = [
            'name' => $request->name,
        ];
        if ($request->hasFile('background')) {
            $client = new \GuzzleHttp\Client();
            $background_file = $request->file('background');
            $background = $client
                ->post('http://localhost:4100/api/storages', [
                    'multipart' => [
                        [
                            'name' => 'file',
                            'contents' => file_get_contents($background_file),
                            'filename' => $background_file->getClientOriginalName(),
                        ],
                    ],
                ])
                ->getBody()
                ->getContents();
            $set['background'] = json_decode($background)->uri;
        }
        WorkBackground::create($set);
        return redirect('/admin/work/background');
    }

    public function getDetail(Request $request)
    {
        $this->with('work_background', WorkBackground::find($request->id));
        return $this->view('admin.work.background.detail');
    }

    public function getUpdate(Request $request)
    {
        $this->with('work_background', WorkBackground::find($request->id));
        return $this->view('admin.work.background.update');
    }

    public function postUpdate(Request $request)
    {
        $set = [
            'name' => $request->name,
        ];
        if ($request->hasFile('background')) {
            $client = new \GuzzleHttp\Client();
            $background_file = $request->file('background');
            $background = $client
                ->post('http://localhost:4100/api/storages', [
                    'multipart' => [
                        [
                            'name' => 'file',
                            'contents' => file_get_contents($background_file),
                            'filename' => $background_file->getClientOriginalName(),
                        ],
                    ],
                ])
                ->getBody()
                ->getContents();
            $set['background'] = json_decode($background)->uri;
        }
        WorkBackground::find($request->id)->update($set);
        return redirect('/admin/work/background/detail/' . $request->id);
    }

    public function getDelete(Request $request)
    {
        WorkBackground::find($request->id)->delete();
        return redirect('/admin/work/background');
    }

}
