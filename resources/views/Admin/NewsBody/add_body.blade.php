@extends('layouts.master')


@section('content')

<div class="row">
    <div class="col-lg-9 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Add Single News Body</h4>
                @if (session('success'))
                    <strong class="text-success">{{session('success')}}</strong>         
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('insert.single_news')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Main Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Featured Image</label>
                         <input type="file" name="feature_image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Detail News</label>
                        <textarea class="form-control" name="desp" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Inside Image</label>
                        <input type="file" name="inside_image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Add News</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection