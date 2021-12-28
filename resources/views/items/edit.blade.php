@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        Form edit items
                    </div>
                    <div class="card-body">
                        <form method="post" action="/project/items/{{ $items->id }}">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="items_name" class="form-label">Nama item</label>
                                <input type="text" class="form-control" name="nama" id="items_name"
                                    value="{{ $items->nama }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
