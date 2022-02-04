@extends('system.layouts.app')

@section('content')
    <div class="container">
        <h1 class="border-bottom border-2 pb-3 mb-4">問題 - 編集</h1>
        <div class="mb-3">
            <div class="text-end">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    削除
                </button>
            </div>

            <form action="{{ url('/system/admin/quiz/' . $group['GROUP_ID']) }}" method="POST">

                @method('PUT')

                @csrf
                <div class="row">
                    <div class="col-10 mb-3">
                        <label for="group_id" class="form-label">グループ名</label>
                        <input type="text" id="group_id" class="form-control" value={{ $group['GROUP_NAME'] }} placeholder="空欄の場合は日付が登録されます">
                    </div>
                    <div class="col-10 mb-3">
                        <label for="note" class="form-label">備考</label>
                        <input type="text" id="note" value="{{ $group['GROUP_NOTE'] }}" class="form-control">
                    </div>

                    <div class="col-10 mb-3">
                        <label for="note" class="form-label">ステータス</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="GROUP_STATUS" value="0" id="GROUP_STATUS1" {{ $group['GROUP_STATUS'] == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="GROUP_STATUS1">
                                無効
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="GROUP_STATUS" value="1" id="GROUP_STATUS2" {{ $group['GROUP_STATUS'] == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="GROUP_STATUS2">
                                有効
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <label for="quiz" class="form-label">問題</label>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered raunded-2">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th class="text-center" scope="col">ID</th>
                                        <th scope="col">品詞</th>
                                        <th scope="col">冠詞</th>
                                        <th scope="col">単語</th>
                                        <th scope="col">意味</th>
                                        <th scope="col">例文</th>
                                        <th scope="col">例文意味</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i <= 20; $i++)
                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <input type="hidden" name='QUIZ_ID[]' value="{{ $quizzes[$i]['QUIZ_ID'] }}">
                                            <td>
                                                <select id="quiz_parts_of_speech{{ $i }}" class="form-control" name='QUIZ_PARTS_OF_SPEECH[]' aria-label="Default select example">
                                                    @foreach ($masterList['parts_of_speeches'] as $partsOfSpeech)
                                                        <option value="{{ $partsOfSpeech['PARTS_OF_SPEECH_ID'] }}" {{ $partsOfSpeech['PARTS_OF_SPEECH_ID'] == $quizzes[$i]['QUIZ_PARTS_OF_SPEECH'] ? 'selected' : '' }}>{{ $partsOfSpeech['PARTS_OF_SPEECH_NAME'] }}</option>
                                                    @endforeach
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </td>
                                            <td><input type="text" id="quiz_definite_article{{ $i }}" class="form-control" name='QUIZ_DEFINITE_ARTICLE[]' value="{{ $quizzes[$i]['QUIZ_DEFINITE_ARTICLE'] }}"></td>
                                            <td><input type="text" id="quiz_phrase{{ $i }}" class="form-control" name='QUIZ_PHRASE[]' value="{{ $quizzes[$i]['QUIZ_PHRASE'] }}"></td>
                                            <td><input type="text" id="quiz_phrase_mean{{ $i }}" class="form-control" name='QUIZ_PHRASE_MEAN[]' value="{{ $quizzes[$i]['QUIZ_PHRASE_MEAN'] }}"></td>
                                            <td><input type="text" id="quiz_sentense{{ $i }}" class="form-control" name='QUIZ_SENTENSE[]' value="{{ $quizzes[$i]['QUIZ_SENTENSE'] }}"></td>
                                            <td><input type="text" id="quiz_sentense_mean{{ $i }}" class="form-control" name='QUIZ_SENTENSE_MEAN[]' value="{{ $quizzes[$i]['QUIZ_SENTENSE_MEAN'] }}"></td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center my-3">
                            <button type="submit" class="btn btn-lg btn-primary">保存</button>
                        </div>
                    </div>

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
