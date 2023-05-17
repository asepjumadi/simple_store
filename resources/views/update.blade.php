<form action="{{ route('update') }}" method="POST">
    @csrf

    <!-- Form fields for updating Table 1 -->
    <input type="text" name="produk_name" value="{{ $produk->produk_name }}">
    <input type="text" name="produk_categori" value="{{ $produk->kategori }}">
    <input type="text" name="produk_deskripsi" value="{{ $produk->deskripsi }}">

    <!-- Form fields for updating Table 2 -->
    <input type="text" name="varinat_colorid" value="{{ $variant->color_id }}">
    <input type="text" name="varinat_produkid" value="{{ $variant->produk_id }}">
    <input type="text" name="variant_sizeid" value="{{ $variant->size_id }}">
    <input type="text" name="varinat_price" value="{{ $variant->price}}">

    <!-- Submit button -->
    <button type="submit">Update</button>
</form>