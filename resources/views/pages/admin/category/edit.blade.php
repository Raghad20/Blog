@extends('layouts.master')
@section('content')
    <div class="padding">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h2> form</h2>
                </div>
                <div class="box-divider m-0"></div>
                <div class="box-body">
                    <form role="form" method="POST" action="{{route('categories.update',$category)}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 form-control-label">Category Name:</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{$category->name}}" class="form-control" name="name" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row m-t-md">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn blue">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
