@extends('layout.app')
@section('content')            
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Controls Types</h5>
        <form class="">
            <div class="position-relative form-group"><label for="name" class="">Name</label><input name="text" id="name" placeholder="Enter name" type="text" class="form-control" /></div>
            <div class="position-relative form-group"><label for="description" class="">Description</label><textarea name="text" id="description" class="form-control"></textarea></div>
            <button class="mt-1 btn btn-primary">Add New Product Type</button>
        </form>
    </div>
</div>
@endsection