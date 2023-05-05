@extends('layouts.admin')

@section('title')
    배경관리
@endsection

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-end align-items-center">
            <a href="{{ secure_asset('/admin/work/background/create') }}" class="btn btn-primary">
                등록
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <colgroup>
                        <col width="75"/>
                        <col/>
                        <col width="250"/>
                        <col width="250"/>
                        <col width="150"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="text-center">번호</th>
                        <th class="text-center">이름</th>
                        <th class="text-center">생성날짜</th>
                        <th class="text-center">수정날짜</th>
                        <th class="text-center">액션</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($work_backgrounds as $key => $value)
                        <tr>
                            <td class="text-center align-middle">{{ $work_backgrounds->perPage() * ($work_backgrounds->currentPage() - 1) + $loop->index + 1 }}</td>
                            <td class="align-middle">
                                <a href="{{ secure_asset('/admin/work/background/detail/'.$value->id) }}">{{ $value->name }}</a>
                            </td>
                            <td class="text-center align-middle">{{ $value->created_at }}</td>
                            <td class="text-center align-middle">{{ $value->updated_at }}</td>
                            <td class="text-center">
                                <a href="{{ secure_asset('/admin/work/background/update/'.$value->id) }}"
                                   class="btn btn-link btn-sm">
                                    수정
                                </a>
                                <a href="{{ secure_asset('/admin/work/background/delete/'.$value->id) }}"
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
                        <li class="page-item{{ $work_backgrounds->onFirstPage() ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $work_backgrounds->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&lang;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        @for($i = $work_backgrounds->currentPage(); $i <= $work_backgrounds->lastPage(); $i++)
                            <li class="page-item"><a class="page-link" href="{{ $work_backgrounds->url($i) }}">{{ $i }}</a></li>
                        @endfor
                        <li class="page-item{{ $work_backgrounds->hasMorePages() ? '' : ' disabled' }}">
                            <a class="page-link" href="{{ $work_backgrounds->nextPageUrl() }}" aria-label="Next">
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
