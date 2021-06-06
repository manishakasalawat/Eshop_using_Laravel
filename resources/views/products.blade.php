<x-layout>
  <h1>
     Products
    </h1>
    @foreach($products as $product)
    <article>
        <h2>
            <a href="/product/{{ $product->id}}">
                {{ $product['product_name'] }}
            </a>  
        </h2>
            <p>{{ $product['product_desc'] }}</p>
    </article>
    @endforeach

</x-layout>
    