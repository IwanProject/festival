@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        Data Items
                    </div>
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <a href="/project/items/create" class="btn btn-primary mb-3 "> Tambah Items</a>
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Item</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($item as $items)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $items->nama }}</td>
                                        {{-- <td>{{ $items->pajak->rate }}</td> --}}
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="/project/items/{{ $items->id }}/edit"
                                                        class="btn btn-warning">Edit</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <form action="/project/items/{{ $items->id }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="item_id" value="{{ $items->id }}">
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
