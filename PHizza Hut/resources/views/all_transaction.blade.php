@extends('template.master')

@section('title', 'All Transaction')

@section('content')
        @php
        $counter = 0;
        @endphp

        @foreach($transactions as $t)    
            @if ($counter % 2 == 0)
            <a href="{{ route('transaction_detail', $t->transaction_id)}}" style="text-decoration: none">
                <div class="container pt-3 pb-3" style="background-color: red; color: white">
                    Transaction at {{$t->created_at}} <br>
                    User ID: {{$t->user_id}} <br>
                    Username: {{$t->username}}
                </div>   
            </a>
            @else
                <a href="{{ route('transaction_detail', $t->transaction_id)}}" style="text-decoration: none">
                    <div class="container pt-3 pb-3" style="background-color: white; color: black">
                        Transaction at {{$t->created_at}} <br>
                        User ID: {{$t->user_id}} <br>
                        Username: {{$t->username}}
                    </div>   
                </a>
            @endif
            
            @php
                $counter++;
            @endphp
        @endforeach

@endsection