<x-layout>
    <h1>Register</h1>
    <form method="POST" action="/register">
        @csrf
        <x-forms.field label="Name" name="name">
            <x-forms.input name="name" />
        </x-forms.field>
        <x-forms.field label="Email" name="email">
            <x-forms.input name="email" type="email" />
        </x-forms.field>
        <x-forms.field label="Password" name="password">
            <x-forms.input name="password" type="password" />
        </x-forms.field>
        <x-forms.field label="Confirm Password" name="password_confirmation">
            <x-forms.input name="password_confirmation" type="password" />
        </x-forms.field>
        <x-forms.button>Register</x-forms.button>
    </form>
</x-layout>
