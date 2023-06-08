<!DOCTYPE html>
 <html>
 <head>
 <title>Laravel 9 Pagination Example </title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
 </head>
 <body>
 <div class="container">
     <h3 align="center">Table</h3> <br />
     <div class="row">
     <div class="col-12">
         <div class="table-responsive">
             <table class="table table-striped table-bordered">
             <thead>
                 <tr>
                    <th>No </th>    
                    <th>ID </th>
                    <th>Name </th>
                    <th>Birthday </th>
                    <th>Age </th>
                 </tr>
             </thead>
             <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $datas)
                 <tr>
                  <th scope="row">{{ $datas->id }}</th>
                    <td>{{ $datas->user_id }}</td>
                    <td>{{ $datas->name }}</td>
                    <td>{{ $datas->created_at->toDateString() }}</td>
                    <td>{{ $datas->created_at->diffForHumans() }}</td>
                 </tr>
                @endforeach
            @else
                 <tr>
                     <td colspan="6">There are no data. </td>
                 </tr>
            @endif   
             </tbody>
             </table>
         </div>
     </div>    
     </div>
     <div class="row">{{  $data->withQueryString()->links()  }} </div>
 </div>
 </body>
 </html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>