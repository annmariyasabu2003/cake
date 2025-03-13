
<div class="container">
    <h2>Edit Item</h2>

    <form action="{{ route('update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="{{ $item->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control">{{ $item->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('view') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
