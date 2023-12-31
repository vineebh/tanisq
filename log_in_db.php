<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tanishq Jewellery</title>
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="bg1">
  <div class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html"><img id="logo"src="img/Tanishqlogo2.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about_us.html">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="products.html">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="log_in_db.php">Log In</a>
                  </li>
                </ul>
                <form action="subscribe.php" method="post">
                <button type="submit" class="btn btn-danger">Subscribe</button>
            </form>
              </div>
            </div>
        </nav>
    </div>
<!--menu-->
    <div id="log_in">
        <form action="" method="post">
        <label for=""><h4>User Name</h4></label><br>
            <input type="text" name="user_name" placeholder="Enter user name" maxlength="250" autofocus required><br><br>
        <label for=""><h4>Passward</h4></label><br> 
            <input type="password" name="passward" required minlength=8 maxlength=8><br><br>
            <button type="submit" class="btn btn-light">Log In</button><br>
        </from>
    </div>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $user=$_POST['user_name'];
            $pw=$_POST['passward'];
            if($user=='shailendra'&&$pw=='Web_Dev4')
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "tata";
    
                $conn = mysqli_connect($servername, $username, $password, $database);
    
                if(!$conn){
                    die("<br>Sorry! We couldn't connect to the Server : ".mysqli_connect_error());
                }
                else{
                    echo "<br><h3><center>Connection Successfully</center></h3>";
                }
                $fetch="select name,query from tanishq";
                $result=mysqli_query($conn,$fetch);
                $num=mysqli_num_rows($result);
                if($num>0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<br><h4>".$row['name']." has a query : ".$row['query']."</h4>";
                    }
                }
            }
            else
            {
                echo"<br><center>Incorrect user name or passward</center>";
            }
        }
    ?>
<!--footer-->
<footer class="bg-dark text-center text-white" id="log">
    <div class="container p-4 pb-0">
      <section class="mb-4">
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/" role="button">
            <img src="favicon/fb.png" alt="Facebook">
        </a>
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/i/flow/login" role="button">
            <img src="favicon/twitter.png" alt="Twitter">
        </a>
        <a class="btn btn-outline-light btn-floating m-1" 
        href="https://accounts.google.com/v3/signin/identifier?dsh=S-1761309485%3A1663470530868120&
        service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AQDHYWolnFulqK72ziLL4rWZM7PMzJMSlFhXzC5D5I1wf_D-ojv
        ATG8WkTDTVHxkAeqxdlw1jIkuLQ" role="button">
            <img src="favicon/mail.png" alt="gmail">
        </a>
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/accounts/login/?" role="button">
            <img src="favicon/insta.png" alt="Instagram">
        </a>
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/login" role="button">
            <img src="favicon/linkd.png" alt="Linkedin">
        </a>
        <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/login" role="button">
            <img src="favicon/git.png" alt="Github">
        </a>
      </section>
    </div>
    <div class="text-center p-3" >
       © 2020 Copyright:
      <a class="text-white" href="index.html">tanishq.com</a>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
  </body>
</html>