@extends('layouts.admin')
@section('content')
<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Unit</h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <!-- <li class="breadcrumb-item"><a href="javascript:void()">Forms</a>
                            </li> -->
                            <li class="breadcrumb-item active">Unit
                            </li>
                        </ol>
                    </div>
                </div>

                @if($message = Session::get('sukses'))
                <div class="alert alert-primary alert-dismissible fade show" style="margin-top:20px;">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button> <strong>{{$message}}</strong></div>
                @endif

                <div class="row" style="margin-top:20px;">
                    <div class="col-xl-12">
                        <div class="col-lg-12">
                            <div class="card button-card">
                                <div class="card-body">
                                    {{-- <h4 class="card-title card-intro-title">Button with icons</h4> --}}
                                    <center>
                                    <div class="button-icon">
                                    <a href="{{route('unit_tambah')}}" class="btn btn-rounded btn-info"><span class="flaticon-add"> </span>Tambah Unit</a>
                                        <a href="{{route('kategori_tambah')}}" class="btn btn-rounded btn-warning"><span class="flaticon-shapes"> </span>Cetak</a>
                                       
                                                
                                            </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="datatable" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Unit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($unit as $units)
                                        <tr>
                                            <td>{{$units->id}}</td>
                                            <td>{{$units->unit}}</td>
                                            <td><a href="{{route('unit_hapus', $units->id)}}">Delete</a></td>
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
            <!-- #/ container -->
        </div>
@section('js')

<script src="/gleek/gleek/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="/gleek/gleek/main/js/plugins-init/datatables.init.js"></script>
@endsection
@endsection