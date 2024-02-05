@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><strong> {{ __('aniversarios') }}</strong></div>
                    <div class="card-body">
                        <div class="row justify-content-center aling-items-center ">
                            <div class="col-md-6">
                                @if ($update)
                                    <h5 class="h5 text-center">Ultima actualización: {{ $update->created_at }}</h5>
                                    <h5 class="h5 text-center">Personal aniversarios: {{ $personal }}</h5>
                                @endif
                                <form action="{{ route('file-import-anniversary') }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="container-input">
                                      <input type="file" name="file" id="file-1" class="inputfile inputfile-1"
                                          data-multiple-caption="{count} archivos seleccionados" multiple />
                                      <label for="file-1">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20"
                                              height="17" viewBox="0 0 20 17">
                                              <path
                                                  d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                              </path>
                                          </svg>
                                          <span class="iborrainputfile">Seleccionar archivo</span>
                                      </label>
                                      <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <button type="submit" class="btn">IMPORTAR</button>
                                        </div>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                        <div class="row table-responsive ">
                            <table class="table text-center">
                                <thead class="">
                                    <tr>
                                        <th style="background-color: #fff" class="col-md-3">NOMBRE</th>
                                        <th style="background-color: #fff" class="col-md-3">CORREO</th>
                                        <th style="background-color: #fff" class="col-md-2">DIA INGRESO</th>
                                        <th style="background-color: #fff" class="col-md-2">MES INGRESO</th>
                                        <th style="background-color: #fff" class="col-md-2">AÑO INGRESO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($anniversaries as $a)
                                    <tr>
                                        <td style="background-color: #fff" class="col-md-4">{{$a->name}}</td>
                                        <td style="background-color: #fff" class="col-md-3">{{$a->email}}</td>
                                        <td style="background-color: #fff" class="col-md-1">{{$a->day}}</td>
                                        <td style="background-color: #fff" class="col-md-3">{{$meses[(int)$a->month]}}</td>
                                        <td style="background-color: #fff" class="col-md-1">{{$a->year}}</td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="justify-content-center pagination pagination-sm">
                          {!! $anniversaries->links() !!}
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
