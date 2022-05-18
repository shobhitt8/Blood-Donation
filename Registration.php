<?php

require_once 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["name"];
  $bloodgrp = $_POST["bloodgrp"];
  $state = $_POST["state"];
  $district = $_POST["district"];
  $num = $_POST["phone"];

  $query = "INSERT into users (full_name, bloodgroup, state,district, phone) VALUES ('$name', '$bloodgrp', '$state', '$district', '$num')";
  $result = mysqli_query($con, $query);
  if($result){
     //echo "You are registered Successfully.";
     //echo "Go to Sign In Page.<a href='sign-in.php'>Link</a>";
     echo'<div class="alert alert-success" role="alert">';
     echo'<h4 class="alert-heading">Well done!</h4>';
     echo'<p>You have successfully registered.Thank you!!!!</p>';
     echo'</div>';
  }
  else{
     echo "Something went wrong";
  }
}

mysqli_close($con);

?>

 <!DOCTYPE html>

 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Registration</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <script src="myindex.js"></script>
   </head>
   <body>
     <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Enter Your Details Below->></p>


                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="fname" required />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <!--  <input type="text" id="form3Example3c" class="form-control" name="bloodgrp" />
                      <label class="form-label" for="form3Example3c">Blood Group</label> -->
                      <input list="bloodgrp"  id="form3Example3c" class="form-control" name="bloodgrp" placeholder="Blood Group" required>
                    <datalist id="bloodgrp">
                    <option value="A+">
                    <option value="A-">
                    <option value="B+">
                    <option value="B-">
                    <option value="AB+">
                    <option value="AB-">
                    <option value="O+">
                    <option value="O-">

                      </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                  </datalist>
                  <label  for="form3Example3c">Blood Group</label>

                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <!--  <input type="text" id="form3Example4c" class="form-control" name="state"/>
                      <label class="form-label" for="form3Example4c">State</label> -->
                      <input list="state"  id="form3Example3c" class="form-control" name="state" placeholder="State" required>
                     <datalist id="state">
                     <option value="Andhra Pradesh">
                     <option value="Arunachal Pradesh">
                     <option value="Andaman and Nicobar">
                     <option value="Assam">
                     <option value="Bihar">
                     <option value="Chattisgarh">
                     <option value="Dadra and Nagar Haveli">
                     <option value="Daman and Diu">
                     <option value="Delhi">
                     <option value="Goa">
                     <option value="Gujrat">
                     <option value="Haryana">
                     <option value="Himachal Pradesh">
                     <option value="Jammu and Kashmir">
                     <option value="Jharkhand">
                     <option value="Karnataka">
                     <option value="Kerala">
                     <option value="Lakshadweep">
                     <option value="Madhya Pradesh">
                     <option value="Maharashtra">
                     <option value="Manipur">
                     <option value="Meghalaya">
                     <option value="Mizoram">
                     <option value="Nagaland">
                     <option value="Odissa">
                     <option value="Puducherry">
                     <option value="Punjab">
                     <option value="Rajasthan">
                     <option value="Sikkim">
                     <option value="Tamil Nadu">
                     <option value="Telangana">
                     <option value="Tripura">
                     <option value="Uttar Pradesh">
                     <option value="Uttarakhand">
                     <option value="West Bengal">
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </option>
                     </datalist>
                     <!--  <input type="text" id="form3Example4c" class="form-control" name="state"/> -->
                         <label  for="form3Example4c">State</label>


                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4cd" class="form-control" name="district" required/>
                      <label class="form-label" for="form3Example4cd">District</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="tel" id="form3Example4cd" class="form-control" name="phone" required/>
                      <label class="form-label" for="form3Example4cd">Your Contact Number</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                      required
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary mb-2" name="submit" value="Register" onclick= "validateForm()">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="br.jpg" class="img-fluid" alt=" image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--INSERT INTO `donors` (`S No.`, `Name`, `Blood Group`, `State`, `District`, `Phone`) VALUES ('1', 'Amit Kumar', 'O positive', 'UP', 'Lucknow', '7376839859');-->


   </body>
 </html>
