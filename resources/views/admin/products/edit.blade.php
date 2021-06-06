<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                @if ($errors->any())
            
                    <div class="alert alert-danger">
                        <p><strong>Opps Something went wrong</strong></p>
                        
                    </div>
                @endif
                <h2>Update Product: {{ $product->product_name}}</h2>
                <form action="/admin/products/update/{{ $product->id }}" method="POST">
                    @csrf
                    Product Name: <input class="form-control" type="text" name="product_name" value="{{ $product->product_name}}"><br><br>
                    @error('product_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    Product Desc: <textarea class="form-control" name="product_desc" cols=30 rows=10 > "{{ $product->product_desc}}"  </textarea>
                    @error('product_desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror<br>
                    Price: <input class="form-control" type="text" name="price" value=" {{  $product->price }}"><br><br>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    Category:
                    <x-forms.select name="category_id">
                        <option value="0"> Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{$category->id == $product->category_id ? "selected" : ''}}>{{ $category->category_name }}</option>
                        @endforeach
                    </x-forms.select>


                    {{-- <select name="category_id" id="">
        <option value="0"> Select a category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select> --}}
                    <br><br>
                    <input class="form-control" type="Submit" name="Submit" value="Save">
                </form>

            </div>
        </div>
    </div>
</x-admin.layout>
