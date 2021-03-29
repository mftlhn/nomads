@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Paket Travel {{$item->title}} </h1>
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
            <form action="{{ route('transaction.update', $item->id) }}" method="post">
                @method('PUT')
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="transaction-status">Status</label>
                            <select class="form-control" name="transaction_status" required>
                                <option value="{{ $item->transaction_status }}">
                                    Jangan ubah ({{ $item->transaction_status }})
                                </option>
                                <option value="IN_CART">In cart</option>
                                <option value="PENDING">Pending</option>
                                <option value="SUCCESS">Success</option>
                                <option value="CANCEL">Cancel</option>
                                <option value="FAILED">Failed</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-2 my-3">
                        <button class="btn btn-primary btn-block" type="submit">Ubah</button>
                    </div>
                    <div class="col-lg-2 my-3">
                        <a href="{{ route('travel-package.index') }}" class="btn btn-info btn-block">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection