@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><strong> {{ __('plantillas') }}</strong></div>
                <div class="card-body" >
                  <div class="row table-responsive ">
                    <table class="table text-center" >
                        <thead class="">
                          <tr>
                            <th style="background-color: #fff" class="col-md-3">DESCRIPCIÓN</th>
                            <th style="background-color: #fff" class="col-md-3">TIPO</th>
                            <th style="background-color: #fff" class="col-md-3">URL</th>
                            <th style="background-color: #fff" class="col-md-3">ACCIÓN</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ( $plantillas as $plantilla )  
                            <tr>
                              <td style="background-color: #fff" class="col-md-3">{{$plantilla->description}}</td>
                              <td style="background-color: #fff" class="col-md-3">{{$plantilla->type}}</td>
                              <td style="background-color: #fff" class="col-md-3">{{$plantilla->url}}</td>
                              <td style="background-color: #fff" class="col-md-3">
                                <a href="{{$plantilla->url}}" target="_self" style="color: #d63384"><i class="fas fa-eye"></i></a>
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
@endsection
