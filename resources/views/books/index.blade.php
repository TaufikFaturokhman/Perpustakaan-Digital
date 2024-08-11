<form action="{{ route('books.index') }}" method="GET">
    <select name="category">
        <option value="">All Categories</option>
        <option value="Fiction">Fiction</option>
        <option value="Non-Fiction">Non-Fiction</option>
        <!-- Tambahkan kategori lain -->
    </select>
    <button type="submit">Filter</button>
</form>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->category }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->quantity }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>