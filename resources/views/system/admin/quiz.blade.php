@extends('system.layouts.app')

@section('content')
    <div class="col pt-3">
        <div class="container">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                グループ:2 を編集しました。
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <h1 class="border-bottom border-2 pb-3 mb-4">問題一覧</h1>
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
                                        <th class="text-center" scope="col">ID</th>
                                        <th scope="col">定冠詞</th>
                                        <th scope="col">単語</th>
                                        <th scope="col">意味</th>
                                        <th scope="col">例文</th>
                                        <th scope="col">例文意味</th>
                                        <th scope="col" style="width: 150px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>der</td>
                                        <td>Vater</td>
                                        <td>[男] 父</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>das</td>
                                        <td>Geschwister</td>
                                        <td>[複] 兄弟姉妹</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>nachher</td>
                                        <td>Geschwister</td>
                                        <td>[副] あとで</td>
                                        <td>Bis nachher!"</td>
                                        <td>(別れ際に)またあとで</td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>allgemain</td>
                                        <td>[形] 一般的な</td>
                                        <td>[副] あとで</td>
                                        <td>Das ist allgemain bekannt."</td>
                                        <td>それは一般的に知られている</td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>der</td>
                                        <td>Vater</td>
                                        <td>[男] 父</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>das</td>
                                        <td>Geschwister</td>
                                        <td>[複] 兄弟姉妹</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td>nachher</td>
                                        <td>Geschwister</td>
                                        <td>[副] あとで</td>
                                        <td>Bis nachher!"</td>
                                        <td>(別れ際に)またあとで</td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td>allgemain</td>
                                        <td>[形] 一般的な</td>
                                        <td>[副] あとで</td>
                                        <td>Das ist allgemain bekannt."</td>
                                        <td>それは一般的に知られている</td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td>der</td>
                                        <td>Vater</td>
                                        <td>[男] 父</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td>das</td>
                                        <td>Geschwister</td>
                                        <td>[複] 兄弟姉妹</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>der</td>
                                        <td>Vater</td>
                                        <td>[男] 父</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>das</td>
                                        <td>Geschwister</td>
                                        <td>[複] 兄弟姉妹</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>nachher</td>
                                        <td>Geschwister</td>
                                        <td>[副] あとで</td>
                                        <td>Bis nachher!"</td>
                                        <td>(別れ際に)またあとで</td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>allgemain</td>
                                        <td>[形] 一般的な</td>
                                        <td>[副] あとで</td>
                                        <td>Das ist allgemain bekannt."</td>
                                        <td>それは一般的に知られている</td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>der</td>
                                        <td>Vater</td>
                                        <td>[男] 父</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>das</td>
                                        <td>Geschwister</td>
                                        <td>[複] 兄弟姉妹</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td>nachher</td>
                                        <td>Geschwister</td>
                                        <td>[副] あとで</td>
                                        <td>Bis nachher!"</td>
                                        <td>(別れ際に)またあとで</td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td>allgemain</td>
                                        <td>[形] 一般的な</td>
                                        <td>[副] あとで</td>
                                        <td>Das ist allgemain bekannt."</td>
                                        <td>それは一般的に知られている</td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td>der</td>
                                        <td>Vater</td>
                                        <td>[男] 父</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td>das</td>
                                        <td>Geschwister</td>
                                        <td>[複] 兄弟姉妹</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="text-dark rounded-2 py-1 px-3">編集</a><span>/</span><a
                                                href="#" class="text-dark rounded-2 py-1 px-3" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">削除</a>
                                        </td>
                                    </tr>
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
