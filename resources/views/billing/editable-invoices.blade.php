@foreach($employee ?? '' as $data)

<tr>
    <th scope="row">{{ $data->id }}</th>
    <td>{{ $data->student }}</td>
    <td>{{ $data->note }}</td>
</tr>
@endforeach
