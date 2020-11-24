@extends('layouts.link')

@section('title', 'Add Link')

@section('content')
    <!-- Default form contact -->
    <div class="container">
        <div class="card mt-5">

            <h4 class="card-header info-color white-text text-center py-4">
                <strong>Add Link</strong>
            </h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form class="p-5" style="color: #757575;"  method="POST" action="{{ route('link.store') }}">
            @csrf
            <!-- Link -->
                <div class="form-group mb-4">
                    <input type="text" id="link" name="link" class="form-control" placeholder="Link" value="{{old('link')}}">
                    <small class="text-danger" style="display: none;" id="link_error">Entrez le lien</small>
                </div>

                <!-- Description -->
                <div class="form-group mb-4">
                    <textarea class="form-control rounded-0" id="description" name="description" rows="3" placeholder="Description">{{old('description')}}</textarea>
                    <small class="text-danger" style="display: none;" id="description_error">Entrez la description de la source</small>

                </div>

                <!-- Send button -->
                <button class="btn btn-info btn-block" type="submit" id="save-link">Save</button>

            </form>
            <!-- Default form contact -->
        </div>

    </div>
@endsection
