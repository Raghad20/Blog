@extends('layouts.master')
@section('content')
    <div class="padding">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h2> form</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>
                <div class="box-divider m-0"></div>
                <div class="box-body">
                    <form role="form" method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 form-control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" placeholder="Post Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 form-control-label">Post Category</label>
                            <div class="col-sm-10">
                                <select name="category_id" class="form-control c-select">
                                    <option hidden>select one...</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 form-control-label">Post Content</label>
                            <div class="col-sm-10">
                                <textarea name="content" class="form-control" rows="2"></textarea>
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
                                <button type="submit" class="btn blue">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
