@extends('layouts.body')

@section('content')
    <div class="container pt-3">
        <h1 class="border-bottom border-2 pb-3 mb-3">問題一覧</h1>
        <div class="quiz">
            <form action="{{ url('/answer') }}" method="POST">
                @csrf
                <div class="scroll" style="overflow-y: scroll; max-height: 70vh;">
                    <div class="row p-2" style="scroll-behavior: smooth;">
                        <div class="col">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">全て</th>
                                        <th scope="col">グループID</th>
                                        <th scope="col">グループ名</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < count($groups); $i++)
                                        @if ($i % 2 == 0)
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox" name="quiz_group_id[]" value="{{ $groups[$i]->GROUP_ID }}"></th>
                                                <td>{{ $groups[$i]->GROUP_ID }}</td>
                                                <td>{{ $groups[$i]->GROUP_NAME }}</td>
                                            </tr>
                                        @endif

                                    @endfor
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">全て</th>
                                        <th scope="col">グループID</th>
                                        <th scope="col">グループ名</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < count($groups); $i++)
                                        @if ($i % 2 != 0)
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox" name="quiz_group_id[]" value="{{ $groups[$i]->GROUP_ID }}"></th>
                                                <td>{{ $groups[$i]->GROUP_ID }}</td>
                                                <td>{{ $groups[$i]->GROUP_NAME }}</td>
                                            </tr>
                                        @endif
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-6 w-100">
                        <div class="col-5">
                            <span>ランダム出題</span>
                            <select class="form-select form-select-sm w-25 my-2" name="ramdom_quiz" aria-label=".form-select-sm">
                                <option value="" selected>出題数</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center my-5">
                    <button type="submit" class="btn btn-lg btn-primary">スタート</button>
                </div>

            </form>
        </div>
    </div>
@endsection
