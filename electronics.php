<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCMA - ELECTRONICS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />
  </head>
  <style>
    form {
      margin-top: 5vh;
    }
    .cont{
      display:block;
      width: 98%;
      margin:auto;
      background-color: #ddd;
    }
    /* desktop screen */
    @media only screen  and (min-width: 600px) {
      .cont{
      width: 50%;
    }
    }
  </style>
  <body> 
    <div class="container-fluid cont">
      <form action="">
        <div class="mb-3">
          <label for="cty" class="cty">Country</label>
          <label for="state" class="state">State</label>
          <label for="reg" class="reg">Region</label>
          <label for="old-grp" class="old_grp">Old Group</label>
          <label for="grp" class="grp">Group</label>
        </div>
        <div class="row">  
          <div class="col-9">
            <label for="" class="">Amplifiers</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
         <div class="row">
         <div class="col-9">
            <label for="" class="">Loudspeakers</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
         </div>
       <div class="row">
       <div class="col-9">
            <label for="" class="">Unspeakers</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
       </div>
       <div class="row">
          <div class="col-9">
            <label for="" class="">Scanners</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-9">
            <label for="" class="">Portable Speaker</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-9">
            <label for="" class="">Satelite Receivers</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-9">
            <label for="" class="">Mixers</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-9">
            <label for="" class="">TV screen</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-9">
            <label for="" class="">Mixer Amplifiers</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-9">
            <label for="" class="">Mic Stands</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-9">
            <label for="" class="">Microphones</label>
          </div>
          <div class="col-3 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <!-- buttons -->
          <div class = "row my-5">
        <div class =' col-3'>
        <button class = "btn btn-danger">reset</button>
        </div>
        <div class =' col-6'>
        
        </div>
        <div class =' col-3'>
        <button class = "btn btn-success">Submit</button>
        </div>
      </div>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
