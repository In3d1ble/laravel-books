
<h1>Reservations</h1>

<a href="{{action( 'ReservationController@create' )}}">Create</a>

<table class="table table-striped">
    <tr>

        <th>Book</th>
        <th>User</th>
        <th>From</th>
        <th>To</th>

    </tr>
    @foreach($reservations as $reservation)
        <tr>
            <td>{{ $reservation->book->title }}</td>
        {{-- Trying to get property 'name' of non-object --}}
            <td>
                @if($reservation->user)
                    {{ $reservation->user->name }}
                @endif
            </td>
            <td>{{ Carbon\Carbon::parse($reservation->from)->format('d. m. Y') }}</td>
            <td>{{ Carbon\Carbon::parse($reservation->to)->format('d. m. Y') }}</td>
        </tr>
    @endforeach
</table>

