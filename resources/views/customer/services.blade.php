@extends('customer.layouts.main')

@section('title')
    insBroker| Услуги
@endsection

@section('content')

    {{--    @include('customer.components.hero')--}}


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{route('customer.home')}}">Главная</a></li>
                    <li>Услуги</li>
                </ol>
                <h2>УСЛУГИ</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        @include('customer.components.services')
        @include('customer.components.skills')


    </main><!-- End #main -->
@endsection
