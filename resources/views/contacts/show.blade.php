@extends('layout.card')

@section('title', 'Contact Details')

@section('card_title', 'Contact Details')

@section('card_body')
    @foreach($attributes as $attribute => $value)
        <div class="row pb-4">
            <div class="col-3">{{ $attribute }}</div>
            <div class="col-9 text-secondary">{{ $value  }}</div>
        </div>
    @endforeach
@endsection

@section('card_footer')
    <div class="text-center">
        <a href="" class="btn btn-primary">Edit</a>
        <a href="" class="btn btn-outline-danger">Delete</a>
        <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Cancel</a>
    </div>
@endsection

@section('')
