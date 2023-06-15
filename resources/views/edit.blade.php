
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">


        <form action="{{ route('update',$product->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Edit Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <input class="form-control m-2" type="text" name="name" value="{{ $product->name }}" placeholder="Name">
          <input class="form-control m-2" type="number" name="price" value="{{ $product->price }}" placeholder="Price">
          <input class="form-control m-2" type="number" name="quantity" value="{{ $product->quantity }}" placeholder="Quantity">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
