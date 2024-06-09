@extends('master')
@section('title')
    Home Page
@endsection

@section('body')
    {{--    Blog section--}}
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{asset($blog['image'])}}" alt="image" height="250">
                            <div class="card-body">
                                <h3>{{$blog['title']}}</h3>
                                <p>{{$blog['description']}}</p>
                                <a href="{{route('detail',['id'=>$blog['id']])}}" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{--    Gallery section--}}
    <section class="bg-info-subtle py-5">
        <div class="container">
            <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="col-md-6">
                        <a href="{{route('detail-gallery',['id'=>$gallery['id']])}}">
                            <div class="card">
                                <img src="{{asset($gallery['image'])}}" alt="">
                                <div class="card-img-overlay px-0 pb-0">
                                    <h3 class="bg-dark text-white position-absolute bottom-0 w-100 mb-0 bg-opacity-75 text-center py-3">
                                        {{$gallery['heading']}}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
