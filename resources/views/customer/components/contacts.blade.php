<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Наш Адрес</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Напишите нам</h3>
                    <p>contact@example.com</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Позвоните нам</h3>
                    <p>+1 5589 55488 55</p>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validate"></div>
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Ваш e-mail"
                                   data-rule="email" data-msg="Please enter a valid email"/>
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема обращения"
                               data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                                  data-msg="Please write something for us" placeholder="Текст обращения"></textarea>
                        <div class="validate"> Error!!!</div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Пересылаю ...</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Мы получили Ваше сообщение. Спасибо!</div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Отправить</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->


