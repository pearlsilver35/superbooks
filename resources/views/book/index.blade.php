@extends('layouts.app')

@section('content')

</div>
</div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
{{-- Your content here --}}
<a href="/books/create">Add New Book</a>
<a href="/books?status=1">Active</a>
<a href="/books?status=0">Inactive</a>


<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Books Listing
            <div class="float-right">
                <a href="/books/create" class="btn btn-sm btn-neutral">New</a>
                <a href="/books?status=1" class="btn btn-sm btn-neutral">Active</a>
                <a href="/books?status=0" class="btn btn-sm btn-neutral">Inactive</a>
              </div>
          </h3>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">ID</th>
                <th scope="col" class="sort" data-sort="budget">Name</th>
                <th scope="col" class="sort" data-sort="status">Description</th>
                <th scope="col" class="sort" data-sort="status">Status</th>
                <th scope="col" class="sort" data-sort="status">Date Created</th>
                <th scope="col" class="sort" data-sort="status">Date Updated</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                @forelse ($books as $book)
                
                <td class="budget">{{$book->id}}</td>
                <th scope="row">
                  <div class="align-items-center">
                    <a href="/books/{{$book->id}}">
                    <div class="media-body">
                      <span class="name mb-0 text-sm"> {{$book->name}}</span>
                    </div>
                    </a>
                  </div>
                </th>
                <td class="budget">{{$book->description}}</td>
                <td class="budget">{{$book->status}}</td>
                <td class="budget">{{$book->created_at}}</td>
                <td class="budget">{{$book->updated_at}}</td>
                <td class="budget"><div>
                    <a href="/books/{{$book->id}}/edit">Edit |</a>
                    <a href="/books/{{$book->id}}/archive">Archive |</a>
                    <a href="/books/{{$book->id}}/delete">Delete</a>
                </div></td>
              </tr>
              @empty
                    <tr><td colspan="6" class="text-center">No Books to show</td></tr>
                @endforelse
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection
