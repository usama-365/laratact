@extends('layout.main')

@section('title', 'Card')

@section('content')
    <div class="container">
        <div class="my-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title bg-primary text-white ">
                            <h2>@yield('card_title', 'Card Title')</h2>
                        </div>
                        <div class="card-body bg-light p-0 pl-4 pt-4">
                            @yield('card_body')
                        </div>
                        <div class="card-footer">
                            @yield('card_footer')
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection

