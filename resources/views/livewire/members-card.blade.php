<div class="member-card">
    <div class="member-card-content">
        <div class="card-rate">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="96"
                height="16"
                viewBox="0 0 96 16"
                fill="none"
            >
                @for($i = 0; $i < 5; $i++) 
                @if ($i <= $member->rate - 1)
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="{{$fill_star_pos[$i]}}"
                    fill="#EE9F00"
                />
                @else
                <path
                    d="{{$empty_star_pos[$i]}}"
                    stroke="#EE9F00"
                    stroke-width="2"
                />
                @endif 
                @endfor
            </svg>
        </div>
        <div class="card-message">{{$member->message}}</div>
        <div class="card-member-info">
            <div class="card-avatar">
                <img
                    src="{{ asset($member->avatar.'.png') }}"
                    class="card-avatar-content"
                    alt="image"
                />
            </div>
            <div class="card-member-name">{{$member->name}}</div>
            <div class="card-member-position">{{$member->position}}</div>
        </div>
    </div>
</div>
