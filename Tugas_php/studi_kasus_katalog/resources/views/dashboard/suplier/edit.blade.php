@extends('dashboard.layouts.default')
@section('title', 'Update Suplier')
@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Update Suplier</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('supliers.update', $suplier->id) }}">
                        @csrf
                        @method('patch')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Perusahaan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="perusahaan" name="perusahaan"
                                        class="form-control @error('perusahaan') is invalid
                                    @enderror"
                                        value="{{ old('perusahaan') ?? $suplier->perusahaan }}" placeholder="Name">
                                    @error('perusahaan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="email" id="email" name="email"
                                        class="form-control @error('email') is invalid
                                    @enderror"
                                        value="{{ old('email') ?? $suplier->email }}" placeholder="Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Telepon</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="number" id="telp" name="telp"
                                        class="form-control @error('telp') is invalid
                                    @enderror"
                                        value="{{ old('telp') ?? $suplier->telp }}" placeholder="Telepon">
                                    @error('telp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Alamat</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <textarea name="alamat" id="alamat" rows="3" class="form-control  @error('alamat') is invalid @enderror"
                                        required>{{ old('alamat') ?? $suplier->alamat }}</textarea>
                                    @error('alamat')
                                        <div class="alert alert-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Negara</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="negara" name="negara"
                                        class="form-control @error('negara') is invalid
                                    @enderror"
                                        value="{{ old('negara') ?? $suplier->negara }}" placeholder="Negara">
                                    @error('negara')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
