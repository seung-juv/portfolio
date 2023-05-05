<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\WorkTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function get(Request $request)
    {
        $this->with('work_tools', DB::table('work_tools')->paginate($request->limit ?? 10));
        return $this->view('admin.work.tool.index');
    }

    public function getCreate(Request $request)
    {
        return $this->view('admin.work.tool.create');
    }

    public function postCreate(Request $request)
    {
        $set = [
            'name' => $request->name,
        ];
        if ($request->hasFile('icon')) {
            $client = new \GuzzleHttp\Client();
            $icon_file = $request->file('icon');
            $icon = $client
                ->post('http://localhost:4100/api/storages', [
                    'multipart' => [
                        [
                            'name' => 'file',
                            'contents' => file_get_contents($icon_file),
                            'filename' => $icon_file->getClientOriginalName(),
                        ],
                    ],
                ])
                ->getBody()
                ->getContents();
            $set['icon'] = json_decode($icon)->uri;
        }
        WorkTool::create($set);
        return redirect('/admin/work/tool');
    }

    public function getDetail(Request $request)
    {
        $this->with('work_tool', WorkTool::find($request->id));
        return $this->view('admin.work.tool.detail');
    }

    public function getUpdate(Request $request)
    {
        $this->with('work_tools', WorkTool::find($request->id));
        return $this->view('admin.work.tool.update');
    }

    public function postUpdate(Request $request)
    {
        $set = [
            'name' => $request->name,
        ];
        if ($request->hasFile('icon')) {
            $client = new \GuzzleHttp\Client();
            $icon_file = $request->file('icon');
            $icon = $client
                ->post('http://localhost:4100/api/storages', [
                    'multipart' => [
                        [
                            'name' => 'file',
                            'contents' => file_get_contents($icon_file),
                            'filename' => $icon_file->getClientOriginalName(),
                        ],
                    ],
                ])
                ->getBody()
                ->getContents();
            $set['icon'] = json_decode($icon)->uri;
        }
        WorkTool::find($request->id)->update($set);
        return redirect('/admin/work/tool/detail/' . $request->id);
    }

    public function getDelete(Request $request)
    {
        WorkTool::find($request->id)->delete();
        return redirect('/admin/work/tool');
    }

}
