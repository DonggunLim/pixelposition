<x-layout>
    <page-heading>Login</page-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" />
        <x-forms.input label="Password" name="password" type="password" />

        <x-forms.button>Login</x-forms.button>
    </x-forms.form>
</x-layout>
