
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'ecobrz')}}</title>  
    </head>
    <body class="antialiased">
      <h1>Welcome to Eco Project</h1><br />    
      <h2>Address List</h2> 

         <table style="width:1000px; text-align:left" id="allAddresses">
           <thead>
            <style>
              table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
              }
              
              td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
              }
              
              tr:nth-child(even) {
                background-color: #00FFFF;
              }
              </style>
              
             <tr>
               <th>ID</th>
               <th>Address Line 1</th>
               <th>Address Line 2</th>
               <th>Address Line 3</th>
               <th>County</th>
               <th>Post Code</th>
               <th>Country</th>
               <th>Edit</th>
               <th>Delete</th>
             </tr>
           </thead>

          <tbody>
            @foreach ($addressData['addressData'] as $address)
            <tr>
              <td>{{ $address[0] }}</td>
              <td>{{ $address[1] }}</td>
              <td>{{ $address[2] }}</td>
              <td>{{ $address[3] }}</td>
              <td>{{ $address[4] }}</td>
              <td>{{ $address[5] }}</td>
              <td>{{ $address[6] }}</td>
              
              <td> <a href="address-edit/{{ $address[0] }}"><input type="submit" name="update" 
                value="Edit" class="btn-primary" style="background-color:#33AAFF"></a> </td>     
                      
              <td> <a href="address-list/{{ $address[0] }}"><input type="submit" name="delete" 
                value="Delete" class="btn-danger" style="background-color:#FF0000"></a> </td>
              </tr>
             
             @endforeach
          </tbody>
         
         </table> 


        <form><br />       
          <a href="/address-add" class="btn btn-default">Add New Address</a>
        </form>

    </body>
</html>
