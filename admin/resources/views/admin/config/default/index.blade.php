@extends('layouts.admin')

@section('title')
    기본설정
@endsection

@section('content')
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="app_lang">앱 언어</label>
            <input type="text"
                   name="app_lang"
                   id="app_lang"
                   class="form-control"
                   placeholder="앱 언어"
                   value="{{ $config['app_lang'] }}">
        </div>
        <div class="form-group">
            <label for="app_title">앱 제목</label>
            <input type="text"
                   name="app_title"
                   id="app_title"
                   class="form-control"
                   placeholder="앱 제목"
                   value="{{ $config['app_title'] }}">
        </div>
        <div class="form-group">
            <label for="app_description">앱 설명</label>
            <input type="text"
                   name="app_description"
                   id="app_description"
                   class="form-control"
                   placeholder="앱 설명"
                   value="{{ $config['app_description'] }}">
        </div>
        <div class="form-group">
            <label for="app_copyright">앱 카피라이트</label>
            <input type="text"
                   name="app_copyright"
                   id="app_copyright"
                   class="form-control"
                   placeholder="앱 카피라이트"
                   value="{{ $config['app_copyright'] }}">
        </div>
        <div class="dropdown-divider"></div>
        <div class="form-group">
            <label for="app_og_locale">Open Graph 언어</label>
            <input type="text"
                   name="app_og_locale"
                   id="app_og_locale"
                   class="form-control"
                   placeholder="Open Graph 언어"
                   value="{{ $config['app_og_locale'] }}">
        </div>
        <div class="form-group">
            <label for="app_og_title">Open Graph 제목</label>
            <input type="text"
                   name="app_og_title"
                   id="app_og_title"
                   class="form-control"
                   placeholder="Open Graph 제목"
                   value="{{ $config['app_og_title'] }}">
        </div>
        <div class="form-group">
            <label for="app_og_description">Open Graph 설명</label>
            <input type="text"
                   name="app_og_description"
                   id="app_og_description"
                   class="form-control"
                   placeholder="Open Graph 설명"
                   value="{{ $config['app_og_description'] }}">
        </div>
        <div class="form-group">
            <label for="app_og_site_name">Open Graph 사이트 이름</label>
            <input type="text"
                   name="app_og_site_name"
                   id="app_og_site_name"
                   class="form-control"
                   placeholder="Open Graph 사이트 이름"
                   value="{{ $config['app_og_site_name'] }}">
        </div>
        <div class="form-group">
            <label for="app_og_type">Open Graph 타입</label>
            <input type="text"
                   name="app_og_type"
                   id="app_og_type"
                   class="form-control"
                   placeholder="Open Graph 타입"
                   value="{{ $config['app_og_type'] }}">
        </div>
        <div class="form-group">
            <label for="app_og_image">Open Graph 이미지</label>
            <input type="file"
                   name="app_og_image"
                   id="app_og_image"
                   class="form-control"
                   placeholder="Open Graph 이미지"
                   value="{{ $config['app_og_image'] }}">
        </div>
        <div class="dropdown-divider"></div>
        <div class="form-group">
            <label for="github_url">깃허브 주소</label>
            <input type="text"
                   name="github_url"
                   id="github_url"
                   class="form-control"
                   placeholder="깃허브 주소"
                   value="{{ $config['github_url'] }}">
        </div>
        <div class="form-group">
            <label for="facebook_url">페이스북 주소</label>
            <input type="text"
                   name="facebook_url"
                   id="facebook_url"
                   class="form-control"
                   placeholder="페이스북 주소"
                   value="{{ $config['facebook_url'] }}">
        </div>
        <div class="form-group">
            <label for="instagram_url">인스타그램 주소</label>
            <input type="text"
                   name="instagram_url"
                   id="instagram_url"
                   class="form-control"
                   placeholder="인스타그램 주소"
                   value="{{ $config['instagram_url'] }}">
        </div>
        <div class="form-group">
            <label for="google_url">구글 주소</label>
            <input type="text"
                   name="google_url"
                   id="google_url"
                   class="form-control"
                   placeholder="구글 주소"
                   value="{{ $config['google_url'] }}">
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <button type="submit" class="btn btn-primary">저장</button>
        </div>
    </form>
@endsection
