<x-layouts.app>

    <div class="row">


        @foreach ($products as $product)
            <div class="col-lg-4">
                <div class="product_card">
                    <!-- Fix: Added missing closing quote for the alt attribute -->
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="product_img">

                    <div class="pc_content">
                        <h2>{{ $product->title }}</h2>

                        <!-- Fix: Check if category exists before accessing its name -->
                        <p class="pcc_in">In <a href="{{route('category.show', $product->category ?  $product->category->id : 'Uncategorized')}}">{{ $product->category ? $product->category->name : 'Uncategorized' }}</a></p>

                        <p class="pcc_price">{{ $product->price }}$</p>

                        <div class="pcc_btns">

                            <!-- Fix: Corrected the syntax for the route helper -->
                            <a href="{{ route('product.show', $product->id) }}" class="viewbtn">View Details</a>
                        </div>


                    </div>
                </div>
            </div>
        @endforeach

    </div>


</x-layouts.app>
