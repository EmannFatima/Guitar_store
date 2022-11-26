@extends('layout')

@section('content')
    <div class="card p-4 bg-secondary w-25">
        <div class="card-body">
            @if (count($guitars) > 0)
                @foreach ($guitars as $guitar)
                    <div>
                        <ul class="list-unstyled">
                            <li>
                                Made by : {{ $guitar->brand }}
                            </li>
                            <li>
                                Year Made : {{ $guitar->year_made }}
                                <form action="{{ route('guitars.destroy', ['guitar' => $guitar->id]) }}" method="post">
                                    <button class="bg-secondary" type="submit" id="list">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('guitars.edit', ['guitar' => $guitar->id]) }}">
                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endforeach
                <div>
                    <a href="{{ route('guitars.create') }}" class="mt-3 btn btn-primary w-100">
                        {{ __('Add') }}</a>
                </div>
            @else
                <h2>
                    {{ __(' There are no guitar!!') }}
                </h2>
                <div>
                    <a href="{{ route('guitars.create') }}" class="mt-3 btn btn-primary w-100">
                        {{ __('Add') }}</a>
                </div>
            @endif
        </div>
    </div>
@endsection
@push('js')
    <script>
        function remove(id) {
            var x = document.getElementById("list");

        }
    </script>
@endpush
