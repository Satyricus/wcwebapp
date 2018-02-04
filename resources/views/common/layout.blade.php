<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('css/common.css') }}" rel="stylesheet" />
    </head>
    <body>

        <!-- Navbar (TODO: move to own file, import with yield or expands blade keyword)-->
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapsable" aria-controls="navbar-collapsable" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-collapsable">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Some-link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown-links" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-links">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Navbar side -->
        <div class="container-fluid full-height">
            <div class="row">
                <div class="col-md-2 d-none d-md-block height-50" style="background-color: #0e7a12">
                    Logo Here
                </div>
            </div>
            <div class="row full-height">
                <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>My Data</span>
                            <a class="d-flex align-items-center text-muted" href="#"></a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Character</a>
                            </li>
                        </ul>
                    </div>
                </nav>


                <!-- MAIN CONTENT HERE -->
                <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    @yield('main-content')
                </div>

            </div>  <!-- ROW END -->
        </div>  <!-- CONTAINER END -->

    </body>
</html>
