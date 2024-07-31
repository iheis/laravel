    @include('layouts.header')
    <h1>Soy una vista</h1>
    {{--handlebars o mustache--}}
    {{$curso}}
    <hr class="my-3">

    {{--Directivas--}}
    @if ( $numero < 100 )
        es menor
    @else
        NO es menor
    @endif

    {{--Directivas de iteración--}}
    <ul>
    @foreach ($zeppelin as $integrante )
    <li>{{ $integrante }}</li>
    @endforeach
    </ul>

    <hr class="my-3">
      <x-boton href="https://www.laravel.com">Laravel</x-boton>
      <x-boton href="https://www.laravel.com">Laracast</x-boton>


    @include('layouts.footer')
