@foreach ($children as $child)
    <tr>
        <td>{{ $sl++ }}</td>
        <td>{{ $child->username }}</td>
        <td>{{ $child->name }}</td>
        <td>{{ isset($child->userToRank->rank_id) ? $child->userToRank->rankToRankReward->title : 'Register' }}</td>
        <td>{{ $child->total_investment }}</td>
    </tr>
    @if (count($child->children) > 0)
        <x-refered-users-table :children="$child->children" :level="$level + 1" :sl="$sl" />
    @endif
@endforeach
