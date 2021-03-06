@extends('layout.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Transaksi</strong>
            <small>{{ $item->uuid }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transaction.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                {{-- name --}}
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Pemesan</label>
                    <input type="text"
                        name="name"
                        value="{{ old('name') ? old('name') : $item->name }}"
                        class="form-control @error('name')is-invalid @enderror"/>
                    @error('name')<div class="text-muted">{{ $message }} </div> @enderror
                </div>
                {{-- type --}}
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="email"
                        name="email"
                        value="{{ old('email') ? old('email') : $item->email }}"
                        class="form-control @error('email')is-invalid @enderror"/>
                    @error('email')<div class="text-muted">{{ $message }} </div> @enderror
                </div>
                {{-- price --}}
                <div class="form-group">
                    <label for="number" class="form-control-label">No. HP</label>
                    <input type="text"
                        name="number"
                        value="{{ old('number') ? old('number') : $item->number }}"
                        class="form-control @error('number')is-invalid @enderror"/>
                    @error('number')<div class="text-muted">{{ $message }} </div> @enderror
                </div>
                {{-- quantity --}}
                <div class="form-group">
                    <label for="alamat" class="form-control-label">Alamat</label>
                    <input type="text"
                        name="alamat"
                        value="{{ old('alamat') ? old('alamat') : $item->alamat }}"
                        class="form-control @error('alamat')is-invalid @enderror"/>
                    @error('alamat')<div class="text-muted">{{ $message }} </div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                       Ubah Transaksi
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection