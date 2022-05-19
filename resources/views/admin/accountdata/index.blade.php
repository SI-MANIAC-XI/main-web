@extends('layouts.admindashboard')
@section('title')
    Verifikasi Peserta
@endsection
@section('header')
    <div class="header-body">
        <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">Admin</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Verifikasi Team</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection
@section('content')
   <div class="row">
      <div class="col">
         <!-- card table -->
         <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
               <h2 class="mb-0">Verifikasi Team</h2>
               <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                  <p class="col-md-4 mb-0 text-muted">Keterangan Status</p>
                  <ul class="nav class col-md-4 d-flex align-items-center justify-start mb-3 mb-md-0 me-md-auto text-decoration-none">
                     <li class="nav-item">
                        <span class="badge bg-primary text-white">Pending</span>
                     </li>&nbsp;&nbsp;
                     <li class="nav-item">
                        <span class="badge bg-success text-white">Accepted</span>
                     </li>&nbsp;&nbsp;
                     <li class="nav-item">
                        <span class="badge bg-danger text-white">Rejected</span>
                     </li>
                  </ul>
               </div>
            </div>
            @if ( session('status'))
            <div class="alert alert-success">
               {{ session('status') }}
            </div>
            @endif
            <!-- Light table -->
            <div class="table-responsive">
               <table class="table table-hover table-striped align-items-center table-flush">
                  <thead class="thead-light">
                     <tr>
                        <th scope="col" class="sort" data-sort="id">No</th>
                        <th scope="col" class="sort" data-sort="username">Username</th>
                        <th scope="col" class="sort" data-sort="password">Action</th>
                     </tr>
                  </thead>
                  <tbody class="list">
                     @foreach ($result as $data)
                        <tr>
                          <td>
                            {{ $loop->index +1 }}
                          </td>
                          <td>
                              {{ $data->username }}
                          </td>
                          <td>
                            <a href="#team_{{ $data->id }}" class="btn btn-twitter" data-toggle="modal">EditPassword</a>
                            <!--modal-->
                            <div class="modal fade" id="team_{{ $data->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                   <div class="modal-content">
                                      <div class="modal-header">
                                         <h5 class="modal-title">Masukan Password Baru</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                         </button>
                                      </div>
                                      <div class="modal-body">
                                        <form method="POST" action="{{ url('updateAkun/'.$data->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" class="form-control" id="txt-message" name="password">
                                            <input type="submit" class="btn btn-facebook my-2" id="btn-accept" value="Update">
                                         </form>
                                      <div class="modal-footer">
                                         
                                         <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </td>
                        </tr> 
                     @endforeach              
                  </tbody>
               </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
               <nav aria-label="...">
                  <ul class="pagination justify-content-end mb-0">
                     {{ $result->links() }}
                  </ul>
               </nav>
               
            </div>
         </div>
         <!-- END card -->
      </div>
   </div>


@endsection
@section('javascript')
   <script>
      // show confirmation button accepted
      $('#btn-accept').click(function(event) {
         var form = $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
            title:'Are you sure to accepted this team ?',
            text: "pastikan anda sudah validasi data dengan benar.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
         }).then((willaccepted) => {
            if(willaccepted) {
               form.submit();
            }
         });
      });
      // show confirmation button rejected
      $('#btn-reject').click(function(event) {
         var form = $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
            title:'Are you sure to rejected this team?',
            text: "pastikan anda sudah validasi data dengan benar.",
            type: "warning",
            showCancelButton: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
            confirmButtonColor: '#A0583A',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, sure!'
         }).then((willaccepted) => {
            if(willaccepted) {
               form.submit();
            }
         });
      });

      // show confirmation button delete
      $('#btn-delete').click(function(event) {
         var form = $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
            title:'Are you sure to delete this team?',
            text: "pastikan anda menghapus data yang benar.",
            type: "warning",
            showCancelButton: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
            confirmButtonColor: '#A0583A',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, sure!'
         }).then((willaccepted) => {
            if(willaccepted) {
               form.submit();
            }
         });
      });
   </script>
@endsection
