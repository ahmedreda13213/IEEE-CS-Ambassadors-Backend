<x-layout>
    <h1>Ask a Question</h1>
    <form method="POST" action="/store">
        @csrf
        <x-forms.field label="Title" name="title">
            <x-forms.input name="title" />
        </x-forms.field>
        <x-forms.field label="Body" name="body">
            <x-forms.input name="body" />
        </x-forms.field>
        <x-forms.field label="Tags" name="tags">
            <select name="tags[]" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </x-forms.field>
        <x-forms.button>Submit</x-forms.button>
    </form>
</x-layout>
