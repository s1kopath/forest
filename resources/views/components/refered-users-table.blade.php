@foreach ($children as $child)
    <tr>
        <td>{{ $sl++ }}</td>
        <td>{{ $child->username }}</td>
        <td>{{ $child->name }}</td>
        <td>{{ $child->email }}</td>
        <td>{{ $level }}</td>
        <td>??</td>
    </tr>
    @if (count($child->children) > 0)
        <x-refered-users-table :children="$child->children" :level="$level + 1" :sl="$sl" />
    @endif
@endforeach
