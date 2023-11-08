<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  </head>
  <body>
      <div class="text-center">
    
        <br>
        <a href="{{ route('create') }}">
          <button class="btn btn-md btn-success"> Create</button>
        </a>


      </div>

     

      <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Customer ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Area</th>
                <th scope="col"> Contact Number</th>
                <th scope="col"> Previous Due</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @php $i=1 @endphp
                    @foreach ($students as $student)
        
              <tr>
        
                <td>{{ $student->Customer_id }}</td>
                <td>{{ $student->Name }}</td>
                <td>{{ $student->address }} </td>
                <td>{{ $student->number }} </td>
             
                <td>{{ $student->due }} </td>
               
                <td>
                    <div class="btn-group">
                      <a href="{{ route('edit', $student->id) }}">
                        <button class="btn btn-md btn-success me-1 p-1">edit</button>
                      </a>

                    <form action="{{route('delete')}}" method="POST" onclick="return confirm('are you sure !!!')">
                        @method('DELETE')
                        @csrf
                        <input type="text" name="student_id" value="{{ $student->id }}" hidden>
                      <button class="btn btn-md btn-danger  p-1">delete</button>
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
