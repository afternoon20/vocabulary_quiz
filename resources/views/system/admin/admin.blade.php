@extends('system.layouts.app')
@section('content')
    <div class="col pt-3">
        <div class="container">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                グループ:2 を編集しました。
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <h1 class="border-bottom border-2 pb-3 mb-4">品詞一覧</h1>
            <div class="text-end my-3">
                <a href="create.html" class="btn btn-primary">新規作成</a>
            </div>
            <form action="#" method="post">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered raunded-2 text-nowrap">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th class="text-center" scope="col" style="width: 100px;">ID</th>
                                        <th scope="col">ユーザID</th>
                                        <th scope="col">名前</th>
                                        <th scope="col" style="width: 150px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                        <tr>
                                            <td class="text-center">{{ $admin->id }}</td>
                                            <td>{{ $admin->user_id }}</td>
                                            <td>{{ $admin->name }}</td>
                                            <td>
                                                <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal" data-bs-target="#deleteModal">削除</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-end mr-4">
                            40 / 100件
                        </div>
                    </div>

                </div>

            </form>
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
