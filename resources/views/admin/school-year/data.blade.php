@extends('layouts.app')
@section('title','School Year')
@section('icon')
<i class="fa fa-graduation-cap"></i>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header text-center p-3 bg-primary">
        <h5 class="m-0 font-weight-bold text-white"> @yield('icon') Data @yield('title')</h5>
    </div>
    <div class="card-body border border-primary border-top-0">
        <a href="{{ route('school-year.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Data @yield('title')</a>
        <div class="row">
            <div class="col-12">
                <hr class="bg-primary">
            </div>
            <div class="col-12">
                {{ $dataTable->table(['class' => 'table table-sm table-bordered table-hover dt-responsive']) }}
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
{{ $dataTable->scripts() }}
<script>
    $(document).on("click", ".active", function() {
        Swal.fire({
            title: "Are you serious!",
            text: "Want to activate this data",
            icon: "question",
            allowOutsideClick: 0,
            showCancelButton: 1,
            confirmButtonColor: "#ef5350",
            cancelButtonColor: "#317eeb",
            confirmButtonText: '<i class="mdi mdi-check-bold"></i> Yes !',
            cancelButtonText: '<i class="mdi mdi-close"></i> Cancel !'
        }).then(a => {
            a.isConfirmed && (loading(), $.when($.ajax({
                url: "{{ route('school-year.destroy',csrf_token()) }}",
                type: "POST",
                data: {
                    _method: "DELETE",
                    id: $(this).data("id")
                },
                dataType: "JSON",
                success: function(a) {
                    a.status ? (alert_success(a.message), $("#dataTableBuilder").DataTable().ajax.reload()) : alert_error(a.message)
                },
                error: function(a, e, t) {
                    alert_error(t)
                }
            })).done(function() {
                unLoading()
            }))
        })
    });
</script>
@endpush