<x-layout>
    <x-slot name="title">
        Sign up
    </x-slot>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <label for="Name">name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}">
        <label for=Email">email</label>
        <input id="email" type="text" name="email" value="{{ old('email') }}">
        <label for="Password">password</label>
        <input id="password" type="password" name="password"">
        <label for="password_confirmation">Password Confirmation</label>
        <input id="password_confirmation" type="password" name="password_confirmation">
        <input type="submit" value="Create my account">
    </form>
</x-layout>