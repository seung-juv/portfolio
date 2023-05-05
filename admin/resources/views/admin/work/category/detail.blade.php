@extends('layouts.admin')

@section('title')
    작품카테고리 상세
@endsection

@section('content')
    <div class="card shadow p-3">
        <div class="form-group">
            <label for="category">카테고리</label>
            <input type="text"
                   name="category"
                   id="category"
                   class="form-control"
                   placeholder="카테고리"
                   readonly
                   value="{{ $work_category->category }}">
        </div>
        <div class="form-group">
            <label for="name">이름</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control"
                   placeholder="이름"
                   readonly
                   value="{{ $work_category->name }}">
        </div>
        <div class="d-flex justify-content-end align-items-center gap-1">
            <a href="{{ secure_asset('/admin/work/category') }}" class="btn btn-link mr-2">목록</a>
            <a href="{{ secure_asset('/admin/work/category/update/'.$work_category->category) }}"
               class="btn btn-primary mr-2">수정</a>
            <a href="{{ secure_asset('/admin/work/category/delete/'.$work_category->category) }}"
               class="btn btn-danger">삭제</a>
        </div>
    </div>
@endsection
