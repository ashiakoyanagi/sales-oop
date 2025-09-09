<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>

  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body class="bg-light">
   <div style="height:100vh;">
      <div class="row h-100 m-0">
        <div class="card w-25 my-auto mx-auto">
          <div class="card-header bg-white border-0 py-3">
            <h1 class="text-center">LOGIN</h1>
          </div>

          <div class="card-body">
            <form action="../actions/login.php" method="post">
              <div class="mb-3">
           
              <!-- Bold to add emphasis -->
               <div class="mb-3">
                <label for="username" class="form-label fw-bold">Username</label>
                <input type="text" name="username" id="username" class="form-control fw-bold" placeholder="USERNAME" required>
               </div>

               <div class="mb-5">
                 <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" name="password" id="password" class="form-control"  placeholder="PASSWORD" required>
               </div>

               <button type="submit" class="btn btn-primary w-100">Log in</button>
            </form>

            <p class="text-center mt-3 small">
              <a href="registration.php">Creat an Account</a>
            </p>
          </div>
        </div>
      </div>

   </div>


  
</body>
</html>