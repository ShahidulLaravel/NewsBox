@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-8 m-auto">
         {{-- news category --}}
         <div class="card mt-4">
            <div class="card-header">
                <h3>Add News Category</h3>
                @if(session('error'))
                <strong class="text-danger">{{session('error')}}</strong>
                @endif
                @if(session('success_two'))
                <strong class="text-success">{{session('success_two')}}</strong>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('category.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="">Category Name</label>
                        <input type="text" class="form-control" name="category_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Category Image</label>
                        <input type="file" class="form-control" name="category_image">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection