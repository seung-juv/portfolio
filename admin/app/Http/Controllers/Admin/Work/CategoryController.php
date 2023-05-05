<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\WorkCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(Request $request)
    {
        $this->with('work_categories', DB::table('work_categories')->paginate($request->limit ?? 10));
        return $this->view('admin.work.category.index');
    }

    public function getCreate(Request $request)
    {
        return $this->view('admin.work.category.create');
    }

    public function postCreate(Request $request)
    {
        WorkCategory::create([
            'category' => $request->category,
            'name' => $request->name,
        ]);
        return redirect('/admin/work/category');
    }

    public function getDetail(Request $request)
    {
        $this->with('work_category', WorkCategory::find($request->category));
        return $this->view('admin.work.category.detail');
    }

    public function getUpdate(Request $request)
    {
        $this->with('work_category', WorkCategory::find($request->category));
        return $this->view('admin.work.category.update');
    }

    public function postUpdate(Request $request)
    {
        WorkCategory::find($request->category)->update([
            'category' => $request->category,
            'name' => $request->name,
        ]);
        return redirect('/admin/work/category/detail/' . $request->category);
    }

    public function getDelete(Request $request)
    {
        WorkCategory::find($request->category)->delete();
        return redirect('/admin/work/category');
    }
}
