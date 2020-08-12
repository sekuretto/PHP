@extends('layouts.app')

@section('customers')
    <h1>Customer</h1>
            <h3>{{ $customer->name }}</h3>
            <p>Birth date: {{ $customer->birth_date }}</p>
          </tr>
@endsection