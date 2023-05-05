@extends('layouts.admin')

@section('title')
    작품타입 상세
@endsection

@section('content')
    <div class="card shadow p-3">
        <div class="form-group">
            <label for="type">타입</label>
            <input type="text"
                   name="type"
                   id="type"
                   class="form-control"
                   placeholder="카테고리 타입"
                   readonly
                   value="{{ $work_type->type }}">
        </div>
        <div class="form-group">
            <label for="name">이름</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control"
                   placeholder="이름"
                   readonly
                   value="{{ $work_type->name }}">
        </div>
        <div class="d-flex justify-content-end align-items-center gap-1">
            <a href="{{ secure_asset('/admin/work/type') }}" class="btn btn-link mr-2">목록</a>
            <a href="{{ secure_asset('/admin/work/type/update/'.$work_type->type) }}"
               class="btn btn-primary mr-2">수정</a>
            <a href="{{ secure_asset('/admin/work/type/delete/'.$work_type->type) }}"
               class="btn btn-danger">삭제</a>
        </div>
    </div>
@endsection
