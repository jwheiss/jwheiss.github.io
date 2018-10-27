<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form action="" method="POST" enctype="multipart/form-data" class="rental-form"> 
    <input type="hidden" name="action" value="submit"/>
    <input name="spam" type="text" value="" size="30" style="display: none;"/>
	<strong>Name <span class="req">*</span></strong> <input name="name" type="text" value="" size="56"/><br> 
    <strong>Email <span class="req">*</span></strong> <input name="email" type="text" value="" size="56"/><br> 
    <strong>Phone <span class="req">*</span></strong> <input name="phone" type="text" value="" size="56"/><br><br>
    <strong>Company</strong> <input name="company" type="text" value="" size="56"/><br>
    <strong>Address</strong> <input name="address" type="text" value="" size="56"/><br>
    <strong>City</strong> <input name="city" type="text" value="" size="56"/><br>
    <strong>State</strong> <input name="state" type="text" value="" size="56"/><br>
    <strong>Zip</strong> <input name="zip" type="text" value="" size="56"/><br><br>
    <strong>Event Type</strong> <input name="event" type="text" value="" size="56"/><br>
   	<strong>Preferred Date(s)</strong> <input name="date" type="text" value="" size="56"/><br> 
    <strong>Comments</strong> <textarea name="comments" rows="7" cols="56"></textarea><br> 
    <input type="submit" value="Submit Request" class="rental-form-button"/> 
    </form> 
    
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name'];
    $company=$_REQUEST['company'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $state=$_REQUEST['state'];
    $zip=$_REQUEST['zip'];
    $phone=$_REQUEST['phone'];
    $email=$_REQUEST['email'];
    $date=$_REQUEST['date'];
    $event=$_REQUEST['event'];
    $comments=$_REQUEST['comments'];
    $spam=$_REQUEST['spam']; 
    $message="Ambler Rental Request
    
Name: $name
Email: $email
Phone: $phone

Company: $company   
Address: $address
City: $city
State: $state
Zip: $zip

Event Type: $event 
Preferred Dates: $date
    
Comments: $comments
    ";
    if (($name=="")||($email=="")||($phone=="")) 
        { 
        echo "<br/><br/>All fields are required, please fill out <a href=\"\">the form</a> again.<br/><br/>"; 
        } 
    if (($spam!="")) 
        { 
        echo "<br/><br/>Nice try, spambot.<br/>";
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Ambler Rental Request"; 
        mail("rentals@renewtheaters.org", $subject, $message, $from); 
        echo "<br/><br/>Thank you for your submission. We really appreciate your interest.<br/><br/>"; 
        } 
    }   
?> 
