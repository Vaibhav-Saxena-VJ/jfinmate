<li>
    <a href="#" class="node">{{ $node['name'] }}</a>
    @if (!empty($node['children']))
        <ul>
            @foreach ($node['children'] as $child)
                @include('user.tree_node', ['node' => $child])
            @endforeach
        </ul>
    @endif
</li>