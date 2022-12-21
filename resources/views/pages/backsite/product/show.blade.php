<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <td>{{ isset($product->name) ? $product->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Category</th>
        <td>{{ isset($product->category->name) ? $product->category->name : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{ isset($product->price) ? 'IDR ' . number_format($product->price) : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Weight</th>
        <td>{{ isset($product->weight) ? $product->weight : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Quantity</th>
        <td>{{ isset($product->quantity) ? $product->quantity : 'N/A' }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>
            @if ($product->status == 1)
                <span class="badge badge-sucsess">{{ 'Aktif' }}</span>
            @elseif($product->status == 2)
                <span class="badge badge-danger">{{ 'Tidak Aktif' }}</span>
            @else
                <span>{{ 'N/A' }}</span>
            @endif
        </td>
    </tr>
    <tr>
        <th>Deskripsi</th>
        <td>
            {{ $product->description }}
        </td>
    </tr>
    <tr>
        <th>Photo</th>
        <td style="text-align:center;">
            <a data-fancybox="gallery"
                data-src="{{ request()->getSchemeAndHttpHost() . '/storage' . '/' . $product->photo }}"
                class="blue accent-4 dropdown-item">Show</a>
        </td>
    </tr>
</table>
