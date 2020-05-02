@section('content')

    @extends('layouts.information')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{__('Información Plazo Fijo')}}</div>

                        <div class="card-body justify-content-center">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Nombre y Apellido:')}}</label>
                                <div class="row-cols-lg-1">
                                    <label for="nameSurname" class="col-md-4 col-form-label text-md-right"><strong>{{$nameSurname}}</strong></label>
                                </div>
                            </div>
                            <div class="form-group row">
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
                            <div class="form-group row">
                                <label for="finalAmount" class="col-md-4 col-form-label text-md-right">{{__('Monto final recibido:')}}</label>
                                <div class="row-cols-lg-1">
                                    <label for="finalAmount" class="col-md-4 col-form-label text-md-right"><strong>$ {{$finalAmount}}</strong></label>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


@endsection
