<div class="border-b mb-5">
    <x-container>
        <div class="flex">
            <div class="px-10 py-3 text-center border-r border-1">
                <div class="text-2xl font-semibold mb-1">{{ $user->statuses->count() }}</div>
                <div class="uppercase text-xs text-gray-600">Status</div>
            </div>
            <a href="{{ route('profile.following', [$user->username, 'following']) }}"
                class="px-10 py-3 text-center border-r border-1">
                <div class="text-2xl font-semibold mb-1">{{ $user->follows->count() }}</div>
                <div class="uppercase text-xs text-gray-600">Following</div>
            </a>
            <a href="{{ route('profile.following', [$user->username, 'follower']) }}"
                class="px-10 py-3 text-center border-r border-1">
                <div class="text-2xl font-semibold mb-1">{{ $user->followers->count() }}</div>
                <div class="uppercase text-xs text-gray-600">Followers</div>
            </a>
        </div>
    </x-container>
</div>
