@extends('dashboard')
 
@section('MainContent')
<div class="card mb-4">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h4 class="card-title text-primary">Selamat Datang {{ Auth::user()->name }}</h4>

                            <p class="mb-4">
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <!-- <img src="{{asset('sneat/img/man-with-laptop-light.png')}}" height="140"
                                 alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                 data-app-light-img="illustrations/man-with-laptop-light.png"> -->
                        </div>
                    </div>
                </div>
            </div>
@endsection