<?php

if(isset($_POST['submit'])){
    // code for check server side validation

            $email=$_POST['email'];
           

            $msg = wordwrap($requirement, 50, "<br>\n");
            //$email=$_POST['emailid'];
             $to = "info@shitalkakkarmehra.com"; 
                $from = $name;
                $subject = "Sign Up";

                //begin of HTML message 
                $message ="
            <html> 
              <body > 
                <table>
                       <tr>
                            <td><b>Sign Up Form</b>
                            </td>
                       </tr
                        
                        <tr>
                            <td>Email Id </td>
                            <td> :&nbsp;&nbsp;&nbsp;&nbsp;  $email</td>
                        </tr>

                </table>
              </body>
            </html>";
               //end of message 
                $headers  = "From: $from\r\n"; 
                $headers .= "Content-type: text/html\r\n";

                
                mail($to, $subject, $message, $headers); 

                echo '<script type="text/javascript">'; 
                // echo 'alert("Thank you for contacting us. We will get back to you soon.");'; 
                echo 'window.location.href = "thank_you.html";';
                echo '</script>'; 
                    
               
}
    
?>

