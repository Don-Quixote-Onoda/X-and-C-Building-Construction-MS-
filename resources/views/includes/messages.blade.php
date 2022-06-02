<script>
    var timeout = 1000;
    toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "preventDuplicates": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "10000",
            "extendedTimeOut": "10000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
        

            setTimeout(function () {
                toastr.error("{{$error}}");
            }, timeout += 1000 );
        @endforeach
    @endif
</script>

        
<script>
    var timeout = 1000;
    toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "preventDuplicates": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "10000",
            "extendedTimeOut": "10000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }

    @if (session('success'))

    setTimeout(function () {
                toastr.success("{{session('success')}}");
            }, timeout += 1000 );
    @endif
</script>

<script>
    var timeout = 1000;
    toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "preventDuplicates": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "0",
            "hideDuration": "1000",
            "timeOut": "10000",
            "extendedTimeOut": "10000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }

    @if (session('error'))

    setTimeout(function () {
                toastr.error("{{session('error')}}");
            }, timeout += 1000 );
    @endif
</script>

    
