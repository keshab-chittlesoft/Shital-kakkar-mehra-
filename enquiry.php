<?php

if(isset($_POST['submit'])){
    // code for check server side validation
    
            $name=$_POST['name'];
            $mobile=$_POST['mobile'];
            $email=$_POST['email'];
            $organization=$_POST['organization'];
            $subject=$_POST['subject'];
            $textMsg=$_POST['message'];

            $msg = wordwrap($requirement, 50, "<br>\n");
            //$email=$_POST['emailid'];
             $to = "info@shitalkakkarmehra.com"; 
                $from = $name;
                $subject = "Enquiry";

                //begin of HTML message 
                $message ="
            <html> 
              <body > 
                <table>
                       <tr>
                            <td><b>Enquiry Form</b>
                            </td>
                       </tr
                        
                        <tr>
                            <td>Full Name  </td>
                            <td> :&nbsp;&nbsp;&nbsp;&nbsp; $name</td>
                        </tr>
                       
                        <tr>
                            <td>Mobile </td>
                            <td> :&nbsp;&nbsp;&nbsp;&nbsp; $mobile</td>
                        </tr>
                        
                        <tr>
                            <td>Email  </td>
                            <td> :&nbsp;&nbsp;&nbsp;&nbsp;  $email</td>
                        </tr>
                       
                        <tr>
                            <td>Organization  </td>
                            <td> :&nbsp;&nbsp;&nbsp;&nbsp;  $organization</td>
                        </tr>

                       
                        <tr>
                            <td>Subject </td>
                            <td> :&nbsp;&nbsp;&nbsp;&nbsp;  $subject</td>
                        </tr>

                        <tr>
                            <td>Message  </td>
                            <td> :&nbsp;&nbsp;&nbsp;&nbsp;  $textMsg</td>
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

