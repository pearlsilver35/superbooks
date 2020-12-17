<h1>Book Details</h1>

<div><a href="/books">< Back</a></div>

<strong>Name</strong>
<p>{{$book->name}}</p>

<strong>Email</strong>
<p>{{$book->email}}</p>

<strong>Note</strong>
<p>{{$book->note}}</p>

<div>
    <a href="/books/{{$book->id}}/edit">Edit</a>

    <form action="/books/{{$book->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button>Delete</button>
    </form>
</div>