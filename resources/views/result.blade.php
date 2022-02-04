@extends('layouts.body')

@section('content')
    <div class="container my-4">
        <h1 class="border-bottom border-2 pb-3 mb-4">回答結果</h1>
        <div class="quiz">
            <h2 class="text-center py-2">8 / 20問正解！</h2>
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered raunded-2 text-nowrap">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th class="text-center" scope="col"></th>
                                    <th scope="col">ID</th>
                                    <th scope="col">定冠詞</th>
                                    <th scope="col">単語</th>
                                    <th scope="col">意味</th>
                                    <th scope="col">例文</th>
                                    <th scope="col">例文意味</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($quizzes); $i++)
                                    <tr>
                                        <td class="text-center"><span class="{{ $isCorrectList[$i] ? 'text-primary' : 'text-danger' }}">{{ $isCorrectList[$i] ? '○' : '×' }}</span></td>
                                        <td>{{ $quizzes[$i]['QUIZ_ID'] }}</td>
                                        <td>{{ $quizzes[$i]['QUIZ_DEFINITE_ARTICLE'] }}</td>
                                        <td>{{ $quizzes[$i]['QUIZ_PHRASE'] }}</td>
                                        <td>{{ $quizzes[$i]['QUIZ_PHRASE_MEAN'] }}</td>
                                        <td>{{ $quizzes[$i]['QUIZ_SENTENSE'] }}</td>
                                        <td>{{ $quizzes[$i]['QUIZ_SENTENSE_MEAN'] }}</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="text-start mt-4">
                <a href="{{ url('/') }}" class="btn btn-success text-white">トップに戻る</a>
            </div>
        </div>
    </div>
@endsection
