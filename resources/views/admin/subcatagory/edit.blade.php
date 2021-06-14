@extends('admin.master.master')

@section('title')
catagory
@endsection

@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>catagory</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Catagory</li>
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
        <div class="card-header">
         <div class="row">
          
         </div>
       </div>

       <form method="post" action="{{route('subcatagory.update')}}">
        @csrf

 <input type="hidden" name="id" value="{{$subcat->id}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" }}>

        
        <div class="form-group">
          <label for="exampleFormControlSelect1">Catagory name</label>
          <select name="Catagory_id" class="form-control" id="exampleFormControlSelect1" }}>
            @foreach($cat as $catagory1)
            <option value="{{$catagory1->id}}" {{ $catagory1->id == $subcat->Catagory_id ? 'selected' : '' }}>{{$catagory1->Catagory}}</option>
            @endforeach

          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Catagory name</label>
          <input type="text" name="Subcatagory" value="{{$subcat->Subcatagory}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" }}>
         
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Status</label>
          <select name="Status" class="form-control" id="exampleFormControlSelect1" }}>
            <option value="1" {{ $subcat->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $subcat->status == 0 ? 'selected' : '' }}>Inctive</option>

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