<x-app-layout>

    <div class="note-container single-note">
        <div class="note-header">
            <a href="{{ route('note.index') }}">
                <h1 class="text-white py-2 text-center text-4xl font-bold">Note :{{ $note->created_at }}</h1>
            </a>
        </div>
        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
            <div class="note-buttons">
                <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                <form action="{{ route('note.destroy',$note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
