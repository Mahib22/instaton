<x-app-layout>
    @slot('header')
        <h1 class="font-semibold text-xl">Change Your Password</h1>
    @endslot

    <x-container>
        <div class="flex">
            <div class="w-full lg:w-1/2">
                <x-card>
                    <form action="{{ route('password.edit') }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-5">
                            <x-label for="current_password">Current Password</x-label>
                            <x-input name="current_password" id="current_password" type="password"
                                class="mt-1 w-full" />
                            @error('current_password')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="password">New Password</x-label>
                            <x-input name="password" id="password" type="password" class="mt-1 w-full" />
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="password_confirmation">Confirm Password</x-label>
                            <x-input name="password_confirmation" id="password_confirmation" type="password"
                                class="mt-1 w-full" />
                            @error('password_confirmation')
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
