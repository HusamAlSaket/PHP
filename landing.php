<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <h2 class="text-center mb-4 fw-bold">welcome in </h2> 
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center">
                <img src="https://jihrm.com/themes/new-html/img/login-img.jpg"
                  class="img-fluid d-flex justify-content-center" alt="Landing image">
              </div>
              <div class="col-md-10 col-lg-6 col-xl-5 text-center">
                <p class="h3 mb-5 mt-4">Let's Get Started</p>
                
                <div class="d-flex justify-content-center mb-4">
                <button type="button" class="btn btn-danger btn-lg" 
        style="width: 100%; border-radius: 25px; border: 2px solid #dc3545;" 
        onclick="window.location.href='./login.php';">
    Log In
</button>

                </div>
                
                <div class="d-flex justify-content-center">
                  <button type="button" class="btn btn-primary btn-lg" style="width: 100%; border-radius: 25px; border: 2px solid #007bff;" onclick ="window.location.href='./signup.php'"> Sign Up</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



</body>
</html>