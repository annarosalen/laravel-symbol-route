@extends('layouts.main-layout')

@section('content')

    <ul>
        @foreach ($pagamenti as $pagamento)

        @if ($loop -> even)

            <li class='red'>
        @else

            <li class='green'>   

        @endif
                
            {{$pagamento['status']}}
            {{$pagamento['price']}}
            {{$pagamento['prenotazione_id']}}
                
            </li>

    @endforeach
    </ul>
   

@endsection