@extends('layouts.admin')

@section('title')
    작품타입 수정
@endsection

@section('content')
    <form method="post" class="card shadow p-3">
        @csrf
        <div class="form-group">
            <label for="type">타입</label>
            <input type="text"
                   name="type"
                   id="type"
                   class="form-control"
                   placeholder="카테고리 타입"
                   value="{{ $work_type->type }}">
        </div>
        <div class="form-group">
            <label for="name">이름</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control"
                   placeholder="이름"
                   value="{{ $work_type->name }}">
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ secure_asset('/admin/work/type') }}" class="btn btn-link mr-2">목록</a>
            <button type="submit" class="btn btn-primary">저장</button>
        </div>
    </form>
@endsection
