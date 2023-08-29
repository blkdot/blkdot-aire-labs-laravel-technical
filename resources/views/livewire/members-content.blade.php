<div class="members-content">
    <livewire:members-accent
        :accent_count="count($members)"
    ></livewire:members-accent>
    <div class="members-cards">
        @foreach($members as $member)
        <livewire:members-card :member="$member"></livewire:members-card>
        @endforeach
    </div>
</div>
