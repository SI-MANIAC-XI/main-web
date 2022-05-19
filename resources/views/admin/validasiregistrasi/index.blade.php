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
                        <th scope="col" class="sort" data-sort="id">ID</th>
                        <th scope="col" class="sort" data-sort="team_name">Nama Team</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col">Peserta</th>
                        <th scope="col" class="sort" data-sort="school_name">Nama Sekolah</th>
                        <th scope="col" class="sort" data-sort="school_name">Nama Sekolah</th>
                        <th scope="col" class="sort" data-sort="school_name">School Address</th>
                        <th scope="col" class="sort" data-sort="school_name">School Number</th>
                     </tr>
                  </thead>
                  <tbody class="list">
                     @foreach ($result as $data)
                        <tr>
                           <td>{{ $data->id }}</td>
                           <td>{{ $data->team_name }}</td>
                           <td>
                              @if($data->status=="accepted")
                                 <span class="badge bg-success text-white">{{ $data->status }}</span>
                              @elseif($data->status=="rejected")
                                 <span class="badge bg-danger text-white">{{ $data->status }}</span>
                              @else
                                 <span class="badge bg-primary text-white">{{ $data->status }}</span>
                              @endif
                           </td>
                           <td>
                              @foreach ($data->teamDetail as $peserta)
                                 {{ $peserta->name }} <br />
                              @endforeach
                           </td>
                           <td>{{ $data->school_name }}</td>
                           <td>{{ $data->school_address }}</td>
                           <td>{{ $data->school_number }}</td>
                           <td>
                              <a href="#team_{{ $data->id }}" class="btn btn-twitter" data-toggle="modal">Show Detail Verifikasi</a>
                              <form action="{{ url('deleteteam/'.$data->id) }}" method="POST">
                                 @method('delete')
                                 @csrf
                                 <button class="btn btn-danger mt-3" id="btn-delete">Delete</button>
                              </form>
                                 <!-- Modal -->
                                 <div class="modal fade" id="team_{{ $data->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title">Validasi Team Peserta</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <div class="row">
                                                @foreach ($data->teamDetail as $peserta)
                                                   <div class="col-md-4">
                                                      <div class="card">
                                                         <!-- Card image -->
                                                         <a href="{{ asset('files/'.$peserta->image) }}" target="_blank" 
                                                            style="display:flex; justify-content: center; align-items: center ;width: 50%; height: 40px; 
                                                            border-radius: 5px; margin: 0 auto; background-color: #1da1f2; color: white;
                                                            margin-top: 15px">Check Me</a>
                                                         <!-- Card body -->
                                                         <div class="card-body">
                                                            <h5 class="h2 card-title mb-0">{{ $peserta->role }} : {{ $peserta->name }}</h5>
                                                            <p id="emailTxt" class="card-text mt-4">Email : {{ $peserta->email }}</p>
                                                            <p class="card-text mt-4">Phone Number : {{ $peserta->phone_number }}</p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                @endforeach
                                                {{-- Form Tolak Verifikasi --}}
                                                <div class="col-lg-12">
                                                   <div class="card">
                                                      <div class="card-header">
                                                         <h3 class="mb-0">Tolak Verifikasi</h3>
                                                      </div>
                                                      <div class="card-body">
                                                         <form method="POST" action="{{ url('/dashboardadmin/reject/'.$data->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                               <label class="form-control-label" for="txt-message">Input Message</label>
                                                               <textarea class="form-control" id="txt-message" rows="3" name="message"></textarea>
                                                            </div>
                                                            <input type="hidden" name="status" value="rejected">
                                                            <input type="submit" class="btn btn-pinterest my-2" id="btn-reject" value="Tolak">
                                                         </form>
                                                      </div>
                                                   </div>
                                                </div>
                                                {{-- End Form Tolak Verifikasi --}}
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                             <form method="POST" action="{{ url('/dashboardadmin/confirm/'.$data->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="status" value="accepted">
                                                <input type="submit" class="btn btn-facebook my-2" id="btn-accept" value="Verifikasi Data">
                                             </form>
                                             <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Modal -->
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
