<?php
if (isset($_POST['action'])) { // Checking for submit action
	$my_email = 'aikenexpress@yahoo.com'; // Change with your email address
    $subject = "Ride Aplication Form";
	
        
        $mobilityAid = '';
        if (!empty($_POST["mobilityAid"]) && is_array($_POST["mobilityAid"]))
        {
            $mobilityAid = implode(" ", $_POST["mobilityAid"]);
        }
        
        $following = '';
        if (!empty($_POST["following"]) && is_array($_POST["following"]))
        {
            $following = implode(" ", $_POST["following"]);
        }
        
        $accompanied = '';
        if (!empty($_POST["accompanied"]) && is_array($_POST["accompanied"]))
        {
            $accompanied = implode(" ", $_POST["accompanied"]);
        }
        
        $msg = $_POST["firstName"].$_POST["lastName"]."\n
Day Phone - ".$_POST["dayPhone"]."\n
Alternate Phone - ".$_POST["alternatePhone"]."\n
Street address - ".$_POST["streetAddress"]."\n
Apt - unit   - ".$_POST["aptUnit"]."\n
City - ".$_POST["requestCity"]."\n
State   - ".$_POST["requestState"]."\n
ZIP   - ".$_POST["requestZip"]."\n
Is mailing address same as home address?: ".$_POST["sameAddress"]."\n
Emergency Contact Name   - ".$_POST["emergencyContactName"]."\n
Emergency Relationship   - ".$_POST["relationship"]."\n
Emergency Phone  - ".$_POST["emergencyPhone"]."\n
Do you use mobility aid(s)?: ".$mobilityAid."\n
Do you have the following?: ".$following."\n
Is this a cash / check transportation ride?: ".$_POST["cashCheckTransportation"]."\n
Are you being accompanied by a: ".$accompanied."\n";
        
        $verify = mail($my_email, $subject, $msg);
        if ($verify == true)
        {
        echo 'success|Send a message process completed.';
        }
        else
        {
        echo 'error|Please fill all the required fields!';
        }

}
?>
