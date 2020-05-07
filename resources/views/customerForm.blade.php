@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{__('Solicitud de Cliente')}}</div>

                    <div class="card-body justify-content-center">

                        <form method="POST" action="{{route('sendCustomerForm')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Nombre')}}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{__('Apellido')}}</label>
                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" value="{{old('surname')}}">
                                        @error('surname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="amountDeposited" class="col-md-4 col-form-label text-md-right">{{__('Monto a invertir')}}</label>
                                <div class="col-md-6">
                                    <input id="amountDeposited" type="number" class="form-control" name="amountDeposited" value="{{old('amountDeposited')}}">
                                        @error('amountDeposited')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="days" class="col-md-4 col-form-label text-md-right">{{__('Cantidad de dias')}}</label>
                                <div class="col-md-6">
                                    <input id="days" type="number" class="form-control" name="days" value="{{old('days')}}">
                                        @error('days')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="reinvestment" class="col-md-4 col-form-label text-md-right">{{__('Reinvertir')}}</label>
                                <div class="col-md-1">
                                    <input id="reinvestment" type="checkbox" class="form-control" name="reinvestment" value="true" {{old('reinvestment')}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="numberPeriods" class="col-md-4 col-form-label text-md-right">{{__('Períodos')}}</label>
                                <div class="col-md-6">
                                    <input id="numberPeriods" type="number" class="form-control" name="numberPeriods">
                                        @error('numberPeriods')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-4 justify-content-around">
                                        <button type="submit" class="btn btn-primary">{{__('Calcular')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
