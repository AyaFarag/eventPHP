<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8" >
        
        <title>Book Ticket</title>
        
        <link rel="icon" href="img/Logox.jpeg">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
        <link rel="stylesheet" href="css/book-Ar.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </head>
    <?php include 'conn.php'; ?>
    <body dir="rtl">
        
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
                  <a class="navbar-brand" href="index-AR.html" title="Designers Exhibition"><img src="img/Logox.jpeg"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                  <ul class="nav navbar-nav navbar-left">
                      
                    <li><a href="index-AR.php" title="الرئيسية" class="hvr-underline-from-left ">الرئيسية</a></li>
                      <li><a href="Parteners-Ar.html" title="الشركاء" class="hvr-underline-from-left">الشركاء</a></li>
                      <li ><a href="ar-about.html" title="About" class="hvr-underline-from-left">عن المعرض</a></li>
                      <li class="active"><a href="Plan-Ar.html" title="Event Plan" class="hvr-underline-from-left">خطة المعرض</a></li>
                      <li class="bookbtn"><a href="book-Ar.php" title="إحجز الآن">إحجز الآن</a></li>

                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
        <a href="book.html" title="English" class="lang"><img src="img/EN.png"></a>
        
        <div class="container">
        
        <div class="section" id="section4">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 offset-0 col-xs-12">
                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                
                                <h1>إحجز الآن</h1>
                                
                                <label>معلومات الاتصال<span>&#42;</span></label>
                                
                                <input type="text" placeholder="الأسم الأول..." required name="firstname">
                                
                                <input type="text" placeholder="الأسم الأخير..." required name="lastname">
                                
                                <input type="text" placeholder="العنوان..." required name="title">
                                <input type="text" placeholder="رقم الموبايل..." required name="mobile">
                                <input type="text" placeholder="الإميل..." required name="email">
                                
                                <label>معلومات الشركة<span>&#42;</span></label>
                                
                                <input type="text" placeholder="أسم الشركة..." required name="companyname">
                                
                                <input type="text" placeholder="البلد..." required name="country">
                                
                                <input type="text" placeholder="حجم الشركة" required name="companysize">
                                
                                <input type="text" placeholder="رقم الشركة" required name="companyphone">
                               <!--
                                 <label class="custom-file-upload">
                                    <input type="file"/>
                                     Company Profile <span>Upload</span>
                                </label>
                                -->
                                <input type="text" placeholder="موقع الشركة..." name="companywebsite">
                                
                                <textarea placeholder="كيف سمعت عنا؟" name="heardaboutus"></textarea>
                                
                                <input type="submit" value="إحجز الآن" class="bookbtn" name="action">
                            </form>
                        </div>
                    </div>
                        <div class="row">
                        <div dir="ltr" class="col-md-6 col-xs-12 social">
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