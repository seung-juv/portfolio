@extends('layouts.admin')

@section('title')
    작품카테고리 수정
@endsection

@section('content')
    <form method="post" class="card shadow p-3">
        @csrf
        <div class="form-group">
            <label for="category">카테고리</label>
            <input type="text"
                   name="category"
                   id="category"
                   class="form-control"
                   placeholder="카테고리"
                   value="{{ $work_category->category }}">
        </div>
        <div class="form-group">
            <label for="name">이름</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control"
                   placeholder="이름"
                   value="{{ $work_category->name }}">
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ secure_asset('/admin/work/category') }}" class="btn btn-link mr-2">목록</a>
            <button type="submit" class="btn btn-primary">저장</button>
        </div>
    </form>
@endsection
