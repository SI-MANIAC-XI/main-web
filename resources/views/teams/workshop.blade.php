@extends('layouts.mainweb')

@section('title')
    Workshops
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/workshop.css') }}">
@endsection

@section('content')
    <div class="container workshop-container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            @php  $i = 1; @endphp
            @foreach ($workshop as $w)
                <div class="col-lg-6 col-sm-12 mb-3">
                    <div class="card mx-auto workshop-card" style="">
                        <h4>{{ $w->name }}</h4>
                        <p>
                            @php $date = date_create($w->date); @endphp
                            {{ date_format($date, "d F Y") }}
                        </p>
                        <button type="button" class="btn myBtn dark" data-bs-toggle="modal" data-bs-target="#modal{{ $i }}">
                            Register
                        </button>
                    </div>
                </div>
                @php $i++ @endphp
            @endforeach
        </div>
    </div>

    @php  $i = 1; @endphp
    @foreach ($workshop as $w)
        <div class="modal fade" id="modal{{ $i }}" tabindex="-1" aria-labelledby="modal{{ $i }}Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">       
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#a0583a; color: #eceeca; font-weight: 600">
                        <h5 class="modal-title" id="modal1Label">{{ $w->name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('register_workshop') }}" method="POST">
                        @csrf
                        <input type="hidden" name="workshopId" value="{{ $w->id }}">
                        <div class="modal-body" style="background-color:#eceeca">
                            @php $j = 1 @endphp
                            @foreach ($team->teamDetail as $item)
                                <div class="d-flex align-items-center mb-1">
                                    <input type="checkbox" name="peserta{{ $j }}" value="{{ $item->id }}" class="mx-2 myChkbox" style="opacity: 1; margin-bottom: 0;"
                                        @if ($i == 1)
                                            @for ($k = 0; $k < 3; $k++)
                                                @if (isset($teamWorkshop1[$k]))
                                                    @if ($teamWorkshop1[$k]->id == $item->id)
                                                        {{ 'checked disabled' }}
                                                        @break
                                                    @endif
                                                @endif
                                            @endfor
                                        @elseif($i == 2)
                                            @for ($k = 0; $k < 3; $k++)
                                                @if (isset($teamWorkshop2[$k]))
                                                    @if ($teamWorkshop2[$k]->id == $item->id)
                                                        {{ 'checked disabled' }}
                                                        @break
                                                    @endif
                                                @endif
                                            @endfor
                                        @endif
                                    >  
                                    <label>{{ $item->name }}</label><br>
                                </div>
                                @php $j++ @endphp
                            @endforeach
                        </div>
                        <div class="modal-footer" style="background-color:#eceeca">
                            <button type="submit" name="btnSubmit" value="submit" class="btn myBtn w-100">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @php $i++ @endphp
    @endforeach
@endsection