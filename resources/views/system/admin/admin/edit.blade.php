@extends('system.layouts.app')
@section('content')
    <div class="container">
        <h1 class="border-bottom border-2 pb-3 mb-4">管理者 - 編集</h1>
        <div class="mb-3">
            <div class="text-end">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    削除
                </button>
            </div>

            <form action="{{ url('/system/admin/admin/edit' . $admin['id']) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-10 mb-3">
                        <label for="group_id" class="form-label">id</label>
                        <input type="text" id="id" name="id" class="form-control" value="{{ $admin['id'] }}" disabled>
                    </div>
                    <div class="col-10 mb-3">
                        <label for="user_id" class="form-label">ユーザID</label>
                        <input type="text" name="user_id" id="user_id" value="{{ $admin['user_id'] }}" class="form-control">
                    </div>
                    <div class="col-10 mb-3">
                        <label for="password" class="form-label">パスワード</label>
                        <input type="text" name="password" id="password" value="" class="form-control" placeholder="変更する場合は入力してください。">
                    </div>
                    <div class="col-10 mb-3">
                        <label for="name" class="form-label">名前</label>
                        <input type="text" name="name" id="name" value="{{ $admin['name'] }}" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $admin['id'] }}">

                <div class="text-center my-3">
                    <button type="submit" class="btn btn-lg btn-primary">保存</button>
                </div>

            </form>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteLabel">グループ:1を削除しますか。</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-danger">削除</button>
                </div>
            </div>
        </div>
    </div>
@endsection
