<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $addr=$_POST['message'];
    $email=$_POST['email'];
    require 'mail.php';
    $body = "<p> 
    Name: $name <br>
    Phone: $phone <br>
    Email: $email <br>
    Message: $addr <br> 
    </p>";
    $mail = sendMail($body);
    if($mail){
        $success='Your Queries Sent Sucessfully';
    }else{
        $err='Some internal error occured';
    }
}

?>

<?php include 'header.php'; ?>
<section style="background-color: #cbeff5;">
<style>
.customInput {
  display: inline-block;
  padding: 0.4em 0.8em 0.4em 0.8em;
  box-sizing: border-box;
  margin: 0;
  margin-top: 4px;
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 6px;
  transition: all 0.3s;
}

.customInput:focus {
    border: 1px solid #56a2d9;
}
p{
    margin: 0;
    margin-top: 10px;
}
</style>
<section>
    <div class="wrap">
        <div class="pt-5"></div>
    <div class="row">
        <div class="col-md-6">
    <div class="three text-center">
                <h1>Contact Us</h1>
                <br>
                <p class="m-0 ">Kathmandu University School of Law</p>
                <p>(Conference Secretiat Office)</p>
                <p class="m-0">Phone: <a href="tel:"> 977-11-490735</a></p>
               <!--  <p class="m-0">Mobile: <a href="tel:"> 977-011-415100</a></p> -->
                <p>Email: <a href="mailto: 10thichre@ku.edu.np"> 10thichre@ku.edu.np</a></p>
                <!-- <p class="m-0">Abhishek Jha <a href="tel:"> 977-011-415100</a></p>
                <p class="m-0">Shreeya <a href="tel:"> 977-011-415100</a></p> -->
            </div>
        </div>
    
    <div class="col-md-1"></div>
        <div class="col-md-5">
            <h1 style="font-weight:900; font-size: 2.5rem"> Office Location </h1>
            <div class="pt-3"></div>
            <iframe src="https://maps.google.com/maps?q=kathmandu%20university%20school%20of%20law&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="80%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
</div>
</section>
<section>
<div class="wrap">
    <div class="pt-5"></div>
    <div class="row">
        <div class="col-md-6">
             <h1 style="font-weight:900; font-size: 2.5rem"> Any Queries? </h1>
            <div class="py-2">
                <?php if(isset($err)) echo '<p class="text-danger">' . $err . "</p>"; ?>
                <?php if(isset($success)) echo '<p class="text-success">' . $success . "</p>"; ?>
            </div>

            <div class="contents">
                <form action="" method="post">
                <div class="pt-3"></div>
                <p>Name</p>
                <input type="text" placeholder="Name" name="name" class="customInput">
                <p>Phone</p>
                <input type="text" placeholder="Phone" name="phone" class="customInput">
                <p>Email</p>
                <input type="text" placeholder="Email Address" name="email" class="customInput">
                <p>Message</p>
                <input type="text" placeholder="Message" name="message" class="customInput">
                <p></p>
                <button style="padding: 5px 15px; background: #56a2d9; color:#fff;border:0; border-radius: 4px;">Submit</button>
                <div class="pb-5"></div>
                </form>
            </div>
        </div>

       
    </div>
    </div>
    </section>
    
</div>
</section>

<?php include 'footer.php'; ?>