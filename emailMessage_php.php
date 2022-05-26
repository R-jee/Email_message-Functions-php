
function Send_email($from, $to, $msg , $adminMsg, $sub , $source)
{
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    $From = $from;
    $To = $to;

    $Message = $msg;
    $Subject = $sub;
        
    $headers = "From: ". $From ."\r\n";
    $headers .= "Reply-To: ". $From ."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF8\r\n";
    mail($To, $Subject, $Message, $headers);
    // echo "Email sent!";
}
function Sending_email_Message__($insertID,$product_categoryName, $product_modelName , $serial_number, $retail_store , $purchase_date, $first_name ,$last_name ,$address_one ,$postcode, $town_city, $county ,$email,$mobile_number,$landline_number, $fault_description   )
{
    $message = "
        <h3>Service request</h3> <br><br>
        Service Call Number: <b>$insertID</b> <br>\r\n
        Product: <b>$product_categoryName</b> <br>
        Model: <b>$product_modelName</b> <br>
        Serial number: <b>$serial_number</b> <br>
        Retail store: <b>$retail_store</b> <br>
        Purchase date: <b>$purchase_date</b> <br>
        <b>Customer Information</b> <br><br>
        Name: <b>$first_name $last_name</b> <br>
        Address: <b>$address_one</b> <br>
        Post code: <b>$postcode</b><br>
        City: <b>$town_city</b> <br>
        County: <b>$county</b> <br>
        Email: <b>$email</b> <br>
        Mobile number: <b>$mobile_number</b> <br>
        Landline number: <b>$landline_number</b> <br>
        <br>
        </p>
        <p style=\"border:1px solid #FF0000; padding:10px;\">
        <b>Fault Description:</b><br>
        $fault_description
        </p>
        ";
    $message .= "
        Please note that calls placed for the Dublin area will receive contact within one working day to arrange a suitable call date. All other areas will be contacted within 5 working days.<br>
        Please note that calls will be charged directly to the customer in each of the below circumstances<br><br>

        	Product is outside the 1 year guarantee<br>
        	Product is installed in any situation other than domestic<br>
        	Product is found to be in perfect working order when examined<br>
        	Fault is due to use, installation or any circumstance outside the machine<br>

        ";
        return $message;
    
}
