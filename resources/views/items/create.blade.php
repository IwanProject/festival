@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        Form create items
                    </div>
                    <div class="card-body">
                        <form method="post" action="/project/items/">
                            @csrf
                            <div class="mb-3">
                                <label for="items_name" class="form-label">Nama item</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                    id="items_name">
                                @error('nama')
                                    <div class="valid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
