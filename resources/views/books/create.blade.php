<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" required>

    <label for="category">Category:</label>
    <select name="category">
        <option value="Fiction">Fiction</option>
        <option value="Non-Fiction">Non-Fiction</option>
        <!-- Tambahkan kategori lain -->
    </select>

    <label for="description">Description:</label>
    <textarea name="description" required></textarea>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required>

    <label for="book_file">Upload Book File (PDF):</label>
    <input type="file" name="book_file" accept=".pdf" required>

    <label for="cover_image">Upload Cover Image (jpeg/jpg/png):</label>
    <input type="file" name="cover_image" accept="image/jpeg,image/png" required>

    <button type="submit">Submit</button>
</form>
