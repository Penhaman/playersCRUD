<!DOCTYPE HTML>
<html lang="{{ app() -> getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Liga Portugal's Players</title>
    {{-- . Style --}}
    <link href="{{ asset('css/app.css')}}" media="all" rel="stylesheet" type="text/css" />
    @yield('styles')
    {{-- . End Style --}}
</head>
<body>
    {{-- . Header --}}
    @component('master.header')
    @endcomponent
    {{-- . End Header --}}

    {{-- . Content --}}
    <main>
        @yield('content')
    </main>
    {{-- . End Content --}}

    {{-- . Footer --}}
    @component('master.footer')
    @endcomponent
    {{-- . End Footer --}}

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    @yield('scripts')
    {{-- . Scripts --}}
</body>
</html>
