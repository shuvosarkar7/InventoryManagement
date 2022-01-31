@extends('layout.app')
@section('content')
                        
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Add Sales</h5>
        <form action="" method="POST">
        @csrf
            <div class="position-relative form-group"><label for="name" class="">Name</label><input name="text" id="name" placeholder="Enter Name" type="text" class="form-control" /></div>
            <div class="position-relative form-group">
                <label for="SalesType" class="">Sales Id</label>
                <select name="select" id="SalesType" class="form-control">
                    <option value="1">Sales Id 1</option>
                    <option value="1">Sales Id 2</option>
                    <option value="1">Sales Id 3</option>
                    <option value="1">Sales Id 4</option>
                    <option value="1">Sales Id 5</option>
                </select>
            </div>
            <h5 class="card-title">Status</h5>
            <div class="position-relative form-group">
                <div>
                    <div class="custom-radio custom-control">
                        <input type="radio" id="exampleCustomRadio" name="customRadio" class="custom-control-input" /><label class="custom-control-label" for="exampleCustomRadio">Pending</label>
                    </div>
                    <div class="custom-radio custom-control">
                        <input type="radio" id="exampleCustomRadio2" name="customRadio" class="custom-control-input" /><label class="custom-control-label" for="exampleCustomRadio2">Active</label>
                    </div>
                    <div class="custom-radio custom-control">
                        <input type="radio" id="exampleCustomRadio3" name="customRadio" class="custom-control-input" /><label class="custom-control-label" for="exampleCustomRadio3">Disable</label>
                    </div>
                    <div class="custom-radio custom-control">
                        <input type="radio" id="exampleCustomRadio4" name="customRadio" class="custom-control-input" /><label class="custom-control-label" for="exampleCustomRadio4">On Hold</label>
                    </div>
                </div>
            </div>
            <div class="position-relative form-group"><label for="description" class="">Description</label><textarea name="text" id="description" class="form-control"></textarea></div>
            <button class="mt-1 btn btn-primary">Add New Sales</button>
        </form>
    </div>
</div>
@endsection