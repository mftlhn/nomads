@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Location" value="{{old('location')}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" id="about" rows="10" class="d-block w-100 form-control">{{old('about')}}</textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="featured_event">Featured Event</label>
                            <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{old('featured_event')}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" class="form-control" name="language" placeholder="Language" value="{{old('language')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="foods">Foods</label>
                            <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{old('foods')}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="departure_date">Departure Date</label>
                            <input type="date" name="departure_date" id="departure_date" class="form-control" placeholder="Departure Date" value="{{old('departure_date')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{old('duration')}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" name="type" placeholder="Type" value="{{old('type')}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Price" value="{{old('price')}}">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-2">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('travel-package.index') }}" class="btn btn-info btn-block">Kembali</a>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection