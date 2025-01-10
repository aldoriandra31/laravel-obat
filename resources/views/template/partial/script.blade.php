<script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
<script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
<script src="{{ asset('assets/compiled/js/app.js') }}"></script>

<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>

<!-- Need: Apexcharts -->
{{-- <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/static/js/pages/dashboard.js') }}"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

{{-- confirmasi delete --}}
<script type="text/javascript">
    $('table tbody, .card-body').on('click', '.showConfirm', function(event) {
        var form = $(this).next();
        console.log(form)
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Apakah kamu yakin untuk menghapus`,

                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>
{{-- sweatalert success --}}
@if (session()->has('success'))
    <script>
        swal({
            icon: 'success',
            title: '{{ session()->get('success') }}',
        });
    </script>
@endif
{{-- sweatalert success --}}

@if (session()->has('error'))
    <script>
        swal({
            icon: 'error',
            title: '{{ session()->get('error') }}',
        });
    </script>
@endif
