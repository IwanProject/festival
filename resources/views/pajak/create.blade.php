@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        Form create Pajak
                    </div>
                    <div class="card-body">
                        <form method="post" action="/project/pajak/">
                            @csrf
                            <select class="form-select" name="items_id">
                                @foreach ($items as $i)
                                    <option value="{{ $i->id }}">{{ $i->nama }}</option>
                                @endforeach

                            </select>

                            <div class="mb-3">
                                <label for="pajak_name" class="form-label">Nama Pajak</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                    id="pajak_name">
                                @error('nama')
                                    <div class="valid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="rate" class="form-label">Rate</label>
                                <input type="text" class="form-control @error('rate') is-invalid @enderror" name="rate"
                                    id="rate">
                                @error('rate')
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
