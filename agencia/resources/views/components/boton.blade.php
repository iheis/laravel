{{--
$slot variable reservada para indica que ahi va contenido dinamico
$attibutes variable reservada para indicar los atributos de cada elemento HTML [href, id, target]
--}}
<a {{ $attributes }} target="_blank" class="bg-teal-700 p-2 m-1 rounded
            hover:bg-teal-800">{{ $slot }}</a>

