@extends('admin.master.master')

@section('title')
	Brand
@endsection

@section('body')
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Brand</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Brand</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content"> 
      <div class="container-fluid">
      <div class="row">
      	<div class="col-md-12">
      		<div class="card" style="">
  
        
    <form method="post" action="{{route('brand.store')}}">
      @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Brand name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" }}>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <select name="status" class="form-control" id="exampleFormControlSelect1" }}>
      <option value="1">Active</option>
      <option value="0">INactive</option>
     
    </select>
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>

  
</form>

</div>
      	 </div>
      </div>
      </div>
      	
     </section>

@endsection