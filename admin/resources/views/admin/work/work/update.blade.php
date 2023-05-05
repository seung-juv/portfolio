@extends('layouts.admin')

@section('title')
    작품 수정
@endsection

@section('content')
    <form method="post" class="card shadow p-3" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="work_category_category">카테고리</label>
            <select name="work_category_category"
                    id="work_category_category"
                    class="form-control"
                    placeholder="카테고리">
                @foreach($work_categories as $key => $value)
                    <option
                        value="{{ $value->category }}"{{ $work->work_category_category === $value->category ? ' selected' : '' }}>
                        [{{ $value->category }}] - {{ $value->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="work_type_type">타입</label>
            <select name="work_type_type"
                    id="work_type_type"
                    class="form-control"
                    placeholder="타입">
                @foreach($work_types as $key => $value)
                    <option
                        value="{{ $value->type }}"{{ $work->work_type_type === $value->type ? ' selected' : '' }}>
                        [{{ $value->type }}] - {{ $value->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">제목</label>
            <input type="text"
                   name="title"
                   id="title"
                   class="form-control"
                   placeholder="제목"
                   value="{{ $work->title }}">
        </div>
        <div class="form-group">
            <label for="description">설명</label>
            <input type="text"
                   name="description"
                   id="description"
                   class="form-control"
                   placeholder="설명"
                   value="{{ $work->description }}">
        </div>
        <div class="form-group">
            <label for="thumbnail">썸네일</label>
            <input type="file"
                   name="thumbnail"
                   id="thumbnail"
                   class="form-control"
                   placeholder="썸네일"
                   value="{{ $work->thumbnail }}">
            <img src="{{ $work->thumbnail }}" style="width: 300px; height: 300px; object-fit: contain;"/>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ secure_asset('/admin/work/work') }}" class="btn btn-link mr-2">목록</a>
            <button type="submit" class="btn btn-primary">저장</button>
        </div>
    </form>
@endsection
