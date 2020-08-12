@extends('layouts.app')

@section('customers')
    <h1>Add Customer</h1>

    <form method="POST" action="../customers">

      {{ csrf_field() }}

      <div class="info">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"  {!! $errors->has('name') ? 'style="background-color: #faa"' : ''!!} placeholder="Customer Name" value="{{old('name')}}"><br>
        <br>
        <label for="birthdate">Birthday:</label>
        <input type="text" id="birthdate" name="birth_date" value="1999-09-09">
        <br><br>
         <button type="submit">Save</button>
       </div>
     </form>

     @if ($errors->any())

       <div style='background-color: #faa;'>
      <ul>
            @foreach ($errors->all() as $error)
          <li style="list-style-type: none"> {{ $error }}</li>
        @endforeach
          </ul>
       </div>
    @endif
@endsection