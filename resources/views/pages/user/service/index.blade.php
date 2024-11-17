@extends('layouts.master')
@section('content')
    <div class="col-sm-3">
    </div>
    <div class="padding">
        <div class="col-md-6 col-xl-9">
            <div class="box indigo-900 lt">
                <div class="box-header b-b">
                    <h2>LEARN MORE ABOUT OUR SERVICES</h2>
                </div>
                <ul class="list">
                    @foreach($services as $service)
                        <li class="list-item">
                            <div class="list-body">
                                <h6>{{$service->title}}</h6>
                                <p>{{$service->description}} </p>
                                <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> {{$service->created_at->diffForHumans()}}</small>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection
