@props(['selected_menu'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png')}}">

    <title>Staff Management System | {{ $title ?? '' }}</title>

    <!-- Header section -->
    @include('include.header')
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <div class="wrapper">

        <!-- Navigation Menu section -->
        @include('include.navigation')


        <!-- Side Menu section -->
        <x-sidemenu active_menu='{{ $selected_menu }}'/>


        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>{{ $sectiontitle ?? ''  }}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Module</a></li>
                                <li class="breadcrumb-item active">{{ $sectiontitle ?? ''  }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <section class="content">
                <div class="container-fluid">
                    {{ $slot }}

                    <!-- Models section -->
                    @include('include.models')

            </section>

        </div>

        <!-- Footer section -->
        @include('include.footer')

    </div>

    <!-- javascript script section -->
    @include('include.script')

</body>

</html>
