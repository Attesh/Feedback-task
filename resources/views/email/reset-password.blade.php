<!-- <!DOCTYPE html>
<html>
<head>
    <title>Reset Password </title>
</head>
<body>
    Click the following link to reset your password:
    <a class="btn btn-primary" href="https://fisdemoprojects.com/auctionsheetcheck/user/resetpassword/{{ $resetUrl }}">Reset Password</a>
</body>
</html> -->




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Reset Password</title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

<style>

html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    font-family: 'Lato', sans-serif;
    font-weight: 400;
    font-size: 18px;
    line-height: 1.8;
    color: rgba(0,0,0,.4);
}

/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
 <style>


h1,h2,h3,h4,h5,h6{
    font-family: sans-serif;
    color: #000000;
    margin-top: 0;
    font-weight: 400;
}

table{
}
/*LOGO*/

.logo h1{
    margin: 0;
}
.logo h1 a{
    color: #30e3ca;
    font-size: 24px;
    font-weight: 700;
    font-family: 'Lato', sans-serif;
}

.hero{
    position: relative;
    z-index: 0;
}
.text1{
    color:black;
    margin: 0 0;
}
.hero .text .login{
    margin-bottom: 20px;
}
.hero .text{
    color: black;
}

.hero .text p{
    margin-bottom: 0;
}

.section-title {
  margin: 0;
  margin: 0;
  font-size: 21px;
  font-weight: 700;
  text-transform: uppercase;
font-family: "Fira Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  color: #263788;
  line-height: 1;
  letter-spacing: 0.5px;
}

.btn-primary {
  background-color: #1e85fa; /* Green */
  border: none;
  color: white !important;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


    </style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly;>
    <center style="width: 100%;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">
        <!-- BEGIN BODY -->
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="    border-top-left-radius: 20px; border-top-right-radius: 20px; margin: auto; background-color: #d0e5ff;">
            <tr>
                <td valign="middle" class="hero bg_white" style="padding: 2em 0 0.5em 0;">
                <img src="https://fisdemoprojects.com/auctionsheetcheck/public/assets/images/C-new-logo.png" alt="" style="width: 255px !important; max-width: 300px; height: auto; margin: auto; display: block;">
                </td>
            </tr><!-- end tr -->
            <tr>
                <td valign="top" class="bg_white" style="padding: 1em 2.5em 25px 2.5em;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td class="logo" style="text-align: center;">
                                <h4 class="section-title">Welcome to Auction Sheet Check</h4>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end tr -->
          
        </table>
        <table align="left" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto; background-color: #f1f1f1; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
            <tr>
                <td valign="start" class="hero bg_white" style="padding: 2em 0 4em 0;">
                    <table>
                        <tr>
                            <td>
                                <div class="text" style="padding: 0 2.5em;">
                                    <p>Dear {{$fullname}},</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text" style="padding: 10px 2.5em;">
                                    <p>Please click the following link - button to reset your password.
                                    </p><br>
                                </div>
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <div class="text1" style="padding: 0 2.5em;">
                                     <a class="btn btn-primary" href="https://fisdemoprojects.com/auctionsheetcheck/user/resetpassword/{{ $resetUrl }}">Reset Password</a>
                                </div><br>
                            </td>
                        </tr>
                    
                         <tr>
                            <td>
                                <div class="text" style="padding: 10px 2.5em;">
                                    <span>Thank You.</span>
                                </div>
                            </td>
                        </tr> 
                         <tr>
                            <td>
                                <div class="text" style="padding: 0 2.5em;">
                                    <span>Regards,</span>
                                </div>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                <div class="text" style="padding: 0 2.5em;">
                                    <span><strong>Auction Sheet Check</strong></span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end tr -->
            <!-- 1 Column Text + Button : END -->
        </table>
          </td>
        </tr><!-- end: tr -->
      </table>

    </div>
  </center>
</body>
</html>


