@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        Data Pajak
                    </div>
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <a href="/project/pajak/create" class="btn btn-primary mb-3"> Tambah Pajak</a>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pajak</th>
                                    <th>Rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($pajak as $p)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->rate }}</td>

                                        <td>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="/project/pajak/{{ $p->id }}/edit"
                                                        class="btn btn-warning">Edit</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <form action="/project/pajak/{{ $p->id }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="pajak_id" value="{{ $p->id }}">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
