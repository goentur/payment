@extends('layouts.app')
@section('title','School Year')
@section('icon')
<i class="fa fa-graduation-cap"></i>
@endsection

@section('content')
<div class="card shadow mb-4">
    <form action="{{ isset($data)?route('school-year.update',enkrip($data->id)):route('school-year.store') }}" method="post">
        <div class="card-header text-center p-3 bg-primary">
            <h5 class="m-0 font-weight-bold text-white"> @yield('icon') Form @yield('title')</h5>
        </div>
        <div class="card-body border border-primary border-top-0">
            @csrf
            @isset($data)
            @method('PUT')
            @endisset
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="name" class="control-label">SCHOOL YEAR NAME<span class="text-danger">*</span></label>
                        <input required type="text" class="form-control @error('name')is-invalid @enderror" value="{{ isset($data)?$data->name:old('name') }}" id="name" name="name" placeholder="Enter school year name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                @include('helper.required')
            </div>
        </div>
        <div class="card-footer border border-primary border-top-0">
            <a href="{{ route('school-year.index') }}" type="button" class="btn btn-danger waves-effect"><i class="fas fa-times"></i> CLOSE</a>
            <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fa fa-save"></i> SAVE</button>
        </div>
    </form>
</div>
@endsection
@push('script')
@endpush