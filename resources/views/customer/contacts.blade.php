@extends('customer.layouts.main')

@section('title')
    insBroker| Контакты
@endsection

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{route('customer.home')}}">Главная</a></li>
                    <li>Контакты</li>
                </ol>
                <h2>Контактная информация</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        @include('customer.components.contacts')

    </main><!-- End #main -->
@endsection
