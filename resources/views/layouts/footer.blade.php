    <footer class="bg-dark py-4 text-white text-center">
        <div class="container">
            <p class="m-0">© 2022 All rights reserved.</p>
        </div>
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @if (Request::is('answer*'))
        <script>
            $("#to-result").hide();
            $(function() {
                $(".quiz-answer").click(function(event) {
                    answer = $(this).val();
                    url = location.href + "/advance";
                    $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            url: url,
                            dataType: "json",
                            data: {
                                quiz_answer: answer,
                            },
                        })
                        // Ajaxリクエストが成功した場合
                        .done(function(data) {
                            $("#definite-article").text("");
                            $("#quiz-sentense").text("");
                            if (data["current"] <= data["total"]) {
                                if (data['definite-article']) {
                                    $("#definite-article").text(data['definite-article'] + " ");
                                }
                                $("#phrase").text(data["phrase"]);
                                $("#quiz-sentense").text(data["sentense"]);
                                $("#current").text(data["current"]);
                            } else {
                                $("#btn-area").hide();
                                $("#to-result").show();
                            }
                        })
                        // Ajaxリクエストが失敗した場合
                        .fail(function(XMLHttpRequest, textStatus, errorThrown) {
                            alert(errorThrown);
                        });
                });
            });
        </script>
    @endif
    </body>

    </html>
