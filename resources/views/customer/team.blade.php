@extends('customer.layouts.main')

@section('title')
    insBroker| Комманда
@endsection

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{route('customer.home')}}">Главная</a></li>
                    <li>Комманда</li>
                </ol>
                <h2>НАША КОММАНДА</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        @include('customer.components.team')

    </main><!-- End #main -->
@endsection
