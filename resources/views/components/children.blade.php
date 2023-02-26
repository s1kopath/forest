@foreach ($children as $child)
    @if (count($child->children) > 0)
        <li data-jstree='{"opened":true}'>
            {{ $child->name }} - {{ email_mask($child->email) }} - {{ $level }}
            <ul>
                <x-children :children="$child->children" :level="$level+1"/>
            </ul>
        </li>
    @else
        <li data-jstree='{"type":"file"}'>
            {{ $child->name }} - {{ email_mask($child->email) }} - {{ $level }}
        </li>
    @endif
@endforeach
