{{--@if (session('success'))--}}
{{--    <div class="alert alert-success p-4 mb-4 rounded-lg">--}}
{{--        <span class="font-medium">{{ session('success') }}</span>--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if (session('error'))--}}
{{--    <div class="alert alert-danger rounded-lg" role="alert">--}}
{{--        <span class="font-medium">{{ session('error') }}</span>--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if($errors->any())--}}
{{--    <div class="alert alert-danger rounded" role="alert">--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li><span class="font-small">{{ $error }}!</span></li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}


@if($errors->any())
    <div class="alert alert-danger p-4 mb-4 rounded-lg" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>  <span class="font-medium">{{ $error }}!</span></li>
            @endforeach
        </ul>
    </div>
@endif

<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if (session('status'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Status',
            text: '{{ session('status') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK',
            //timer: 3000, // Auto close after 3 seconds
            showCloseButton: true, // Show close button
        });
    </script>
@endif

@if (session('delete'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Deleted',
            text: '{{ session('delete') }}',
            confirmButtonText: 'OK',
            timer: 3000, // Auto close after 3 seconds
            showCloseButton: true, // Show close button
        });
    </script>
@endif
