@extends('layouts.master')
@section('content')
    <div class="col-sm-3">
    </div>
    <a href="{{ route('categories.create') }}">
        <div class="d-flex justify-content-end">
            <button class="md-btn md-fab m-b-sm blue"><i class="material-icons md-24" >&#xe145;</i></button>
        </div>
    </a>

    <div class="padding">
    <div class="col-sm-6">

        <div class="box">
            <div class="box-header">
                <h2>Categories</h2>

            </div>
            <table class="table table-striped b-t">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <div class="d-inline-flex">
                        <a href="{{route('categories.edit',$category)}}" class="text-primary">Edit</a>|
                            <form onsubmit="return confirm('Are you sure?')" method="POST" action="{{route('categories.destroy',$category)}}">
                                @method('DELETE')
                                @csrf
                       <button  class="text-danger btn-link" type="submit">Delete</button>
                        </form>
                        </div>
                    </td>

                </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>
    <div class="col-sm-3">

    </div>
@endsection
