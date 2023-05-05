@extends('layouts.admin')

@section('title')
    배경 수정
@endsection

@section('content')
    <form method="post" class="card shadow p-3" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">이름</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control"
                   placeholder="이름"
                   value="{{ $work_background->name }}">
        </div>
        <div class="form-group">
            <label for="background">이미지</label>
            <input type="file"
                   name="background"
                   id="background"
                   class="form-control"
                   placeholder="썸네일"
                   value="{{ $work_background->background }}">
            <img src="{{ $work_background->background }}" style="width: 300px; height: 300px; object-fit: contain;"/>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ secure_asset('/admin/work/background') }}" class="btn btn-link mr-2">목록</a>
            <button type="submit" class="btn btn-primary">저장</button>
        </div>
    </form>
@endsection
