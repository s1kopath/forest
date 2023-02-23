@foreach ($children as $child)
    @if (count($child->children) > 0)
        <li data-jstree='{"opened":true}'>
            {{ $child->name }} - {{ email_mask($child->email) }}
            <ul>
                <x-children :children="$child->children" />
            </ul>
        </li>
    @else
        <li data-jstree='{"type":"file"}'>
            {{ $child->name }} - {{ email_mask($child->email) }}
        </li>
    @endif
@endforeach
