@extends('layout.main')

@section('content')
    <div class="container">
        <div class="my-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title bg-primary text-white ">
                            <h2>Contact Details</h2>
                        </div>
                        <div class="card-body bg-light p-0 pl-4 pt-4">
                            @foreach($attributes as $attribute => $value)
                                <div class="row pb-4">
                                    <div class="col-3">{{ $attribute }}</div>
                                    <div class="col-9 text-secondary">{{ $value  }}</div>
                                </div>

                            @endforeach
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-outline-danger">Delete</a>
                                <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection

