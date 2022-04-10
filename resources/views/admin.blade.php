<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/students.css') }}" rel="stylesheet">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <title>Student Database</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Student Database</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            Log out
                        </x-jet-dropdown-link>
                    </form>

                </ul>

            </div>
        </div>
    </nav>

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



    @stack('modals')

    @livewireScripts

    <script src="{{'../../bootstrap-5.0.2-dist/css/bootstrap.min.js'}}"></script>
</body>

</html>