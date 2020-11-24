@extends('layouts.link')


@section('title', 'Add Link')

@section('content')
    <div class="container card mt-5">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row ">
            @foreach ($links as $link)
                <div class="link-card p-2 col-4" style="color: #757575;">
                    <div class="card border-secondary mb-3">
                        <div class="card-header">
                            @foreach(explode(" ",$link->description) as $key => $word)
                                @if ($key < 2)
                                    {{$word . ' '}}
                                @endif
                            @endforeach
                        </div>
                        <div class="card-body text-secondary">
                            <p class="card-text short-description">{{ \Illuminate\Support\Str::limit($link->description, 40, $end='...')   }}</p>
                            <p class="card-text long-description" style="display: none;">{{ $link->description }}</p>
                        </div>
                        <div class="icons card-footer" style="display: none;">
                            <a href="{{route('link.delete', $link) }}">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                </svg>
                            </a>
                            <a href="{{ $link->link }}" class="ml-3" target="_blank">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-up-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z"/>
                                    <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z"/>
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $links->links('vendor.pagination.bootstrap-4') }}
    </div>

@endsection
