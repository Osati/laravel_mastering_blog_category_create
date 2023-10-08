@extends('front-end.master')

@section('title')
    blog details
@endsection

@section('content')

    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/hero_5.jpg');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">

                    <div class="post-entry text-center">
                        <h1 class="mb-4">{{ $detail->title }}</h1>
                        <h2 class="mb-4 text-light">{{ $detail->category->category_name }}</h2>
                        <div class="post-meta align-items-center text-center">
                            <img src="{{ asset($detail->image) }}" alt="Image" class="img-fluid">
                            <h2 class="mb-4 text-light">{{ $detail->author_name }}</h2>
                            <span class="d-inline-block mt-1">{{ $detail->description }}</span>
                            <span>&nbsp;-&nbsp; {{date("F j, Y",strtotime($detail->date)) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
