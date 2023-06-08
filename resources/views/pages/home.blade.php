@extends('layout.app')

@section('titlePage') 
    DC Comics | Home
@endsection


@section('contentHome') 








    <section id="sectionStore">
        <div class="container py-5">
            <ul class="d-flex justify-content-around align-items-center">
                <li>
                    <a href="#" class="d-flex justify-content-center align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="icon1">
                        <span class="ms-3 text-uppercase">digital comics</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-center align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="icon2">
                        <span class="ms-3 text-uppercase">dc merchandise</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-center align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="icon3">
                        <span class="ms-3 text-uppercase">subscription</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-center align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="icon4">
                        <span class="ms-3 text-uppercase">comic shop locator</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-center align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="icon5">
                        <span class="ms-3 text-uppercase">dcpowervisa</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection