<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Task!</title>
</head>


<body>
  <div class="text-center">
    <h1>Dashboard!</h1>

  </div>
  

  @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


  <div class="container">
    <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col">
          <label for="id" class="form-label">ID</label>
         
          <input type="text" name="id" class="form-control" placeholder="id">
        
         

          <label for="Name" class="form-label"> tittle</label>
          <input type="text" name="tittle" class="form-control" placeholder="tittle">

       

        
        </div>
        <div class="col">
        <label for="description" class="form-label"> description</label>
          <input type="text" name="description" class="form-control" placeholder="description">

        <label for="area" class="form-label">Completed</label>
          <select name="complete" id="area" class="form-control">
            <option value="Yes">Yes</option>
            <option value="no">No</option>
        
          </select>
        </div>
      </div>
      <br>
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-success">Save</button>
      </div>


    </form>
  </div>

  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col"> ID</th>
          <th scope="col"> tittle</th>
          <th scope="col">description</th>
          <th scope="col">complete</th>
       
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @php $i=1 @endphp
        @foreach ($homes as $data)

        <tr>

          <td>{{ $data->id }}</td>
          <td>{{ $data->tittle }}</td>
          <td>{{ $data->description }} </td>
          <td>{{ $data->complete }} </td>
    


          <td>
            <div class="btn-group">
              <a href="{{ route('edit', $data->id) }}">
                <button class="btn btn-md btn-success me-1 p-1"><i class="fas fa-edit"></i></button>
              </a>

              <form action="{{ route('delete') }}" method="POST" onsubmit="return confirm('Are you sure?')">
                @method('DELETE')
                @csrf
                <input type="hidden" name="data_id" value="{{ $data->id }}">
                <button class="btn btn-md btn-danger p-1"><i class="fas fa-trash-alt"></i></button>
              </form>
            </div>
          </td>

        </tr>

        @endforeach

      </tbody>
    </table>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>