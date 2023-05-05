<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\WorkType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function get(Request $request)
    {
        $this->with('work_types', DB::table('work_types')->paginate($request->limit ?? 10));
        return $this->view('admin.work.type.index');
    }

    public function getCreate(Request $request)
    {
        return $this->view('admin.work.type.create');
    }

    public function postCreate(Request $request)
    {
        WorkType::create([
            'type' => $request->type,
            'name' => $request->name,
        ]);
        return redirect('/admin/work/type');
    }

    public function getDetail(Request $request)
    {
        $this->with('work_type', WorkType::find($request->type));
        return $this->view('admin.work.type.detail');
    }

    public function getUpdate(Request $request)
    {
        $this->with('work_type', WorkType::find($request->type));
        return $this->view('admin.work.type.update');
    }

    public function postUpdate(Request $request)
    {
        WorkType::find($request->route()->parameter('type'))->update([
            'type' => $request->type,
            'name' => $request->name,
        ]);
        return redirect('/admin/work/type/detail/' . $request->type);
    }

    public function getDelete(Request $request)
    {
        WorkType::find($request->type)->delete();
        return redirect('/admin/work/type');
    }

}
