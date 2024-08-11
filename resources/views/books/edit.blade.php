<form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- Form fields similar to create.blade.php with pre-filled values -->
</form>

