<!DOCTYPE html>
<html lang="fr">
<head>
    @include('layouts.partials.head')
    <?php    setlocale(LC_ALL, "fr_FR.UTF-8");    ?>
</head>
<body>
@include('layouts.partials.top')

 
<div id="app">

         @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div><br />
         @endif

    @if (!empty( Session::get('success') ))
        <div class="alert alert-success">

        {{ Session::get('success') }}
        </div>

    @endif

            <!-- Content -->
        <main class="py-4 container">
            @yield('content')
        </main>
            <!-- /.content -->


 @include('layouts.partials.footer')
 @include('layouts.partials.footer-scripts')
 </div>
	
</body>
</html>

