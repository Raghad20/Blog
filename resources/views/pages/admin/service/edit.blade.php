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
                    <form role="form" method="POST" action="{{route('services.update',$service)}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 form-control-label">Services Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" placeholder="Service Title" value="{{$service->title}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 form-control-label">Service Description</label>
                            <div class="col-sm-10">
                                <input type="text" name="description"  value="{{$service->description}}" class="form-control" rows="2">
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
@endsection
