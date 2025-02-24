<div>
    <div class="row">
        <div class="col-12">
          <div class="product_card">
            <div class="row">
              <div class="col-lg-4">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="w-full h-auto">
              </div>

              <div class="col-lg-8">
                <div class="pc_content">
                  <h2 class="text-2xl font-bold">{{ $product->title }}</h2>
                  <p class="pcc_in">In <a href="{{route('category.show', $product->category ?  $product->category->id : 'Uncategorized')}}">{{ $product->category ? $product->category->name : 'Uncategorized' }}></a></p>
                  <p class="pcc_price">${{ $product->price }}$</p>

                  <p class="pcc_description">{{ $product->description }}</p>

                  <div class="pcc_btns">
                    <button  wire:click="addToCart({{ $product->id }})"" class="addtocart">Add To Cart</button>
                  </div>
                  @if (session()->has('message'))

                  <div class="alert alert-success my-2">{{ session('message') }}</div>

              @endif
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
</div>

