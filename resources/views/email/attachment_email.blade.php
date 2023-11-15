<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> <!-- utf-8 works for most cases -->
        <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
        <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
        <title>Your Certificate</title> <!-- The title tag shows in email notifications, like Android 4.4. -->
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
                font-size: 16px;
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

            h1,h2,h3,h4,h5,h6{
                font-family: sans-serif;
                color: #000000;
                margin-top: 0;
                font-weight: 400;
            }

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

        </style>


    </head>

    <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly;">
        
        <div style="max-width: 100%; margin: 0 auto;" class="email-container">
            
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="    border-top-left-radius: 10px; border-top-right-radius: 10px; margin: auto; background-color: #b9c2c070;">
                <tr>
                    <td valign="middle" class="hero bg_white" style="padding: 2em 0 0.5em 0;">
                        <img src="https://fisdemoprojects.com/auctionsheetcheck/public/assets/images/C-new-logo.png" alt="" 
                        style="width: 245px !important; max-width: 280px; height: auto; margin: auto; display: block;">
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="bg_white" style="padding: 1em 2.5em 25px 2.5em;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td class="logo" style="text-align: center;">
                                    <h4 class="section-title">Download Your Certificate</h4>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            
            </table>
            

        </div>

    </body>
</html>


