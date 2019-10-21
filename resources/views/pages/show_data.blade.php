@foreach($data as $row)
<tr>
    <th>{{ $row->user_id }}</th>
    <th>{{ $row->group_id }}</th>
    <th>{{ $row->post_id }}</th>
    <th>{{ $row->account_id }}</th>
    <th>{{ $row->account_service }}</th>
    <th>{{ $row->buffer_post_id }}</th>
    <th>{{ $row->post_text }}</th>
    <th></th>
</tr>
@endforeach	
<tr>
    <td colspan="4" align="center">
        {!! $data->links() !!}
    </td>
</tr>