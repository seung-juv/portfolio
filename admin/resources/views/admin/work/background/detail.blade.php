@extends('layouts.admin')

@section('title')
    배경 상세
@endsection

@section('content')
    <div class="card shadow p-3">
        <div class="form-group">
            <label for="name">이름</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control"
                   placeholder="이름"
                   readonly
                   value="{{ $work_background->name }}">
        </div>
        <div class="form-group">
            <p>이미지</p>
            <img src="{{ $work_background->background }}" style="width: 300px; height: 300px; object-fit: contain;"/>
        </div>
        <div class="d-flex justify-content-end align-items-center gap-1">
            <a href="{{ secure_asset('/admin/work/background') }}" class="btn btn-link mr-2">목록</a>
            <a href="{{ secure_asset('/admin/work/background/update/'.$work_background->id) }}"
               class="btn btn-primary mr-2">수정</a>
            <a href="{{ secure_asset('/admin/work/background/delete/'.$work_background->id) }}"
               class="btn btn-danger">삭제</a>
        </div>
    </div>
@endsection
