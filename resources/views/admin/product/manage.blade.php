@extends('admin.master.master')

@section('title')
product
@endsection

@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Product</li> 

        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content"> 
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <div class="card" style="">
        <div class="card-header">
         <div class="row">
          <div class="col-md-3">
           <a href="{{route('product.create')}}" type="button" class="btn btn-success">Add </a>
         </div>
       </div>
     </div>
     <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" >
        <thead>

          <tr>
            <th scope="col">id</th>
            <th scope="col">Product Image</th>
            <th scope="col">Catagory Name</th>
            <th scope="col">Subcatagory Name</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Description</th>
            <th scope="col">Product Color</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody >

          @php($i=1)
          @foreach($product as $product_var)
          <tr>
            <th scope="row">{{ $i++ }}</th>
            <td><img src="{{asset('/')}}{{$product_var->picture}}" width="70px" height="70px">
            </td>
            <td>
              @foreach($catagories as $catagory)
              @if($catagory->id==$product_var->Catagory_id)
              {{$catagory->Catagory}}
              @endif
              @endforeach

            </td>
            <td>
              @foreach($subcat as $subcatagory)
              @if($subcatagory->id==$product_var->subcatagory_id)
              {{$subcatagory->Subcatagory}}
              @endif
              @endforeach
            </td>
            <td>
              {{$product_var->productname}}
            </td>
            <td>
              {{$product_var->productdis}}
            </td>
            <td>
              {{$product_var->color}}
            </td>
            <td>
              {{$product_var->price}}
            </td>
            <td>

              @if($product_var->status ==1)
              active
              @else
              inactive
              @endif
            </td>

            <td>
              <a href="{{ route('product.edit',$product_var->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-edit"></i></a>
            </td>
            
            <td>
              <button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $product_var->id }})"><i class="fas fa-trash-alt"></i></button>
              <form id="delete-form-{{ $product_var->id }}" action="{{ route('product.delete',$product_var->id) }}" method="POST" style="display: none;">
                @csrf
              </form>             
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
        </div>
      
    </div>
  </div>
</div>
</div>
</div>

</section>

<script type="text/javascript">
  function deleteTag(id) {
    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger',
      buttonsStyling: false,
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        event.preventDefault();
        document.getElementById('delete-form-'+id).submit();
      } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                    ) {
        swal(
          'Cancelled',
          'Your data is safe 🙂',
          'error'
          )
      }
    })
  }
</script>
@endsection