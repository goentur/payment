<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('vendor/moment/moment.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('vendor/jquery-ui/jquery.blockUI.min.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@stack('script')
@if ($message = session()->get('success'))
<script>
     alert_success('{{ $message }}')
</script>
@elseif ($message = session()->get('error'))
<script>
     alert_error('{{ $message }}')
</script>
@endif