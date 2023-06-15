@include('layouts.app')
<div class="container mt-4">
    <div class="row ">
        <div class="card">
            <h5 class="card-header">{{ $product->name }}</h5>
            <div class="card-body">
              <h5 class="card-title">Product Price: {{ $product->price }}</h5>
              <p class="card-text">Product Quantity: {{ $product->quantity }}</p>
              <a href="/" class="btn btn-primary">Back</a>
            </div>
          </div>
    </div>
</div>