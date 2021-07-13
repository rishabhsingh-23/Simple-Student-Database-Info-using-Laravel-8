<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>basic</title>
  </head>
  <body>
  @include("navbar")
  
  <!--<div class="row header-container justify-content-center">
    <div class="header">
      <h1>Students Record </h1>
    </div>
  </div>-->

    @if($layout == 'index')
        <div class="container-fluid mt-4 ">
          <div class="row mt-3">
            <section class="col-md-7">
              @include("index")
            </section>

            <section class="col-md-4"></section>
          </div>
        </div>
      
          
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
          <div class="row mt-2">
            <section class="col-md-7 ">
              @include("index")
            </section>

            <section class="col-md-5">
              <div class="card mb-3">
                <img height="450px"  src="https://www.valueresearchonline.com/content-assets/images/46166_managing-childrens-education__w1200__.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title bg-warning" >Enter the details of the students</h5>
                  <form action="{{ url('/store') }}" method="post">
                    @csrf
                    <div class="form-group mt-3">
                      <label>CNE</label>
                      <input name="cne" type="text" class="form-control"  placeholder="Enter cne">
                    </div>
    
                    <div class="form-group mt-3">
                      <label>First Name</label>
                      <input name="firstname" type="text" class="form-control"  placeholder="Enter firstname">
                    </div>
    
                    <div class="form-group mt-3">
                      <label>Last Name</label>
                      <input name="lastlename" type="text" class="form-control"  placeholder="Enter lastlename">
                    </div>
    
                    <div class="form-group mt-3">
                      <label>Age</label>
                      <input name="age" type="text" class="form-control"  placeholder="Enter age">
                    </div>
    
                    <div class="form-group mt-3">
                      <label>Gender</label>
                      <input name="gender" type="text" class="form-control"  placeholder="Enter the gender">
                      <!--<select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected></option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Third Gender</option>
                      </select>-->
                    </div>
                    <input type="submit" class="btn btn-info mt-3" value="Save">
                    <input type="reset" class="btn btn-warning mt-3" value="Reset">
    
                  </form>
                  
                </div>
              </div>

            </section>
          </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid">
          <div class="row">
            <section class="col">
              @include("index")
            </section>

            <section class="col"></section>
          </div>
        </div>
    @elseif($layout == 'edit')
      <div class="container-fluid mt-4">
        <div class="row mt-2">
          @if(session('success'))
            <div class="alert alert-success">{{ session('success')}}</div>
          @endif
          <section class="col ">
            @include("index")
          </section>

          <section class="col">
            <div class="card mb-2">
              <img height="450px"  src="https://www.valueresearchonline.com/content-assets/images/46166_managing-childrens-education__w1200__.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                
                <h5 class="card-title bg-warning" >Update the information of students</h5>
                <form action="{{ url('/update/'.$student->id) }}" method="post">
                  @csrf
                  <div class="form-group mt-3">
                    <label>CNE</label>
                    <input  value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
                  </div>
    
                  <div class="form-group mt-3">
                    <label>First Name</label>
                    <input value="{{ $student->firstname }}" name="firstname" type="text" class="form-control"  placeholder="Enter firstname">
                  </div>
    
                  <div class="form-group mt-3">
                    <label>Last Name</label>
                    <input value="{{ $student->lastlename }}" name="lastlename" type="text" class="form-control"  placeholder="Enter lastlename">
                  </div>
    
                  <div class="form-group mt-3">
                    <label>Age</label>
                    <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter age">
                  </div>
    
                  <div class="form-group mt-3">
                    <label>Gender</label>
                    <input value="{{ $student->gender }}" name="gender" type="text" class="form-control"  placeholder="Enter the gender">
                    <!--<select class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected></option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                      <option value="3">Third Gender</option>
                    </select>-->
                  </div>
                  <input type="submit" class="btn btn-info mt-3" value="update">
                  <input type="reset" class="btn btn-warning mt-3" value="Reset">
    
                </form>

              </div>
            </div>
          </section>
        </div>
      </div>
     
    @endif
<footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>