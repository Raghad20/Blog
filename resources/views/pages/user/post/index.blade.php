@extends('layouts.master')
@section('content')
    <div class="col-sm-3">
    </div>
    <div class="padding">
        @foreach($posts as $post)
            <div class="col-xs-6 col-sm-12 col-md-6">
                <div class="box">
                    <div class="p-a">
                        <div class="d-flex align-items-center">
                            <p><a class="text-md ">{{$post->user->name}}</a> </p>
                        </div>
                        <div class="text-muted m-b-xs">
                            <span class="m-r">{{$post->created_at->diffForHumans()}}</span>
                            <a href><i class="fa fa-comment-o"></i> {{$post->comments->count()}}</a>
                        </div>
                        <div class="m-b h-2x"><a href class="_800">{{$post->title}}</a></div>
                        <p class="h-3x">{{$post->content}}</p>
                        @if($post->image!=null)
                            <img src="{{ Storage::URL($post->image) }}" class="w-full">
                        @endif

                        <hr class="black">
                        <div class="box-header">


                            <h3 class="text-success">Comments </h3>
                        </div>

                        @foreach($post->comments as $comment)
                            <div class="box-body">
                                <div class="streamline m-b m-l">
                                    <div class="sl-item">
                                        <div class="sl-content">

                                            <div class="sl-author">
                                                <a href>{{$comment->user->name}}</a>
                                            </div>
                                            <div class="sl-date text-muted">{{$comment->created_at->diffForHumans()}}</div>
                                            <div>
                                                <p>{{$comment->content}}</p>
                                            </div>


                                        </div>
                                    </div>


                                </div>
                            </div>
                        @endforeach
                        <div class="box-footer b-t">
                            <form method="POST" action="{{route('comment.store',$post->id)}}">
                                @csrf
                                <div class="input-group">
                                    <input type="text"  name="content" class="form-control" placeholder="Say something">
                                    <span class="input-group-btn">
					            <button class="btn blue b-a no-shadow" type="submit">SEND</button>
					          </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>


@endsection
