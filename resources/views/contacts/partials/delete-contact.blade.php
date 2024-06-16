<form action="{{ route('contacts.delete', ['contact' => $contact->id]) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this contact?')">
    @csrf
    @method('DELETE')
    <button type="submit">(Del)</button>
</form>
