
<h1>Reservations</h1>


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
            <td>
                @if($reservation->user)
                {{ $reservation->user->name }}
                @endif
            </td>
            <td>{{ $reservation->from }}</td>
            <td>{{ $reservation->to }}</td>
        </tr>
    @endforeach
</table>

