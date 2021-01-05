<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Eco_Project')}}</title>  
    </head>
    <body class="antialiased">
      <h1>Add new Address</h1>
    </body>

    @if(session()->has('success'))
    {{session()->get('success')}}
    @endif

<form method="post" action="{{route('addAddressRoute')}}">
  @csrf
  <input name="line_1" type="text" class ="form-control" placeholder="line 1"><br />
  <input name="line_2" type="text" class ="form-control" placeholder="line 2"><br />
  <input name="line_3" type="text" class ="form-control" placeholder="line 3"><br />
  <input name="county" type="text" class ="form-control" placeholder="county"><br />
  <input name="post_code" type="text" class ="form-control" placeholder="post code"><br />
  <input name="country" type="text" class ="form-control" placeholder="country"><br />
  <button type="submit">SUBMIT</button>
  <a href="http://127.0.0.1:8000" class="btn btn-default">Back</a>
</form>

</html>
