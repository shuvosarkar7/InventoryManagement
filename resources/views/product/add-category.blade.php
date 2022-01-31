@extends('layout.app')
@section('content')                    
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Controls Types</h5>
        <form action="" method="POST">
        @csrf
            <div class="position-relative form-group"><label for="name" class="">Name</label><input name="text" id="name" placeholder="Enter Name" type="text" class="form-control" /></div>
            <div class="position-relative form-group">
                <label for="ProductType" class="">Product Type</label>
                <select name="select" id="ProductType" class="form-control">
                    <option value="1">Product type 1</option>
                    <option value="1">Product type 2</option>
                    <option value="1">Product type 3</option>
                    <option value="1">Product type 4</option>
                    <option value="1">Product type 5</option>
                </select>
            </div>
            <div class="position-relative form-group"><label for="description" class="">Description</label><textarea name="text" id="description" class="form-control"></textarea></div>
            <button class="mt-1 btn btn-primary">Add New Product</button>
        </form>
    </div>
</div>
@endsection