<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />  
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                       
                </div>
            </header>
            <br>
            <div class="container">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ __('Menu') }}</div>
        
                        <div class="card-body">
                            <ul class= "list-item">
                                <li class= "list-group-item">
                                    <a href="{{route('authors.index') }}">Authors</a>
                                </li>
        
                            </ul>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
            <!-- Page Content -->
        </div>
        <main>
            <html>
            <head>
            <style>
            footer {
              text-align: center;
              padding: 20px;
              background-color: black;
              color: white;
            }
            </style>
            </head>
            <body>
            <footer>
              <p>Author<br>
              Example-mongodb</p>
            </footer>   
            </body>
            </html>   
        </main>    
    </body>
</html>


