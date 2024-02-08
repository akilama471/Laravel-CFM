<script nonce="{{ csp_nonce() }}" src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script nonce="{{ csp_nonce() }}" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script nonce="{{ csp_nonce() }}" src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script nonce="{{ csp_nonce() }}" src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
@stack('script-include')
<script nonce="{{ csp_nonce() }}" src="{{ asset('assets/dist/js/adminlte.js')}}"></script>

<script nonce="{{ csp_nonce() }}" defer>
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    let sDate;

    $(function() {
        $('.sidebar').overlayScrollbars({
            className: "os-theme-light",
            paddingAbsolute: true,
            overflowBehavior: {
                x: 'hidden',
            }
        });
    })
</script>

@stack('script')

