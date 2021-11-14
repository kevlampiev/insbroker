@extends('customer.layouts.main')


@section('title')
    iBro| Главная
@endsection


@section('content')

    <section id="request" class="request">
        <br>
        <hr>
        <div class="container">Внесите данные владельца трaнспортного средства
            <div class="row text-center">
                <div class="col-lg-8 offset-lg-2">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col form-group">
                                <input type="text" name="patronymic" class="form-control" id="patronymic"
                                       placeholder="Ваше отчество" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col form-group">
                                <input type="text" name="surname" class="form-control" id="surname"
                                       placeholder="Ваше фамилия" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" name="phone" class="form-control" id="phone"
                                       placeholder="Ваше телефон"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Ваш e-mail"
                                       data-rule="email" data-msg="Please enter a valid email"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col form-group">
                                <input type="text" class="form-control" name="INN" id="INN" placeholder="Ваш ИНН"
                                       data-rule="INN" data-msg="Please enter a valid INN"/>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4 form-group">
                                <select class="form-control">
                                    <option selected>Выберите тип страховки</option>
                                    <option value="1">ОСАГО</option>
                                    <option value="2">КАСКО</option>
                                    <option value="3">Полный фарш</option>
                                </select>
                            </div>
                            <div class="col-8 form-group">
                                <input type="file" class="form-control" name="pts">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="first-date">Дата начала страховки</label>
                                <input type="date" class="form-control" name="first-date" id="first-date"
                                       data-rule="date"
                                       data-msg=""/>
                                <div class="validate"></div>
                            </div>
                            <div class="col form-group">
                                <label for="last-date">Дата окончания страховки</label>
                                <input type="date" class="form-control" name="last-date" id="last-date" data-rule="date"
                                       data-msg=""/>
                                <div class="validate"></div>
                            </div>

                        </div>
                        {{-- <button type="button" class="btn btn-light" onclick="changeVisible()">Add frinchise</button> --}}
                        @if (1)
                            <div class="form-check form-check-inline form-row">
                                <input class="form-check-input" type="checkbox" value="" id="choose-franchise">
                                <label class="form-check-input mb-1" for="choose-franchise">
                                    Использовать франшизу
                                </label>
                            </div>
                            <div class="col-4 form-group">
                                <input type="number" class="form-control" min="1000" step="500" name="franchise-value"
                                       value="1000">
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Перечень рисков"></textarea>
                                <div class="validate"></div>
                            </div>
                        @endif

                        @if ($errors->has('message'))
                            <div class="mb-3">
                                <div class="loading">Пересылаю ...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Мы получили Ваше сообщение. Спасибо!</div>
                            </div>
                        @endif

                        <div class="text-center">
                            <button type="submit">Отправить</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <hr>
        <br>
    </section>

    {{--<script>--}}
    {{--    let isVisible = false--}}
    {{--    changeVisible(e)--}}
    {{--    {--}}
    {{--        console.log(isVisible);--}}
    {{--        isVisible = !isVisible--}}
    {{--    }--}}
    {{--</script>--}}

@endsection
