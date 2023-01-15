@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="card mb-2">
            <div class="card-header">
                <h3>Add Breaking News</h3>
                @if(session('error'))
                <strong class="text-danger">{{session('error')}}</strong>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('insert.breaking')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Breaking News</label>
                        <input type="text" class="form-control" name="breaking_news">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <div class="col-lg-8 m-auto">
        <div class="card mt-3">
            <div class="card-header">
                <h3>Show Breaking News</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>News Head</th>
                    </tr>
                    @forelse ($all_news_show as $key=> $news)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$news->breaking_news}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center text-danger">No News Found Yet</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>

@endsection