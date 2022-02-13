<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl">Update Your Profile</h1>
    </x-slot>

    <x-container>
        <div class="flex">
            <div class="w-full lg:w-1/2">
                <x-card>
                    <form action="{{ route('profile.update') }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-5">
                            <x-label for="username">Username</x-label>
                            <x-input name="username" id="username" type="text" class="mt-1 w-full"
                                value="{{ old('username', Auth::user()->username) }}" />
                            @error('username')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="email">Email</x-label>
                            <x-input name="email" id="email" type="email" class="mt-1 w-full"
                                value="{{ old('email', Auth::user()->email) }}" />
                            @error('email')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="name">Name</x-label>
                            <x-input name="name" id="name" type="text" class="mt-1 w-full"
                                value="{{ old('name', Auth::user()->name) }}" />
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <x-button>Update</x-button>
                    </form>
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>
