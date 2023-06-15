@include('layouts.app')

<div class="container">

<div>
  <h1 class="text-center m-4">Table</h1>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
@include('create')

<table class="table table-bordered ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
        
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->quantity }}</td>
      <td> <a href="{{ route('show',$product->id) }}">Show</a>
      <a href="{{ route('edit',$product->id )}}" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal">
Edit
      </a>
      </td>
    </tr>
      @endforeach

  </tbody>
</table>

</div>
@include('edit');
