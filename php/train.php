<?php

    /* Start vars */
    $test = "Test Test";
    $test2 = "anthor test";
    $num = 75;
    $num2 = 100;
    $num3 = 150;
    $ahmed = "abdo";
    $a = "ahmed";
    echo $test." ".$test2;
    echo $num / 3;
    echo "$test";
    echo $$a;
    /* End vars */

    /* Start Arrays */
    $myArray = array("pizza","chocolate","coffe");
    echo $myArray;
    echo "<br />";
    print_r($myArray);
    echo "<br />";
    echo $myArray[2];
    echo "<br />";
    $anthorArray[0] = "pizza";
    $anthorArray[1] = "cake";
    $anthorArray[]  = "salad";
    print_r($anthorArray);
    echo "<br />";
    $thirdArray = array(
        "France" => "French",
        "USA" => "English",
        "Germany" => "Dutch"
    );
    print_r($thirdArray);
    echo "<br />";
    unset($thirdArray["Germany"]);
    print_r($thirdArray);
    echo "<br />";
    /* End Arrays */

    /* Start IF */
    if($num == $num2 OR $num2 != $num3){
        echo "this is true";
    }
    else{
        echo "this is false";
    }    
    echo "<br />";
    /* End IF */

    /* Start Loop */
    $myLastArray = array("Ahmed","Tarek","Hossam");
    foreach($myLastArray as $key => $value){
        echo "key: $key value: $value <br />";
    }
    /* End Loop */
    

?>
  <!-- Start sending Email -->
  <div>
      <?php
        $emailTo="";
        $subject="I hope this works!";
        $body="I think you're great";
        $headers="From: rob@robpercival.co.uk";
        if (mail($emailTo, $subject, $body, $headers)) {
            echo "Mail sent successfully!";	
        } 
        else {
                echo "Mail not sent!";
        }
      ?>
  </div>    
  <!-- End sending Email -->
  <!-- Start Get -->
<!--
    <?php
        if($_GET['name']){
            echo "Your Name is ".$_GET['name'];
        }
    ?>
-->
    <!-- End Get -->
    <!-- Start Post -->
    <?php
        foreach($myLastArray as $key){
            if($_POST['name'] == $key){
                echo "Your Name is ".$_POST['name'];
            }    
        }
    ?>
    <!-- End Post -->
    <form method="post">
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
    
