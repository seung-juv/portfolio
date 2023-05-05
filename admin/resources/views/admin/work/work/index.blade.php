@extends('layouts.admin')

@section('title')
    작품
@endsection

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-end align-items-center">
            <a href="{{ secure_asset('/admin/work/work/create') }}" class="btn btn-primary">
                등록
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <colgroup>
                        <col width="75"/>
                        <col width="150"/>
                        <col width="150"/>
                        <col/>
                        <col width="250"/>
                        <col width="250"/>
                        <col width="150"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="text-center">번호</th>
                        <th class="text-center">카테고리</th>
                        <th class="text-center">타입</th>
                        <th class="text-center">제목</th>
                        <th class="text-center">생성날짜</th>
                        <th class="text-center">수정날짜</th>
                        <th class="text-center">액션</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($works as $key => $value)
                        <tr>
                            <td class="text-center align-middle">{{ $works->perPage() * ($works->currentPage() - 1) + $loop->index + 1 }}</td>
                            <td class="text-center align-middle">{{ $value->work_category_category }}</td>
                            <td class="text-center align-middle">{{ $value->work_type_type }}</td>
                            <td class="align-middle">
                                <a href="{{ secure_asset('/admin/work/work/detail/'.$value->id) }}">{{ $value->title }}</a>
                            </td>
                            <td class="text-center align-middle">{{ $value->created_at }}</td>
                            <td class="text-center align-middle">{{ $value->updated_at }}</td>
                            <td class="text-center">
                                <a href="{{ secure_asset('/admin/work/work/update/'.$value->id) }}"
                                   class="btn btn-link btn-sm">
                                    수정
                                </a>
                                <a href="{{ secure_asset('/admin/work/work/delete/'.$value->id) }}"
                                   class="btn btn-danger btn-sm">
                                    삭제
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center m-0">
                        <li class="page-item{{ $works->onFirstPage() ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $works->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&lang;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        @for($i = $works->currentPage(); $i <= $works->lastPage(); $i++)
                            <li class="page-item"><a class="page-link" href="{{ $works->url($i) }}">{{ $i }}</a></li>
                        @endfor
                        <li class="page-item{{ $works->hasMorePages() ? '' : ' disabled' }}">
                            <a class="page-link" href="{{ $works->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">&rang;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
