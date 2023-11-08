<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, Crud!</title>
  </head>
  <body>
      <div class="text-center">
        <h1>Task</h1>
      </div>

      <div class="container">
        <form method="POST" action="{{ route('update') }}">
          @csrf
            <input type="text" name="data_id" hidden value="{{ $home->id }}">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ID</label>
              <input type="text" name="id" class="form-control"  required value="{{ $home->id }}">
              
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tittle</label>
                <input type="text" name="tittle" class="form-control" required value="{{ $home->tittle }}">
              </div>

              
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">description</label>
                <input type="text" name="description" class="form-control"  required value="{{ $home->description }}">
              </div>
            
          
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
