@extends('back-end.master')

@section('title')
    User From

@endsection

@section('content')
    <main class="page-content">

        <div class="row">
            <div class="col-xl-8 mx-auto">

                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">User Create</h6>
                            <hr/>
                            <form class="row g-3" action="{{ route('users.store') }}" method="post">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">User Name</label>
                                    <input type="text" name="name"  class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">User Email</label>
                                    <input type="email" name="email"  class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">User Password</label>
                                    <input type="password" name="password"  class="form-control">
                                </div>
                                <br>
                                <div class="col-12 mt-1">
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
