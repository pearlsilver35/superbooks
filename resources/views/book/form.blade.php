<div>
    <label for="name">Name</label>
    <input type="text" name="name" value="{{old('name') ?? $book->name}}">
    @error('name')<p style="color: red;">{{ $message }}</p>@enderror
    </div>

    <div>
    <label for="email">Email</label>
    <input type="text" name="email" value="{{old('email') ?? $book->email}}">
    @error('email')<p style="color: red;">{{ $message }}</p>@enderror
    </div>

    <div>
    <label for="note">Note</label>
    <input type="textarea" name="note" value="{{old('note') ?? $book->note}}">
    @error('note')<p style="color: red;">{{ $message }}</p>@enderror
    </div>

    @csrf