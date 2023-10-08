@extends('back-end.master')

@section('title')
    Category From

@endsection

@section('content')
    <main class="page-content">

        <div class="row">
            <div class="col-xl-8 mx-auto">

                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">Category Create</h6>
                            <hr/>
                            <form class="row g-3" action="{{ route('categories.update',$category->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" name="category_name" value="{{ $category->category_name}}"  class="form-control">
                                </div>
                                <br>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Save info</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
