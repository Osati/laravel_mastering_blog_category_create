@extends('back-end.master')

@section('title')
    Blog Create
@endsection

@section('content')
    <main class="page-content">

        <div class="row">
            <div class="col-xl-8 mx-auto">

                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">Blog Create</h6>
                            <hr/>
                            <form class="row g-3" action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title"  class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">category</label>
                                    <select type="text" name="category_id" class="form-control">
                                        <option>Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Author Name</label>
                                    <input type="text" name="author_name"  class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea type="text" name="description" class="form-control"></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image"  class="form-control" accept="image/*">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="date"  class="form-control">
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
