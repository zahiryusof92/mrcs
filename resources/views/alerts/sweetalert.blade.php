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

@if ($message = session('exceed'))
<script>
    swal({
        title: "{{ $message }}",
        text: "Atas sambutan yang luar biasa, kami telah pun mencapai had maksimum kapasiti pendaftaran. Semua pendaftaran yang telah dihantar akan diproses dengan kadar segera. Terima kasih.",
        icon: "error"
    });
</script>
@endif