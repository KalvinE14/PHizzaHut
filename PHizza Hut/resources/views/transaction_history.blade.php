@extends('template.master')

@section('title', 'Transaction History')

@section('content')
        @php
        $counter = 0;
        @endphp

        @foreach ($transactions as $t)
            @if ($counter % 2 == 0)
                <a href="{{ route('transaction_detail', $t->transaction_id)}}" style="text-decoration: none">
                    <div class="container pt-3 pb-3 rounded danger" style="background-color: red; color: white">
                        Transaction at {{$t->created_at}}
                    </div> 
                </a>
            @else
                <a href="{{ route('transaction_detail', $t->transaction_id)}}" style="text-decoration: none">
                    <div class="container pt-3 pb-3" style="background-color: white; color: black">
                        Transaction at {{$t->created_at}}
                    </div> 
                </a>
            @endif

            @php
                $counter++;  
            @endphp
            
        @endforeach
@endsection
