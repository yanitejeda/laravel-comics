<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>@yield('page_title')</title>
   
    @include('partials.header_link')

</head>
<body>
    <header>
        @include('partials.navbar')
        @include('partials.hero')
    </header>
    <main>
        <div>
            @yield('main_content')
        </div>
    </main>
    <footer>
        @include('partials.footer')
    </footer>
    
</body>
</html>