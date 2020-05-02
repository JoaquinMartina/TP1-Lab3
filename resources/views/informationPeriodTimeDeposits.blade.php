@section('content')

    @extends('layouts.information')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{__('Información Plazo Fijo')}}</div>

                    <div class="card-body justify-content-center">
                        <div class="row form-group">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Nombre y Apellido:')}}</label>
                            <div class="row-cols-lg-1">
                                <label for="nameSurname" class="col-md-4 col-form-label text-md-right"><strong>{{$nameSurname}}</strong></label>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="amountDeposited" class="col-md-4 col-form-label text-md-right">{{__('Monto invertido:')}}</label>
                            <div class="row-cols-lg-1">
                                <label for="amountDeposited" class="col-md-4 col-form-label text-md-right"><strong>$ {{$amountDeposited}}</strong></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="days" class="col-md-4 col-form-label text-md-right">{{__('Cantidad de dias:')}}</label>
                            <div class="row-cols-lg-1">
                                <label for="days" class="col-md-4 col-form-label text-md-right"><strong>{{$days}}</strong></label>
                            </div>
                        </div>

                        <!-- TODO Refactor -->

                        <div class="card-body">

                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{__('Período')}}</th>
                                        <th>{{__('Monto Inicial ($)')}}</th>
                                        <th>{{__('Monto Final ($)')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$amountDeposited}}</td>
                                    <td>{{$period['period1']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>{{$period['period1']}}</td>
                                    <td>{{$period['period2']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>{{$period['period2']}}</td>
                                    <td>{{$period['period3']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>{{$period['period3']}}</td>
                                    <td>{{$period['period4']}}</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

