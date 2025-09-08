<form action="{{ route('search') }}" method="POST">
    @csrf

    <label for="name">Product Name:</label>
    <input type="text" name="name" id="name">

    <label for="price">Price:</label>
    <input type="number" step="0.01" name="price" id="price">

    <label for="category">Category:</label>
    <select name="category_id" id="category">
        <option value="">-- Select Category --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <button type="submit">Save</button>
</form>
