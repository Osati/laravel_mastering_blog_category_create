@extends('back-end.master')

@section('title')
    Category Details
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                                                                       href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->category->category_name }}</td>
                                <td>{{ $blog->author_name }}</td>
                                <td>{{ $blog->description }}</td>
                                <td>
                                    <img src="{{ asset($blog->image) }}" style="width:50px">
                                </td>
                                <td>{{ $blog->date }}</td>
                                <td>{{ $blog->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-success">edit</a>
                                    @if($blog->status == 1)
                                        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-success">Inactive</a>
                                    @else
                                        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-success">Active</a>
                                    @endif

                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
