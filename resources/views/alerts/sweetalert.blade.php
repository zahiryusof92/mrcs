@if ($message = session('success'))
<script>
    swal({
        title: "{{ $message }}",
        icon: "success"
    });
</script>
@endif

@if ($message = session('error'))
<script>
    swal({
        title: "{{ $message }}",
        icon: "error"
    });
</script>
@endif

@if ($message = session('warning'))
<script>
    swal({
        title: "{{ $message }}",
        icon: "warning"
    });
</script>
@endif

@if ($message = session('info'))
<script>
    swal({
        title: "{{ $message }}",
        icon: "info"
    });
</script>
@endif