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
            </div>
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
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody class="list">
                     @foreach ($result as $data)
                        <tr>
                           <td>{{ $data->id }}</td>
                           <td>{{ $data->team_name }}</td>
                           <td>
                              <span class="badge bg-warning">{{ $data->status }}</span>
                           </td>
                           <td>
                              @foreach ($data->teamDetail as $peserta)
                                 {{ $peserta->name }} <br />
                              @endforeach
                           </td>
                           <td>{{ $data->school_name }}</td>
                           <td>

                              <a href="#team_{{ $data->id }}" class="btn btn-google-plus" data-toggle="modal">Show Detail Verifikasi</a>

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
                                                         <img class="card-img-top" src="{{ asset('images/'.$peserta->images) }}" alt="Image placeholder">
                                                         <!-- Card body -->
                                                         <div class="card-body">
                                                            <h5 class="h2 card-title mb-0">{{ $peserta->role }} : {{ $peserta->name }}</h5>
                                                            <p class="card-text mt-4">Email : {{ $peserta->email }}</p>
                                                            <p class="card-text mt-4">Phone Number : {{ $peserta->phone_number }}</p>

                                                         </div>
                                                      </div>
                                                   </div>
                                                @endforeach
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                             <a href="#!" class="btn btn-facebook my-2">Verifikasi Data</a>
                                             <a href="#!" class="btn btn-pinterest my-2">Tolak Verifikasi</a>
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
                     <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">
                           <i class="fas fa-angle-left"></i>
                           <span class="sr-only">Previous</span>
                        </a>
                     </li>
                     <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                     </li>
                     <li class="page-item">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item">
                        <a class="page-link" href="#">
                           <i class="fas fa-angle-right"></i>
                           <span class="sr-only">Next</span>
                        </a>
                     </li>
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

   </script>
@endsection
