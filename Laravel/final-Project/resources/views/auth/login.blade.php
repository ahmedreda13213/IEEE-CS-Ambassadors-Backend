<x-layout>
    <h1>Login</h1>
    <form method="POST" action="/login">
        @csrf
        <x-forms.field label="Email" name="email">
            <x-forms.input name="email" type="email" />
        </x-forms.field>
        <x-forms.field label="Password" name="password">
            <x-forms.input name="password" type="password" />
        </x-forms.field>
        <x-forms.button>Login</x-forms.button>
    </form>
</x-layout>
