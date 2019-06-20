<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Painel Educup') &mdash; {{ env('APP_NAME') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <style>
        * {margin: 0; padding: 0;}

        div.lista {
            margin: 0px auto;
        }

        ul.lista {
            list-style-type: none;
            width: 100%;
        }

        a{
            text-decoration: none;
        }

        a h3.lista {
            font: bold 16px/1.5 Helvetica, Verdana, sans-serif;
        }

        a li.lista img {
            float: left;
            margin: 0 15px 0 0;
        }

        a li.lista p {
            font: 200 12px/1.5 Georgia, Times New Roman, serif;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            text-decoration: none;

            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2; /* number of lines to show */
            line-height: 1;        /* fallback */
            max-height: 1;
        }

        a li.lista {
            text-decoration: none;
            padding: 10px;
            overflow: auto;
        }
        a li.lista.active {
            background: #eee;
            cursor: pointer;
        }
        a li.lista:hover {
            background: #eee;
            cursor: pointer;
        }
    </style>
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        @include('admin.partials.topnav')
      </nav>
      <div class="main-sidebar">
        @include('admin.partials.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        @include('admin.partials.footer')
      </footer>
    </div>
  </div>

  <script src="{{ route('js.dynamic') }}"></script>
  <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('assets/js/tema.js') }}"></script>
  <script src="{{ asset('assets/js/page/components-chat-box.js') }}"></script>


  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  @yield('scripts')
</body>
</html>
