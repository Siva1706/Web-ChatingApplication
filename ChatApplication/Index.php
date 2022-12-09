<?php 
  session_start();
  if(isset($_SESSION['unique_id']))// if user is logged in
  {
    header("location:user.php");
  }
?>
<?php include_once "header.php" ?>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>RealTime Chat Application</header>
        <form action="#" enctype ="multipart/form-data">
          <div class="error-txt">This is an error Message!</div>
          <div class="name-details">
            <div class="field input">
              <label>First Name</label>
              <input type="text" name="fname" placeholder="First Name" required/>
            </div>
            <div class="field input">
              <label>Last Name</label>
              <input type="text" name="lname" placeholder="Last Name" required />
            </div>
          </div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter your email" required/>
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password"  name="password" placeholder="Enter new password" required />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label>Select Image</label>
            <input type="file"  name="image" required/>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
        </form>
        <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
      </section>
    </div>
    <script src="javaScript/pass-show-hide.js"></script>
    <script src="javaScript/signup.js"></script>

  </body>
</html>
