<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Metahakupalvelu</title>
  <style>
    .container {
      text-align: center;
      margin: auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Metahakupalvelu</h2>
    <form method="GET" action="" target="_blank">
      <input type=text size="30" id="hakusanat" name="hakusanat" pattern="[A-Za-z0-9]{5,30}" title="Vain [A-Za-z0-9]{5,30} hyväksytään" value="" {!! $errors->has('haku') ? 'style="background-color: #faa"' : ''!!}>
      <select id="engine" name="engine">
        <option value="google">Google</option>
        <option value="bing">Bing</option>
      </select>
      <input type="submit" value="Etsi">
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

  </div>
</body>
</html>