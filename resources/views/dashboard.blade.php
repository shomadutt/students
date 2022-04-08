<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link href="{{'../../../../bootstrap-5.0.2-dist/css/bootstrap.min.css'}}" rel="stylesheet"> -->
    <link href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link href="{{'../../../../css/students.css'}}" rel="stylesheet"> -->
    <link href="{{ asset('css/students.css') }}" rel="stylesheet">
    <title>Student Database</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>

            <div id="searchBar" class="form-outline">
                <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search" />
            </div>

            <div id="appTable">

                <table class=" table table-striped">

                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone no.</th>
                        <th>Email</th>
                        <th>Year</th>
                        <th></th>
                        <th></th>
                    </tr>


                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>


            </div>

            </table>


        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>