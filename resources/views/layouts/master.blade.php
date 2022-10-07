<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="/assets/img/favicon.ico">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon.ico">
        <link rel="stylesheet" href="/assets/styles/tailwind.min.css">
        <link rel="stylesheet" href="/assets/styles/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="/assets/styles/highlight.css" />
        <!--Regular Datatables CSS-->
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <!--Responsive Extension Datatables CSS-->
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
        <title>Test Project</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/swp.css') }}"> --}}

    </head>
    <body>
        @include('layouts.page_templates.auth')

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/swp.js') }}"></script> --}}

        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!--Datatables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js">
        </script>
    </body>
</html>
