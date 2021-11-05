@extends('customer.layouts.main')


@section('title')
    insBroker| Главная
@endsection


@section('content')

    @include('customer.components.hero')


    <main id="main">

        @include('customer.components.featured')

        @include('customer.components.about')
        @include('customer.components.services')
        @include('customer.components.clients')

    </main><!-- End #main -->
@endsection
