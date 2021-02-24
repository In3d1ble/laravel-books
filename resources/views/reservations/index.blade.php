@extends('layouts.main', ['title' => 'List of categories'])

@section('content')

    @foreach ($reservations as $reservation)
        


        <table class="table table-striped">
            <tr>
            <th>{{ action('ReservationController@index', $reservation->book_id) }}</th>
            <th>{{ action('ReservationController@index', $reservation->user_id) }}</th>
            <th>{{ action('ReservationController@index', $reservation->from) }}</th>
            <th>{{ action('ReservationController@index', $reservation->to) }}</th>
            </tr>
        </table>



    @endforeach


@endsection