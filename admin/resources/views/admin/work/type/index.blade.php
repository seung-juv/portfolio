@extends('layouts.admin')

@section('title')
    작품타입
@endsection

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-end align-items-center">
            <a href="{{ secure_asset('/admin/work/type/create') }}" class="btn btn-primary">
                등록
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <colgroup>
                        <col width="150"/>
                        <col/>
                        <col width="250"/>
                        <col width="250"/>
                        <col width="150"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="text-center">타입</th>
                        <th class="text-center">이름</th>
                        <th class="text-center">생성날짜</th>
                        <th class="text-center">수정날짜</th>
                        <th class="text-center">액션</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($work_types as $key => $value)
                        <tr>
                            <td class="text-center align-middle">{{ $value->type }}</td>
                            <td class="align-middle">
                                <a href="{{ secure_asset('/admin/work/type/detail/'.$value->type) }}">{{ $value->name }}</a>
                            </td>
                            <td class="text-center align-middle">{{ $value->created_at }}</td>
                            <td class="text-center align-middle">{{ $value->updated_at }}</td>
                            <td class="text-center">
                                <a href="{{ secure_asset('/admin/work/type/update/'.$value->type) }}"
                                   class="btn btn-link btn-sm">
                                    수정
                                </a>
                                <a href="{{ secure_asset('/admin/work/type/delete/'.$value->type) }}"
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
                        <li class="page-item{{ $work_types->onFirstPage() ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $work_types->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&lang;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        @for($i = $work_types->currentPage(); $i <= $work_types->lastPage(); $i++)
                            <li class="page-item"><a class="page-link" href="{{ $work_types->url($i) }}">{{ $i }}</a></li>
                        @endfor
                        <li class="page-item{{ $work_types->hasMorePages() ? '' : ' disabled' }}">
                            <a class="page-link" href="{{ $work_types->nextPageUrl() }}" aria-label="Next">
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
