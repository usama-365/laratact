@extends('layout.main')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header card-title bg-primary text-white">
                <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Contacts</h2>
                    <div class="ml-auto"><a href="{{ route('contacts.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add
                            New</a></div>
                </div>
            </div>
            <div class="card-body bg-light">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="ml-auto d-flex">
                            <select class="custom-select" id="filter_company_id" name="company_id">
                                @if($companies)
                                    @foreach($companies as $id => $name)
                                        <option {{ $id == request('company_id') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <div class="input-group ml-2">
                                <input type="text" placeholder="Search..." aria-label="Search..." class="form-control">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-outline-secondary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if(session('message'))
                <div class="alert alert-success mt-3">{{ session('message') }}</div>
                @endif

                <table class="table-striped table table-hover mt-3 bg-white">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $index => $contact)
                        <tr>
                            <td>{{ $index +  $contacts->firstItem() }}</td>
                            <td>{{ $contact->first_name }}</td>
                            <td>{{ $contact->last_name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->company->name }}</td>
                            <td>
                                <a href="{{ route('contacts.show', $contact->id) }}"
                                   class="btn btn-sm btn-outline-primary rounded-circle" title="View"><i
                                        class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-sm btn-outline-secondary rounded-circle" title="Edit"><i
                                        class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-sm btn-outline-danger rounded-circle" title="Delete"><i
                                        class="fa fa-close"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $contacts->appends(request()->only('company_id'))->links() }}
            </div>
        </div>
    </div>
@endsection
