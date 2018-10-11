<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Raleway" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                           {{--      @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif --}}
                            </li>
                        @else
                            
                            <div class="flex">
                                <div>
                                Welcome back,
                            </div>
                            <div>
                                <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>



                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="/home">Dashboard</a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                </div>
                            </li>
                            </div>
                            </div>
                            
                             
                            
                          
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Scripts -->
    {{-- <script src="{{ asset('js/bootstrap.js') }}"></script> --}}
     <script src="{{ asset('js/app.js') }}"></script>
    
   
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>



    <script>


      // function form_submit() {
      //   document.getElementById("updateForm").submit();
      //  }    

        $(document).ready( function () {
            $('#myTable').DataTable({
                "info": false,
                "order": [[ 0, "desc" ]]
            });
        } );

        $(document).ready( function () {
            $('#trainingsTable').DataTable({
                "order": [[ 0, "desc" ]]
            });
        } );


        // $('#edit').on('show.bs.modal', function (event) {

        //     var button = $(event.relatedTarget) // Button that triggered the modal

        //     /*
        //     Me i mar vlerat prej databazes nepermjet costum data-* atributit.
        //     Ku n'butonin qe e hapim modal-in duhet me i qit qato atribute
        //     Shembull - data-titulli = {{-- $trajnimi->titulli --}} 

        //     */
        //     var titulli = button.data('titulli') // Extract info from data-* attributes
        //     var pershkrimi = button.data('pershkrimi') 
        //     var akredituar = button.data('akredituar')
        //     var id = button.data('id')


        //     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        //     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        //     var modal = $(this)
        //     // modal.find('.modal-title').text('New message to ' + recipient)
        //     modal.find('.modal-body #titulli').val(titulli)
        //     modal.find('.modal-body #pershkrimi').val(pershkrimi)
        //     if(akredituar == 1)
        //     {
        //         $('#editRadio1').prop('checked', true);
        //     }
        //     else if(akredituar == 0)
        //     {
        //         $('#editRadio2').prop('checked', true);
        //     }
        //     //Action formes nepermejt jQuery qe me mujt me mar id-n unike per cdo trajnim.
        //     $("#updateForm").attr('action', 'home/'+id);
        // })

    </script>
</body>
</html>
