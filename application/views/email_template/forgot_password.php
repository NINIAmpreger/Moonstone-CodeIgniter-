<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div style="width: 900px; margin:auto; border: 1px solid #CECECE;">
  <div style="font-family:'Brandon',Helvetica,Arial!important;font-size:16px;color:#30373b;background-color:#fff; margin: 25px;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr height="80" valign="top" >
        <td  height="80"><table width="100%" border="0" bgcolor="#f1f1f1">
            <tr>
              <td><img src="<?=$site_url?>assets/frontend/images/logo.jpg" alt="<?=$project_name?>" border="0"></td>
            </tr>
            <tr>
              <td bgcolor="#0078a4" style="text-align:right;font-family:Verdana;font-size:18px;color:#fff;text-decoration:none;text-indent:10px;height: 25px;"><b>Forgot Password</b>&nbsp;</td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td style="padding:20px;"><table width="100%">
            <tr>
              <td colspan="2"><strong>Hello</strong> <?=$username?>,</td>
            </tr>
            <tr>
              <td colspan="2" height="10"></td>
            </tr>
            <tr>
              <td colspan="2">Your login details at <?=$project_name?> is as follows: </td>
            </tr>
            <tr>
              <td colspan="2" height="10"></td>
            </tr>
            <tr>
              <td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;text-align:justify;line-height:16px;width:30%"><b>Email Address / Username :</b></td>
              <td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;text-align:justify;line-height:16px;width:70%"><?=$email?></td>
            </tr>
            <tr>
              <td colspan="2" height="10"></td>
            </tr>
            <tr>
              <td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;text-align:justify;line-height:16px;"><b>Password :</b></td>
              <td style="font-family:Tahoma, Arial, Helvetica, sans-serif;font-size:12px;color:#292929;text-decoration:none;text-align:justify;line-height:16px;"><?=$password?></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td bgcolor="#0078a4" style="height: 25px;" >&nbsp;</td>
      </tr>
      <tr>
        <td  height="20"></td>
      </tr>
      <tr>
        <td style="text-align:center;"><?=$copyright?></td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
