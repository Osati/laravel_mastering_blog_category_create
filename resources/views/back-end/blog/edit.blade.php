@extends('back-end.master')

@section('title')
    Blog edit
@endsection

@section('content')
    <main class="page-content">

        <div class="row">
            <div class="col-xl-8 mx-auto">

                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">Blog edit</h6>
                            <hr/>
                            <form class="row g-3" action="{{ route('blogs.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" value="{{ $blog->title }}"  class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">category</label>
                                    <select type="text" name="category_id" class="form-control">
                                        <option>Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $blog->category_id ? 'selected' : '' }}>{{ $category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Author Name</label>
                                    <input type="text" name="author_name" value="{{ $blog->author_name }}" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea type="text" name="description" class="form-control">{{ $blog->description }}"</textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image"  class="form-control" accept="image/*">
                                    <img src="{{ asset($blog->image) }}" style="width: 50px">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="date" value="{{ $blog->date }}"  class="form-control">
                                </div>

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
