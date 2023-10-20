@extends('back.layout')
@section('content')
        <main class="main-content-wrapper">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row mb-8">
                    <div class="col-md-12">
                        <div class="d-md-flex justify-content-between align-items-center">
                            <!-- page header -->
                            <div>
                                <h2>Add New Product</h2>
                                <!-- breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="text-inherit">Products</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- button -->
                            <div>
                                <a href="products.html" class="btn btn-light">Back to Product</a>
                            </div>
                        </div>
        
                    </div>
                </div>
                <!-- row -->
                <div class="row">
        
                    <div class="col-lg-8 col-12">
                        <!-- card -->
                        <div class="card mb-6 card-lg">
                            <!-- card body -->
                            <div class="card-body p-6 ">
                                <h4 class="mb-4 h5">Product Information</h4>
                                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="annonce_id" value="{{ request('annonce_id') }}">
                                    <div class="mb-3">
                                        <label class="form-label">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Product Category</label>
                                        <input type="text" class="form-control" name="category" placeholder="Product Category" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Product Price/Value</label>
                                        <input type="text" class="form-control" name="price" placeholder="Product Category" required>
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Weight</label>
                                        <input type="text" class="form-control" name="weight" placeholder="Weight" required>
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Units</label>
                                        <input type="text" class="form-control" name="units" placeholder="Units" required>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <!-- heading -->
                                            <h4 class="mb-3 h5">Product Images</h4>
                                            <!-- input -->
                                            <input type="file" name="photo" class="form-control">
                                        </div>
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3">
                                        <h4 class="mb-3 h5">Product Descriptions</h4>
                                        <textarea class="form-control" name="description" rows="4" placeholder="Product Description"></textarea>
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="Address">
                                    </div>
                                    <!-- input -->
                                 
                                    <!-- button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Create Product</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        
                    <!-- Remaining HTML for the right-hand side (Price, Meta Data, etc.) remains unchanged -->
        
                </div>
            </div>
        </main>
@endsection