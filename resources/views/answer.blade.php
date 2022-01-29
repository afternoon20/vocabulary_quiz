@extends('layouts.body')

@section('content')
    <div class="row d-flex  justify-content-center">
        <div class="col-md-6 rounded-2 p-2 my-5">
            <div class="mb-3">
                <h1 class="bg-light p-2 rounded-1"><span id="definite-article">@if ($quiz->QUIZ_DEFINITE_ARTICLE) {{ $quiz->QUIZ_DEFINITE_ARTICLE . ' ' }} @endif</span><span id="phrase">{{ $quiz->QUIZ_PHRASE }}</span></h1>
            </div>
            <div class="mb-3">
                <p id="quiz-sentense" class="bg-light p-2 rounded-1">{{ $quiz->QUIZ_SENTENSE }}</p>
            </div>
            <div class="mb-3">
            </div>
            <div id="btn-area" class="row mt-5">
                <div class=" col-6">
                    <button type="submit" value="0" class="quiz-answer btn btn-danger w-100">不正解</button>
                </div>
                <div class="col-6">
                    <button type="submit" value="1" class="quiz-answer btn btn-primary w-100">正解</button>
                </div>
            </div>
            <div id="to-result" class="row mt-5">
                <form action="" method="POST">
                    <div class="col">
                        <button type="submit" value="0" class="quiz-answer btn btn-success w-100">結果を見る</button>
                    </div>
                </form>
            </div>
            <div class="text-end mt-2">
                <span id="current">{{ session('current') }}</span> / <span id="total">{{ session('total') }}</span>
            </div>
        </div>
    </div>
@endsection
