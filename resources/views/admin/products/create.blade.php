<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Opps Something went wrong</strong></p>
                    </div>
                @endif
                <h2>Create Product</h2>
                <form action="/admin/products/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    Product Name: <input class="form-control" type="text" name="product_name"
                        value="{{ old('product_name') }}"><br><br>
                    @error('product_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    Product Desc: <textarea class="form-control" name="product_desc" id="" cols=30
                        rows=10>{{ old('product_desc') }}</textarea>
                    @error('product_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror<br>
                    Price: <input class="form-control" type="text" name="price" value="{{ old('price') }}">
                    @error('product_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror<br><br>
                    Category:
                    <x-forms.select name="category_id">
                        <option value="0"> Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? 'selected' : ' ' }}>
                                {{ $category->category_name }}</option>
                        @endforeach
                    </x-forms.select>
                    <br><br>
                    <input type="file" src="" name="upload_image" id="">

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
