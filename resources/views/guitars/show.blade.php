@extends('layout')

@section('content')
    <div class="card p-4 bg-secondary">
        <div class="card-body">
            <h3>
                {{ $guitar->name }}
            </h3>
            <ul  class="list-unstyled">
                <li>
                    Made by : {{ $guitar->brand }}
                </li>
                <li>
                    Year Made : {{ $guitar->year_made }}
                </li>
            </ul>
            <div>
                <a href="{{ route('guitars.index') }}" class="mt-3 btn btn-primary w-100" type="submit">
                    {{__('Show Table')}}</a>
            </div>
        </div>
    </div>
@endsection
