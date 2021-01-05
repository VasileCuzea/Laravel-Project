<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Eco_Project')}}</title>  
    </head>
    <body class="antialiased">
      <h1>Welcome to Eco Project</h1>    
      <h2>Edit Address</h2> 

      @if(session()->has('success'))
      {{session()->get('success')}}
      @endif
      
    {!! Form::open(['action' => 'AddressController@updateAddress', 'method' => 'POST']) !!}
        @csrf
        <div>
            <div> 
            {{ Form::hidden('ID', $addressData->ID) }}
            </div>
            <div>
            {{Form::text('line_1', $addressData->line_1, ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
            
            <div>
            {{Form::text('line_2', $addressData->line_2, ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
            
            <div>
            {{Form::text('line_3', $addressData->line_3, ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
           
            <div>
            {{Form::text('county', $addressData->county, ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
           
            <div>
            {{Form::text('post_code', $addressData->post_code, ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
           
            <div>
            {{Form::text('country', $addressData->country, ['class' => 'form-control', 'placeholder' => ''])}}
            </div>
            <div>
                <td> <a href="address-list/"><input type="submit" name="update" 
                    value="Update" class="btn-primary"></a> </td>

                    <td><a href="http://127.0.0.1:8000" class="btn btn-default">Back</a></td>
            </div>           
        </div>       
    {!! Form::close() !!}
</body>
</html>