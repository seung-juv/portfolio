@extends('layouts.admin')

@section('title')
    작품 상세
@endsection

@section('content')
    <div class="card shadow p-3">
        <div class="form-group">
            <label for="work_category_code">카테고리</label>
            <select name="work_category"
                    id="work_category"
                    class="form-control"
                    placeholder="카테고리"
                    readonly
                    disabled>
                @foreach($work_categories as $key => $value)
                    <option
                        value="{{ $value->category }}"{{ $work->work_category_category === $value->category ? ' selected' : '' }}>
                        [{{ $value->category }}] - {{ $value->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="work_type">타입</label>
            <select name="work_type"
                    id="work_type"
                    class="form-control"
                    placeholder="타입"
                    readonly
                    disabled>
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
                   readonly
                   disabled
                   value="{{ $work->title }}">
        </div>
        <div class="form-group">
            <label for="description">설명</label>
            <input type="text"
                   name="description"
                   id="description"
                   class="form-control"
                   placeholder="설명"
                   readonly
                   disabled
                   value="{{ $work->description }}">
        </div>
        <div class="form-group">
            <label for="thumbnail">썸네일</label>
            <img src="{{ $work->thumbnail }}" style="display: block; width: 300px; height: 300px; object-fit: contain;"/>
        </div>
        <div class="d-flex justify-content-end align-items-center gap-1">
            <a href="{{ secure_asset('/admin/work/work') }}" class="btn btn-link mr-2">목록</a>
            <a href="{{ secure_asset('/admin/work/work/update/'.$work->id) }}"
               class="btn btn-primary mr-2">수정</a>
            <a href="{{ secure_asset('/admin/work/work/delete/'.$work->id) }}"
               class="btn btn-danger">삭제</a>
        </div>
    </div>
@endsection
