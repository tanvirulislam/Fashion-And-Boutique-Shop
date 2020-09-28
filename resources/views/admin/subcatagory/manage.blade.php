@extends('admin.master.master')

@section('title')
Subcatagory
@endsection

@section('body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Subcatagory</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          {{-- <li class="breadcrumb-item active">Catagory</li>  --}}
          <li class="breadcrumb-item active">Subcatagory</li>
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
          <div class="col-md-3">
           <a href="{{route('subcatagory.create')}}" type="button" class="btn btn-success">Add </a>
         </div>
       </div>
     </div>
     <div class="card-body">
      <table class="table table-bordered">
        <thead>

          <tr>
            <th scope="col">id</th>
            <th scope="col">Catagory name</th>
            <th scope="col">subcatagory name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody >
          @php($i=1)
          @foreach($subcatagory as $subcat)
          <tr>
            <th scope="row">{{ $i++ }}</th>


            <td>
              @foreach($catagory as $cat)
              @if($cat->id == $subcat->Catagory_id)
              {{ $cat->Catagory }}
              @endif
              @endforeach
            </td>
            <td>
              {{$subcat->Subcatagory}}
            </td>
            <td>
              @if($subcat->Status ==1)
              active
              @else
              inactive
              @endif
            </td>

            <td>
              <button  type="button" class="btn btn-danger text-light" onclick="deleteTag({{ $subcat->id }})"><i class="fas fa-trash-alt"></i></button>
              <form id="delete-form-{{ $subcat->id }}" action="{{ route('subcatagory.delete',['id'=>$subcat->id]) }}" method="POST" style="display: none;">
                @csrf
              </form>
              <a href="{{ route('subcatagory.edit',$subcat->id) }}" type="button" class="btn btn-info text-light"><i class="fas fa-edit"></i></a>

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