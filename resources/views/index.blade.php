<div class="card mb-2">
  <img height="450px"  src="https://uni-access.com/files/CMS/Product_Service/Student_Database/Section1/std-db.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title bg-warning" >List of students</h5>
    <p class="card-text" >Here is all the information about students in the student system</p>
      <table class="table ">
        <thead class="thead-light bg-light">
          <tr>
            <th scope="col">CNE</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Optimize</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
          <tr>
            <td>{{ $student->cne }}</td>
            <td>{{ $student->firstname }}</td>
            <td>{{ $student->lastlename }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->gender }}</td>
            <td>
              <!-- <a href="#" class="btn btn-sm btn-primary">Show</a>-->
              <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
              <a href="#" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
</div>



