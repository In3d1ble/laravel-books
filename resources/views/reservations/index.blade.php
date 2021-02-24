@extends('layouts.main', ['title' => 'List of categories'])

@section('content')

        

    <table class="table table-striped">
        <tr>
        <th>Book</th>
        <th>User</th>
        <th>From</th>
        <th>To</th>
        </tr>
      




        @foreach ($reservations as $reservation)

        <tr>
            <td>{{ $reservation->book->title }}</td>
            <td>{{ $reservation->book->authors }}</td>
            <td>{{ $reservation->from }}</td>
            <td>{{ $reservation->to }}</td>
        </tr>

        @endforeach

    </table>
@endsection