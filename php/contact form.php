<?php
         $error = "";
         $result = "";
         if($_POST["send"]){
             if(!$_POST["name"]){
                 $error .= "<br />Please Enter Your Name";
             }

             if(!$_POST["email"]){
                 $error .= "<br />Please Enter Your Email";
             }

             if(!$_POST["body"]){
                 $error .= "<br />Please Enter Your Comment";
             }
             if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) AND $_POST["email"]){
                 $error .= "<br />Please Enter a Valid Email";
             }
             if($error){
                  $result .= '<div class="alert alert-danger"><strong>there were error(s) in form:'.$error.'</strong></div>';
             }
             else{
                 mail("ahmed.abdelrheem@ymail.com","PHP",$_POST["body"],$_POST["email"]);
             }
             
         }
         
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            .emailform{
                border:1px solid grey;
                border-radius:10px;
                margin-top:10px
            }
            form{
                padding-bottom:10px
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 emailform">
                    <h1>Contact Form</h1>
                    <?php
                        echo $result;
                    ?>
                    <form method="post">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <label for="to">Your Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <label for="body">Message</label>
                            <textarea name="body" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <input type="submit" name="send" value="Send" class="btn btn-success btn-lg"/>
                        
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(".contentContainer").height($(window).height());
        </script>
    </body>
</html>