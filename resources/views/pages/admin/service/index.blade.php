@extends('layouts.master')
@section('content')
    <div class="col-sm-3">
    </div>
    @if(auth()->user()->is_admin)
    <a href="{{ route('services.create') }}">
        <div class="d-flex justify-content-end">
            <button class="md-btn md-fab m-b-sm white"><i class="material-icons md-24" >&#xe145;</i></button>
        </div>
    </a>
    @endif
    <div class="padding">
    <div class="col-md-6 col-xl-9">
        <div class="box indigo-900 lt">
            <div class="box-header b-b">
                <h2>LEARN MORE ABOUT OUR SERVICES</h2>
            </div>
            <ul class="list">
                @foreach($services as $service)
                <li class="list-item">
                    @if(auth()->user()->is_admin)
                    <div class="d-flex justify-content-end">
                        <form onsubmit="return confirm('Are you sure?')" method="POST" action="{{route('services.destroy',$service)}}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-icon btn-rounded btn-danger mx-2"><i class="fa fa-trash"></i></button>
                        </form>
                        <a href="{{route('services.edit',$service)}}"> <button class="btn btn-icon btn-rounded btn-info">
                                <i class="fa fa-pencil"></i>
                            </button></a>
                    </div>
                    @endif
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
