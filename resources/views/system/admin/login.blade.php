@extends('system.layouts.app')

@section('content')
        <div class="row">
            <div class="col-8 col-md-4 offset-md-4 offset-2 rounded-2 bg-light p-2 my-5 shadow d-flex justify-content-center">
                <div class="border-3">
                    <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" name="user_id" value="" class="form-control" id="id">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">パスワード</label>
                            <input type="password" name="password" value="" class="form-control" id="password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">ログイン</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    
@endsection
    

