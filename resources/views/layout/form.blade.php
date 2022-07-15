@extends('layout.card')

@section('title', 'Create Contact')

@section('card_title', 'Add New Contact')

@section('card_body')
    <form action="{{ route('contacts.index') }}" id="contact-form" method="post" class="pr-3">
        @csrf
        <div class="row form-group">
            <div class="col-3"><label for="fname"></label>First Name</div>
            <div class="col-9">
                <input type="text" name="first_name" id="fname"
                       class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
                @error('first_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3"><label for="lname"></label>Last Name</div>
            <div class="col-9">
                <input type="text" name="last_name" id="lname" value="{{ old('last_name') }}"
                       class="form-control @error('last_name') is-invalid @enderror">
                @error('last_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3"><label for="email"></label>Email</div>
            <div class="col-9">
                <input type="email" name="email" id="email"
                       class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3"><label for="phone"></label>Phone</div>
            <div class="col-9">
                <input type="tel" name="phone" id="phone"
                       class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3"><label for="address"></label>Address</div>
            <div class="col-9">
                <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row form-group">
            <div class="col-3"><label for="company_id"></label>Company</div>
            <div class="col-9">
                <select name="company_id" id="company_id" class="form-control @error('company_id') is-invalid @enderror">
                    @foreach($companies as $id => $name)
                        <option {{ $id == old('company_id') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                @error('company_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </form>
@endsection

@section('card_footer')
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            <input type="submit" value="Save" form="contact-form" class="btn btn-primary">
            <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </div>
@endsection
