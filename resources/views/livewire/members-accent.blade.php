<div class="members-accent">
    @foreach( $accent_pos as $i => $pos)
        @if ( $i % 2 == 0)
        <div class="members-accent-item" style="top: {{ $accent_pos[$i]['y'].'rem' }}; right: {{ $accent_pos[$i]['x'].'rem' }};"></div>
        @else
        <div class="members-accent-item" style="top: {{ $accent_pos[$i]['y'].'rem' }}; left: {{ $accent_pos[$i]['x'].'rem' }};"></div>
        @endif
    @endforeach
</div>
