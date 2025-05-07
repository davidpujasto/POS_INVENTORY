<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') || {{ config('app.name') }}</title>
    <meta content="Fahim Anzam Dip" name="author">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
  
    @include('includes.main-css')

    <style>
    .input-group-text i {
        transition: color 0.3s;
    }

    .form-control:focus {
        border-color: #0dcaf0;
        box-shadow: 0 0 0 0.2rem rgba(10, 58, 202, 0.25);
    }

    .input-group:focus-within .input-group-text i {
        color: #0dcaf0;
    }
  </style>
    
</head>

<body class="c-app">
    @include('layouts.sidebar')

    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed">
            @include('layouts.header')
            <div class="c-subheader justify-content-between px-3">
                @yield('breadcrumb')
            </div>
        </header>

        <div class="c-body">
            <main class="c-main">
                @yield('content')
            </main>
        </div>

        @include('layouts.footer')

    </div>

    @include('includes.main-js')

    <script src="{{ asset('/sw.js') }}"></script>
<script>
   if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
</script>

<script>
    Livewire.on('showCheckoutModal', () => {
        $('#checkoutModal').modal('show');
    });
</script>

</body>
</html>
