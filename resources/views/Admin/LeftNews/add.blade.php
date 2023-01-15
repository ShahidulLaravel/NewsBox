@extends('layouts.master')


@section('content')

<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="card mb-2">
            <div class="card-header">
                <h3>Latest News</h3>
                @if(session('error'))
                <strong class="text-danger">{{session('error')}}</strong>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('insert.left')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="">News Headline</label>
                        <input type="text" class="form-control" name="news_headline">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Headline Image</label>
                        <input type="file" class="form-control" name="photo">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Left News </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- popular news --}}
         <div class="card mt-4">
            <div class="card-header">
                <h3>Popular News</h3>
                @if(session('error'))
                <strong class="text-danger">{{session('error')}}</strong>
                @endif
                @if(session('success'))
                <strong class="text-success">{{session('success')}}</strong>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('popular.news')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="mb-3">
                        <label class="form-label" for="">Reporter Name</label>
                        <input type="text" class="form-control" name="author">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">News Headline</label>
                        <input type="text" class="form-control" name="popular_headline">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Headline Image</label>
                        <input type="file" class="form-control" name="popular_photo">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add popular News </button>
                    </div>
                </form>
            </div>
        </div>

        
        {{-- international news --}}
         <div class="card mt-4">
            <div class="card-header">
                <h3>International News</h3>
                @if(session('error'))
                <strong class="text-danger">{{session('error')}}</strong>
                @endif
                @if(session('success_two'))
                <strong class="text-success">{{session('success_two')}}</strong>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('international.news')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="mb-3">
                        <label class="form-label" for="">Reporter Name</label>
                        <input type="text" class="form-control" name="author">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">News Headline</label>
                        <input type="text" class="form-control" name="inter_headline">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Headline Image</label>
                        <input type="file" class="form-control" name="inter_photo">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add International News </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- side news --}}
         <div class="card mt-4">
            <div class="card-header">
                <h3>Side News</h3>
                @if(session('error'))
                <strong class="text-danger">{{session('error')}}</strong>
                @endif
                @if(session('success_two'))
                <strong class="text-success">{{session('success_three')}}</strong>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('side.news')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label" for="">News Headline</label>
                        <input type="text" class="form-control" name="headline">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Headline Image</label>
                        <input type="file" class="form-control" name="photo">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Side News </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection