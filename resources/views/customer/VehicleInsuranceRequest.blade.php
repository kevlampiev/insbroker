@extends('customer.layouts.main')


@section('title')
    iBro| Главная
@endsection


@section('content')
<main id="main">
    <section id="request" class="request">
        <div class="container mt-2">
            <h2 class="text-center text-decoration-underline">Запрос на страхование техники</h2>
            <h4 class="text-center mt-3">Внесите данные владельца трaнспортного средства</h4>
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
                        <h4 class="mt-3">Ваши контактрые данные для направления предложений</h4>
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
                        <h4 class="mt-3">Параметры страховки</h4>
                        <div class="form-row mb-5">
                            <img src="https://picsum.photos/150/150/?image=3" class="rounded float-start" alt="...">
                            {{-- <img
                                @if($vehicle->img_file)
                                src="{{asset(config('paths.vehicles.get','storage/img/vehicles/').$vehicle->img_file)}}" class="card-img-top" alt="..."
                                @else
                                src="{{asset('storage/img/no_image_found.jpeg')}}" class="card-img-top" alt="..."
                                @endif
                            id="img-viewer"> --}}
                            <div class="col form-check">
                                <input class="form-check-input" type="checkbox" value="" id="osago">
                                <label class="form-check-label" for="osago">
                                    ОСАГО
                                </label>
                            </div>
                            <div class="col form-check">
                                <input class="form-check-input" type="checkbox" onchange="changeVisible()" value="" id="kasko">
                                <label class="form-check-label" for="kasko">
                                    КАСКО
                                </label>
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
                        <div class="addition-features" style="display: none;" id="addition">
                            <label for="franchise-value">Укажите размер франшизы</label>
                            <div class="col-4 form-group ml-0 p-0">
                                <input type="number" class="form-control" id="franchise-value" min="1000" step="500" name="franchise-value"
                                       value="1000">
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Перечень рисков"></textarea>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-danger">Отправить</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>



    <script>
    let checkbox = document.getElementById('kasko');
    checkbox.addEventListener('change', function changeVisible() {
        if (this.checked) {
            document.getElementById('addition').style.display = "block";
        } else {
            document.getElementById('addition').style.display = "none";
        }
    });


    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
            $('#img-viewer').attr('src', e.target.result);
            $('#pts_tmp_path').attr('value', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputGroupFile01").change(function() {
        readURL(this);
    });

    </script>
@endsection
