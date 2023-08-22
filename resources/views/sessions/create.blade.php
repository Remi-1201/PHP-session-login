<x-layout>
    <x-slot name="title">
        Log in
    </x-slot>
    <form method="POST" action="{{ route('sessions.store') }}">
        @csrf
        <label for="email">Email</label>
        <input id="email" type="text" name="email" value="{{ old('email') }}">
        <label for="password">Password</label>
        <input id="password" type="text" name="password">
        <input type="submit" value="Log in">
    </form>
</x-layout>