<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\Work;
use App\Models\WorkCategory;
use App\Models\WorkType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function get(Request $request)
    {
        $this->with('works', DB::table('works')->paginate($request->limit ?? 10));
        return $this->view('admin.work.work.index');
    }

    public function getCreate(Request $request)
    {
        $this->with('work_categories', WorkCategory::all());
        $this->with('work_types', WorkType::all());
        return $this->view('admin.work.work.create');
    }

    public function postCreate(Request $request)
    {
        $set = [
            'work_category_category' => $request->work_category_category,
            'work_type_type' => $request->work_type_type,
            'title' => $request->title,
            'description' => $request->description
        ];
        if ($request->hasFile('thumbnail')) {
            $client = new \GuzzleHttp\Client();
            $thumbnail_file = $request->file('thumbnail');
            $thumbnail = $client
                ->post('http://localhost:4100/api/storages', [
                    'multipart' => [
                        [
                            'name' => 'file',
                            'contents' => file_get_contents($thumbnail_file),
                            'filename' => $thumbnail_file->getClientOriginalName(),
                        ],
                    ],
                ])
                ->getBody()
                ->getContents();
            $set['thumbnail'] = json_decode($thumbnail)->uri;
        }
        Work::create($set);
        return redirect('/admin/work/work');
    }

    public function getDetail(Request $request)
    {
        $this->with('work', Work::find($request->id));
        $this->with('work_categories', WorkCategory::all());
        $this->with('work_types', WorkType::all());
        return $this->view('admin.work.work.detail');
    }

    public function getUpdate(Request $request)
    {
        $this->with('work', Work::find($request->id));
        $this->with('work_categories', WorkCategory::all());
        $this->with('work_types', WorkType::all());
        return $this->view('admin.work.work.update');
    }

    public function postUpdate(Request $request)
    {
        $set = [
            'work_category_category' => $request->work_category_category,
            'work_type_type' => $request->work_type_type,
            'title' => $request->title,
            'description' => $request->description,
        ];
        if ($request->hasFile('thumbnail')) {
            $client = new \GuzzleHttp\Client();
            $thumbnail_file = $request->file('thumbnail');
            $thumbnail = $client
                ->post('http://localhost:4100/api/storages', [
                    'multipart' => [
                        [
                            'name' => 'file',
                            'contents' => file_get_contents($thumbnail_file),
                            'filename' => $thumbnail_file->getClientOriginalName(),
                        ],
                    ],
                ])
                ->getBody()
                ->getContents();
            $set['thumbnail'] = json_decode($thumbnail)->uri;
        }
        Work::find($request->id)->update($set);
        return redirect('/admin/work/work/detail/' . $request->id);
    }

    public function getDelete(Request $request)
    {
        Work::find($request->id)->delete();
        return redirect('/admin/work/work');
    }

}
