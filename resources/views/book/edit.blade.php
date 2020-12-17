<h1>Edit Book Details</h1>
<form action="/books/{{$book->id}}" method="POST">
    @method('PATCH')
    @include('book.form')
    
    <button>Save Book</button>

</form>