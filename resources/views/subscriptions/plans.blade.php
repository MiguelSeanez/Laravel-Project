@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pricing.css')}}">
@endpush
@section('jumbotron')
    @include('partials.jumbotron', [
        'title' => __("Suscribete ahora a uno de nuestros planes"),
        'icon' => 'globe'
    ])
@endsection

@section('content')
    <div class="container">
        <div class="pricing-table pricing-three-column row">
            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-bronze">
                    <h2>{{ __("MENSUAL")}}</h2>
                    <span>{{ __(":price / Mes", ['price' => '$250'])}}</span>                

                </div>
                <ul>
                    <li class="plan-feature">
                        {{ __("Acceso a todos los cursos")}}
                    </li>
                    <li class="plan-feature">
                        {{ __("Acceso a todos los archivos")}}
                    </li>
                    <li class="plan-feature"> 
                        @include('partials.stripe.form', [
                            "product" => [
                            "name" => __("Suscripcion"),
                            "description" => __("Mensual"),
                            "type" => "monthly",
                            "amount" => 25000.00 
                            ]
                        ])
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-silver">
                    <h2>{{ __("TRIMESTRAL")}}</h2>
                    <span>{{ __(":price / Mes", ['price' => '$600'])}}</span>                

                </div>
                <ul>
                    <li class="plan-feature">
                        {{ __("Acceso a todos los cursos")}}
                    </li>
                    <li class="plan-feature">
                        {{ __("Acceso a todos los archivos")}}
                    </li>
                    <li class="plan-feature"> 
                        @include('partials.stripe.form', [
                            "product" => [
                            "name" => __("Suscripcion"),
                            "description" => __("Trimestral"),
                            "type" => "quarterly",
                            "amount" => 60000.00 
                            ]
                        ])
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-gold">
                    <h2>{{ __("ANUAL")}}</h2>
                    <span>{{ __(":price / Mes", ['price' => '$1500'])}}</span>                

                </div>
                <ul>
                    <li class="plan-feature">
                        {{ __("Acceso a todos los cursos")}}
                    </li>
                    <li class="plan-feature">
                        {{ __("Acceso a todos los archivos")}}
                    </li>
                    <li class="plan-feature"> 
                        @include('partials.stripe.form', [
                            "product" => [
                            "name" => __("Suscripcion"),
                            "description" => __("Anual"),
                            "type" => "yeary",
                            "amount" => 150000.00 
                            ]
                        ])
                    </li>
                </ul>
            </div>

        </div>
    </div>

@endsection