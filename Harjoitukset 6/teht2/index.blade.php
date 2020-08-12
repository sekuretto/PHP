@extends('layouts.app')

@section('customers')
<h1>Customers</h1>
    <div class="container">
      <table >
        <tr><th>Name</th><th>Birth date</th><th>Created at</th></th></tr>
        @foreach ($customers as $customer)
      <tr>
        <td>
             <a href='customers/{{ $customer->id}}'>
             {{ $customer->name }}
             </a>
         </td>
        <td>{{ $customer->birth_date }}</td>
        <td>{{ $customer->created_at }}</td>
      </tr>
      @endforeach
    </table>
    </div> 
@endsection