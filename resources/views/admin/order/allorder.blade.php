@extends('admin.master.master')

@section('title')
order
@endsection

@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Order</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Order</li> 

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
       <p>Order list</p>
     </div>
     <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" >
        <thead>

          <tr>
            <th scope="col">id</th>
            <th scope="col">Order id</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Phone number</th>
            <th scope="col">price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody >

          @php($i=1)
          @foreach($orders as $order)
          <tr>
            <th scope="row">{{ $i++ }}</th>
           
            <td>
             {{$order->pin}}

            </td>
            <td>
              {{$order->Username}}
            </td>
            <td>
              {{$order->phone_num}}
            </td>
            <td>
              {{$order->order_total}}
            </td>
           
            <td>

              @if($order->status ==1)
             conform
              @else
            pending
              @endif
            </td>

            <td>
              <button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $order->id }})"><i class="fas fa-trash-alt"></i></button>
              <form id="delete-form-{{ $order->id }}" action="{{ route('order_delete',$order->id) }}" method="POST" style="display: none;">
                @csrf
              </form>
              <a href="{{ route('order_details',$order->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-eye"></i></a>

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