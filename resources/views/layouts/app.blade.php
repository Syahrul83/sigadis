<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Toastr -->
    <link rel="stylesheet" href="/plugins/toastr/toastr.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    @livewireStyles()
    @livewireScripts()
    <script defer>
       Livewire.onPageExpired((response, message) => {
	location.reload()
     })
    </script>
{{-- <script type="module">
        import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
    </script>

  <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script> --}}

<style>
@page { size: auto !important; }
    </style>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <x-nav-bar></x-nav-bar>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <x-main-aside></x-main-aside>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{ $header }}
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                {{ $breadcrumb }}
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    {{ $slot }}
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>

        <!-- Control Sidebar -->
        <x-side-bar></x-side-bar>

        <!-- Main Footer -->
        <x-footer></x-footer>
    </div>
    <!-- ./wrapper -->

    @include('sweetalert::alert')



    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> --}}



    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/plugins/jszip/jszip.min.js"></script>
    <script src="/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Toastr -->
    <script src="/plugins/toastr/toastr.min.js"></script>




    <!-- AdminLTE App -->

    <script>
        $(function() {

            $("#example0").DataTable({
                "responsive": true
                , "lengthChange": true
                , "autoWidth": true


            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');


            $("#example1").DataTable({
                "lengthMenu": [
            [20, 50, -1],
            [20, 50, 'All'],
        ],
                "responsive": false
                , "lengthChange": false
                , "autoWidth": false
                , "scrollX": true

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $("#example2").DataTable({
                "lengthMenu": [
            [20, 50, -1],
            [20, 50, 'All'],
        ],
                "responsive": false
                , "lengthChange": false
                , "autoWidth": false
                , "scrollX": true

            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

            $("#example3").DataTable({
                "lengthMenu": [
            [20, 50, -1],
            [20, 50, 'All'],
        ],
                "paging": true,
                "responsive": false
                , "lengthChange": false
                , "autoWidth": false
                , "scrollX": true,



            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

            $("#example4").DataTable({
                "lengthMenu": [
            [20, 50, -1],
            [20, 50, 'All'],
        ],
                "responsive": false
                , "lengthChange": false
                , "autoWidth": false
                , "scrollX": true

            }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');

            $("#example5").DataTable({
                "lengthMenu": [
            [20, 50, -1],
            [20, 50, 'All'],
        ],
                "responsive": false
                , "lengthChange": false
                , "autoWidth": false
                , "scrollX": true

            }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');



            $('#example6').DataTable({
                "paging": false
                , "lengthChange": false
                , "searching": false
                , "ordering": true
                , "info": true
                , "autoWidth": false
                , "responsive": false
                , "scrollX": true
            });

            $('#example7').DataTable({
                "paging": false
                , "lengthChange": false
                , "searching": false
                , "ordering": true
                , "info": true
                , "autoWidth": false
                , "responsive": false
                , "scrollX": true
            });




        });

    </script>

    {{-- <script type="text/javascript">

    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: `Are you sure you want to delete this record?`,
             text: "If you delete this, it will be gone forever.",
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

</script> --}}

    <script type="text/javascript">
        window.livewire.on('studentAdded', () => {
            $('#exampleModal').modal('hide');
            $('.modal-backdrop').remove();
            $('#hp').click();
            $(document.body).removeClass("modal-open");
        });

    </script>



    <script type="text/javascript">
        window.livewire.on('studentUpdate', () => {
            $('#updateexampleModal').modal('hide');
            $('.modal-backdrop').remove();
            $('#hp').click();
            $(document.body).removeClass("modal-open");
        });

    </script>

<script type="text/javascript">
    window.livewire.on('studentDelete', () => {
        $('#deleteexampleModal').modal('hide');
        $('.modal-backdrop').remove();
        $('#hp').click();
        $(document.body).removeClass("modal-open");
    });

</script>

    <link rel="stylesheet" href="/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <script src="/plugins/sweetalert2/sweetalert2.min.js"></script>


    <script>
        var Toast = Swal.mixin({
            toast: true
            , position: 'top-end'
            , showConfirmButton: false
            , timer: 3000
        });

    </script>

    <script>
        window.addEventListener('newName', event => {
            Toast.fire({
                icon: 'success'
                , title: event.detail.newName
            });
        });

    </script>


    @stack('scripts')


    @if (session()->has('success'))
    <script>
        Toast.fire({
            icon: 'success'
            , title: '{{ session('success') }}'
        });

    </script>
    @endif




</body>


</html>
