@extends('layouts.app')

{{-- set title --}}
@section('title', 'Edit - Product')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            {{-- error --}}
            @if ($errors->any())
                <div class="alert bg-danger alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- breadcumb --}}
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Edit Product</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">Product</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- forms --}}
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="horizontal-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="horz-layout-basic">Form Input</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Isi input <code>required</code>, Sebelum menekan tombol submit. </p>
                                        </div>
                                        <form class="form form-horizontal"
                                            action="{{ route('backsite.product.update', [$product->id]) }}" method="POST"
                                            enctype="multipart/form-data">

                                            @method('PUT')
                                            @csrf

                                            <div class="form-body">

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="name">Name <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="name" name="name"
                                                            class="form-control" placeholder="example john doe or jane doe"
                                                            value="{{ old('name', isset($product->name) ? $product->name : '') }}"
                                                            autocomplete="off" required>

                                                        @if ($errors->has('name'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('name') }}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">Category <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <select name="category_id" id="category_id"
                                                            class="form-control select2" required>
                                                            <option value="{{ '' }}" disabled selected>Choose
                                                            </option>
                                                            @foreach ($category as $key => $category_item)
                                                                <option value="{{ $category_item->id }}"
                                                                    {{ $category_item->id == $product->category_id ? 'selected' : '' }}>
                                                                    {{ $category_item->name }}</option>
                                                            @endforeach
                                                        </select>

                                                        @if ($errors->has('category_id'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('category_id') }}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="price">Price <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="price" name="price"
                                                            class="form-control" placeholder="example price 10000"
                                                            value="{{ old('price', isset($product->price) ? $product->price : '') }}"
                                                            autocomplete="off"
                                                            data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 0, 'digitsOptional': 0, 'prefix': 'IDR ', 'placeholder': '0'"
                                                            required>

                                                        @if ($errors->has('price'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('price') }}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="weight">Weight (gram) <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="weight" name="weight"
                                                            class="form-control" placeholder="0"
                                                            value="{{ old('weight', isset($product->weight) ? $product->weight : '') }}"
                                                            autocomplete="off" required>

                                                        @if ($errors->has('weight'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('weight') }}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="quantity">Quantity <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="quantity" name="quantity"
                                                            class="form-control" placeholder="0"
                                                            value="{{ old('quantity', isset($product->quantity) ? $product->quantity : '') }}"
                                                            autocomplete="off" required>

                                                        @if ($errors->has('quantity'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('quantity') }}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="status">Status
                                                        <code style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <select name="status" id="status"
                                                            class="form-control select2">
                                                            <option value="{{ '' }}" disabled selected>
                                                                Choose
                                                            </option>
                                                            <option value="1"
                                                                {{ $product->status == 1 ? 'selected' : '' }}>
                                                                Aktif</option>
                                                            <option value="2"
                                                                {{ $product->status == 2 ? 'selected' : '' }}>
                                                                Tidak Aktif</option>
                                                        </select>

                                                        @if ($errors->has('status'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('status') }}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control"
                                                        for="description">Desckripsi<code
                                                            style="color:red;">optional</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <textarea rows="5" class="form-control summernote" id="description" name="description">{{ isset($product->description) ? $product->description : '' }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="photo">Ganti Photo <code
                                                            style="color:red;">optional</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <div class="custom-file">
                                                            <input type="file"
                                                                accept="image/png, image/svg, image/jpeg"
                                                                class="custom-file-input" id="photo" name="photo">
                                                            <label class="custom-file-label" for="photo"
                                                                aria-describedby="photo">Choose File</label>
                                                        </div>

                                                        <p class="text-muted"><small class="text-danger">Hanya dapat
                                                                mengunggah 1 file</small><small> dan yang dapat digunakan
                                                                JPEG, SVG, PNG & Maksimal ukuran file hanya 10
                                                                MegaBytes</small></p>

                                                        @if ($errors->has('photo'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('photo') }}</p>
                                                        @endif

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-actions text-right">
                                                <a href="{{ route('backsite.product.index') }}" style="width:120px;"
                                                    class="btn bg-blue-grey text-white mr-1"
                                                    onclick="return confirm('Yakin ingin menutup halaman ini? , Setiap perubahan yang Anda buat tidak akan disimpan.')">
                                                    <i class="ft-x"></i> Cancel
                                                </a>
                                                <button type="submit" style="width:120px;" class="btn btn-cyan"
                                                    onclick="return confirm('Apakah Anda yakin ingin menyimpan data ini ?')">
                                                    <i class="la la-check-square-o"></i> Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
    <!-- END: Content-->

@endsection
