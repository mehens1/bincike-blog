@extends('layout.app')


@section('page-content')

    <h1>{{ $data['page_name'] }}</h1>
    <div class="bodytext">
        <div class="h3" lang="h3">
            <p>
                {{ $data['body_text'] }}
            </p>
        </div>
    </div>

@endsection
