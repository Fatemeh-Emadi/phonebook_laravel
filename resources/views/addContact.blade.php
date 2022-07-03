<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    </head>
    <body class="text-light" >

<form action="add-contact" method="post">
<div class="container bg-dark  rounded-3">
<div class="row mt-5">
  <h2 class="mt-3 ms-5" >Add New Contact</h2>
</div>
<div class="row mt-4">
  <div class="col">
  <label for="inputEmail4" class="form-label mt-4 ms-2"  >First Name</label>
    <input type="text" class="form-control ms-2"  aria-label="First name" name="name" >
  </div>
  <div class="col">
  <label for="inputEmail4" class="form-label mt-4 ms-2" >Last Name</label>
    <input type="text" class="form-control ms-2"  aria-label="Last name" name="family">
  </div>
</div>
<div class="row mt-5">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label ms-2" >Email</label>
    <input type="email" class="form-control ms-2" id="inputEmail4" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label ms-2" >Mobile Number</label>
    <input type="text" class="form-control ms-2" id="inputPassword4" name="mobile">
  </div>
</div>
<div class="row mt-5 ">
  <div class="col-md-6 mb-5 ">
    <label for="inputPassword4" class="form-label ms-2" >Phone Number</label>
    <input type="text" class="form-control ms-2" id="inputPassword4" name="phone">
  </div>
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="col-md-6 ">
  <input type="submit" class="btn btn-primary mt-4 ms-5" id="btn1" value="save">
  </div>
</div>

</div>


</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    
 </body>
</html>