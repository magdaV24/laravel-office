@extends("display.display")

@section("content")

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Date</th>
      <th scope="col">Hour Slot</th>
    </tr>
  </thead>
  <tbody>
  @for($i = 0; $i < count($appointments); $i++)
            <tr class="table-row">
                <th class="id">{{ $appointments[$i]['id']}}</th>
                <td class="first-name">{{ $appointments[$i]['first_name']}}</td>
                <td class="last-name">{{ $appointments[$i]['last_name']}}</td>
                <td class="email">{{ $appointments[$i]['email_address']}}</td>
                <td class="phone-number">{{ $appointments[$i]['phone_number']}}</td>
                <td class="address">{{ $appointments[$i]['address']}}</td>
                <td class="date">{{ $appointments[$i]['date']}}</td>
                @if($appointments[$i]['slot'] === 1)
                <td class="hour-slot">9:00 - 10:00</td>
                @endif
                @if($appointments[$i]['slot'] === 2)
                <td class="hour-slot">10:30 - 11:30</td>
                @endif
                @if($appointments[$i]['slot'] === 3)
                <td class="hour-slot">12:00 - 13:00</td>
                @endif
                @if($appointments[$i]['slot'] === 4)
                <td class="hour-slot">15:30 - 16:30</td>
                @endif
                @if($appointments[$i]['slot'] === 5)
                <td class="hour-slot">17:00 - 18:00</td>
                @endif
                @if($appointments[$i]['slot'] === 6)
                <td class="hour-slot">18:30 - 19:30</td>
                @endif
                @if($appointments[$i]['slot'] === 7)
                <td class="hour-slot">20:00 - 21:00</td>
                @endif
            </tr>
            @endfor
  </tbody>
</table>
@endsection
