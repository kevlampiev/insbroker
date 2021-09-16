@extends('customer.layouts.main')

@section('title')
    insBroker| О нас
@endsection


@section('content')

{{--    @include('customer.components.hero')--}}


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{route('customer.home')}}">Главная</a></li>
                    <li>О нас</li>
                </ol>
                <h2>О НАС</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        @include('customer.components.about')
        @include('customer.components.counts')
        @include('customer.components.clients')
        @include('customer.components.testimonials')


    </main><!-- End #main -->
@endsection
