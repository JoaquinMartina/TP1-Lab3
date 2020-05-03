@section('content')

    @extends('layouts.information')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{__('Información Plazo Fijo')}}</div>

                    @if(isset($dataPeriod))
                        <div class="card-body">

                            <div class="row form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Nombre y Apellido:')}}</label>
                                <div class="row-cols-lg-1">
                                    <label for="nameSurname" class="col-md-4 col-form-label text-md-right"><strong>{{$dataTimeDeposits['nameSurname']}}</strong></label>
                                </div>
                            </div>

                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th>{{__('Período')}}</th>
                                    <th>{{__('Monto Inicial ($)')}}</th>
                                    <th>{{__('Monto Final ($)')}}</th>
                                </tr>
                                </thead>
                                @foreach($dataPeriod as $itemPeriod)
                                    <tbody>
                                    <tr>
                                        <th scope="row">{{$itemPeriod['numberPeriod']}}</th>
                                        <td>{{$itemPeriod['initialAmount']}}</td>
                                        <td>{{$itemPeriod['finalAmount']}}</td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                        </div>
                    @else
                        <div class="card-body justify-content-center">
                            <div class="row form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Nombre y Apellido:')}}</label>
                                <div class="row-cols-lg-1">
                                    <label for="nameSurname" class="col-md-4 col-form-label text-md-right"><strong>{{$dataTimeDeposits['nameSurname']}}</strong></label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="amountDeposited" class="col-md-4 col-form-label text-md-right">{{__('Monto invertido:')}}</label>
                                <div class="row-cols-lg-1">
                                    <label for="amountDeposited" class="col-md-4 col-form-label text-md-right"><strong>$ {{$dataTimeDeposits['amountDeposited']}}</strong></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="days" class="col-md-4 col-form-label text-md-right">{{__('Cantidad de dias:')}}</label>
                                <div class="row-cols-lg-1">
                                    <label for="days" class="col-md-4 col-form-label text-md-right"><strong>{{$dataTimeDeposits['days']}}</strong></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="finalAmount" class="col-md-4 col-form-label text-md-right">{{__('Monto final recibido:')}}</label>
                                <div class="row-cols-lg-1">
                                    <label for="finalAmount" class="col-md-4 col-form-label text-md-right"><strong>$ {{$dataTimeDeposits['finalAmount']}}</strong></label>
                                </div>
                            </div>
                            @endif

                        </div>
                </div>
            </div>
        </div>
    </div>


@endsection

