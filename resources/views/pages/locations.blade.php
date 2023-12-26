@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-body">
                                <h4 class="card-title">Add New Location Here</h4>
                                <div class="basic-form" method="POST" action="{{route('locations')}}" enctype="multipart/form-data">
                                    <form class="form-inline">
                                    @csrf
                                        
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label class="sr-only">i.e. Dhaka</label>
                                            <input type="text" class="form-control" placeholder="i.e. Dhaka">
                                        </div>
                                        <button type="submit" class="btn btn-dark mb-2">Add Location</button>
                                    </form>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
    {{-- CONTAINER ENDS --}}
</div>
@endsection