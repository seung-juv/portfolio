@extends('layouts.admin')

@section('title')
    툴 생성
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
                   placeholder="이름">
        </div>
        <div class="form-group">
            <label for="icon">아이콘</label>
            <input type="file"
                   name="icon"
                   id="icon"
                   class="form-control"
                   placeholder="썸네일">
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ secure_asset('/admin/work/tool') }}" class="btn btn-link mr-2">목록</a>
            <button type="submit" class="btn btn-primary">저장</button>
        </div>
    </form>
@endsection
