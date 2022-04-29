<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Model Relations</title>
  </head>
  <body>
    

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2 class="mt-2 mb-2 text-center">One to one relationship</h2>
                <table class="table table-border">
                    <thead>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                    </thead>
                    <tbody>
                        @foreach($user as $info)
                        <tr>
                            <td>{{$info->name}}</td>
                            <td>{{$info->address->address}}</td>
                            <td>{{$info->phone->phone}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>