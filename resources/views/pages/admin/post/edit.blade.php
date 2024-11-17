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
                    <form role="form" enctype="multipart/form-data" method="POST" action="{{route('posts.update',$post)}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 form-control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{$post->title}}" class="form-control" name="title" placeholder="Post Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 form-control-label">Select</label>
                            <div class="col-sm-10">
                                <select name="category_id" class="form-control c-select" >
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 form-control-label">Post Content</label>
                            <div class="col-sm-10">
                                <input type="text" name="content"  value="{{$post->content}}" class="form-control" rows="2">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-2 form-control-label">Post Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="image"  class="form-control" accept=".jpeg,.png,.jpg">
                            </div>
                        </div>
                        <div class="form-group row m-t-md">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn blue">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
