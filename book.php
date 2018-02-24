<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8" >
        
        <title>Book Ticket</title>
        
        <link rel="icon" href="img/Logox.jpeg">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="css/book-style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </head>
    
    <?php include 'conn.php'; ?>

    <body>
        
        <nav class="navbar navInverse">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="index.html"><img src="img/Logox.jpeg"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html" title="Home" class="hvr-underline-from-left">Home</a></li>
                      <li><a href="parteners.html" title="Partners" class="hvr-underline-from-left">Partners</a></li>
                      <li><a href="About.html" title="About" class="hvr-underline-from-left">About</a></li>
                      <li><a href="plan.html" title="Event Plan" class="hvr-underline-from-left">Event Plan</a></li>
                      <li class="bookbtn"><a href="#" title="BOOKNOW">BOOKNOW</a></li>

                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
        <a href="book-Ar.html" title="Arabic" class="lang"><img src="img/AR.png"></a>
        <div class="section" id="section4">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 offset-0 col-xs-12">

                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                
                                <h1>Book <span>T</span>icket</h1>
                                
                                <label>Contact Information<span>&#42;</span></label>
                                
                                <input type="text" placeholder="First Name" required name="firstname">
                                
                                <input type="text" placeholder="Last Name" required name="lastname">
                                
                                <input type="text" placeholder="Title" required name="title">
                                <input type="text" placeholder="Mobile" required name="mobile">
                                <input type="text" placeholder="Business Email" required name="email">
                                
                                <label>Company Information<span>&#42;</span></label>
                                
                                <input type="text" placeholder="Company Name" required name="companyname">
                                
                                <input type="text" placeholder="Country" required name="country">
                                
                                <input type="text" placeholder="Company Size" required name="companysize">
                                
                                <input type="text" placeholder="Company Phone" required name="companyphone">
                               <!--
                                 <label class="custom-file-upload">
                                    <input type="file"/>
                                     Company Profile <span>Upload</span>
                                </label>
                                -->
                                <input type="text" placeholder="Company Website" name="companywebsite">
                                
                                <textarea placeholder="How did you hear about us?" name="heardaboutus"></textarea>
                                
                                <input type="submit" value="BOOKNOW" class="bookbtn" name="action">
                            </form>
                       
                       
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6 col-md-offset-3 offset-0 col-xs-12 social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook" aria-hidden="true"></a></li>
                                    <li><a href="#" class="fa fa-twitter" aria-hidden="true"></a></li>
                                    <li><a href="#" class="fa fa-instagram" aria-hidden="true"></a></li>
                                    <li><a href="#" class="fa fa-youtube-play" aria-hidden="true"></a></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        
<?php

if(isset($_POST['action']))
    {
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$title = $_POST['title'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$CompanyName = $_POST['companyname'];
$Country = $_POST['country'];
$CompanySize = $_POST['companysize'];
$CompanyPhone = $_POST['companyphone'];
$CompanyWebsite = $_POST['companywebsite'];
$heardaboutus = $_POST['heardaboutus'];


$qq="insert into forms (firstname , lastname , title ,mobile, email , companyname, country,  companysize, companyphone, companywebsite, heardaboutus) 
values ('$firstname' , '$lastname' , '$title' , '$mobile' ,'$email' ,'$CompanyName','$Country', '$CompanySize', '$CompanyPhone', '$CompanyWebsite','$heardaboutus')";
 mysqli_query($conn , $qq);
    
    }

?>


    </body>
</html>