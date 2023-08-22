<x-layout>
    <x-slot name="title">
        {{ $user->name }}のページ
    </x-slot>
    <p>メールアドレス: {{ $user->email }}</p>
</x-layout>