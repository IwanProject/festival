@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        Form Edit Pajak
                    </div>
                    <div class="card-body">
                        <form method="post" action="/project/pajak/{{ $pajak->id }}">
                            @csrf
                            @method('put')
                            <select class="form-select" name="items_id">
                                @foreach ($items as $p)
                                    @if ($pajak->items_id == $p->id)
                                        <option value="{{ $p->id }}" selected>{{ $p->nama }}</option>
                                    @else
                                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @endif

                                @endforeach
                            </select>

                            <div class="mb-3">
                                <label for="pajak_name" class="form-label">Nama Pajak</label>
                                <input type="text" class="form-control" name="nama" id="pajak_name"
                                    value="{{ $pajak->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="rate" class="form-label">Rate</label>
                                <input type="text" class="form-control" name="rate" id="rate"
                                    value="{{ $pajak->rate }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
