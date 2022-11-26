@extends('layout')

@section('content')
    <div class="card p-4 bg-secondary">
        <form method="POST" class="form card-body" action="{{ route('guitars.store') }}">
            @csrf
            <div>
                <label for="name" class="text-body">Guitar Name</label>
                <input name="name" id="name" type="text" class="input-group-text w-100" value="{{ old('name') }}">
                @error('name')
                    <div class="form-error alert alert-danger mt-3" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="brand" class="text-body">Brand</label>
                <input name="brand" id="brand" type="text" class="input-group-text w-100"
                    value="{{ old('brand') }}">
                @error('brand')
                    <div class="form-error alert alert-danger mt-3" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="year_made" class="text-body">Year Made</label>
                <input name="year_made" id="year_made" type="text" class="input-group-text w-100"
                    value="{{ old('year_made') }}">
                @error('year_made')
                    <div class="form-error alert alert-danger mt-3" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button class="mt-3 btn btn-primary w-100" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
