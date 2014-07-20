<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link href="menu_assets/styles.css" rel="stylesheet" type="text/css">
<style type="text/css">

A{ color: #003366; }
A:link{ color: #003366;}
A:visited{ color: #003366;}
A:hover{ color: #54622D;  }
BODY
{
    margin:20px auto;
    width:1000px;
 font-family:verdana,geneva,arial,helvetica,sans-serif;
font-size: 12px;
}
table{border-spacing: 3px;}
.header
{
	font-size: 20px;
	font-weight: bold;
}
hr
{
	border: 0;
	background-color: #83A156;
	height: 5px;
}
table.round td{
  -moz-border-radius:3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
table.mono td{
	font-family: Andale Mono, monospace;
}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <td width="50%" valign="middle">
    <span class="header">OPENSEQ.org</span>    </td>
    <td width="50%" align="right" valign="bottom">
        </td>
  </tr>
</table>
<div id='cssmenu'>
  <ul>
   <li ><a href='index.php'><span>Home</span></a></li>
   <li ><a href='pfam.php'><span>PFAM</span></a>
      <ul>
      	 <li><a href='pfam.php'><span>Introduction</span></a></li>
         <li><a href='pfam.php?mode=full'><span>Full_list</span></a></li>
         <li><a href='pfam.php?mode=preds'><span>Predictions (All)</span></a></li>
         <li class='last'><a href='pfam.php?mode=nostruct'><span>Predictions (No Structure)</span></a></li>
      </ul>
   </li>

	<li ><a href='ecoli.php'><span>ECOLI</span></a></li>

   <li ><a href='submit.php'><span>GREMLIN</span></a>
   		<ul>
         <li><a href='gremlin_faq.php'><span>FAQ</span></a></li>
      	 <li><a href='submit.php'><span>Submit Sequence</span></a></li>
         <li><a href='sub.php'><span>Submissions</span></a></li>
         <li><a href='sub.php?sort=name&amp;order=DESC&amp;uid=1398960977'><span>Submissions - CASP11</span></a></li>
         <li><a href='gremlin.php'><span>Downloads</span></a></li>
      </ul>
   </li>

	    <li ><a href='complexes.php'><span>Complexes</span></a>
        <ul>
		<li><a href='complexes.php'><span>Introduction</span></a></li>
        <li><a href='cplx_faq.php'><span>FAQ</span></a></li>
      	 <li><a href='cplx_submit.php'><span>Submit Sequences</span></a></li>
         <li><a href='cplx_sub.php'><span>Submissions</span></a></li>
      </ul>
      </li>

   <li class='active'><a href='contactus.php'><span>Contact Us</span></a></li>
</ul>
</div><table width="100%" border="0" cellpadding="3" cellspacing="5" class="round">
  <tr>
    <td valign="top" bgcolor="#E6E6E6"><span class="header">Contact Us</span></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <td width="100" align="center" valign="top"><img src="http://openseq.org/menu_assets/ND1.gif" width="100" height="152" /></td>
    <td valign="top">
          <form method="post">
    <table width="100%" border="0" cellpadding="3" cellspacing="5" class="round">
            <tr>
        <td width="100" valign="top" bgcolor="#E6E6E6">Name</td>
        <td valign="top" bgcolor="#E6E6E6"><input name="name" type="text" id="name" value="" size="20" /></td>
        </tr>
        <tr>
        <td width="100" valign="top" bgcolor="#E6E6E6">Email</td>
        <td valign="top" bgcolor="#E6E6E6"><input name="email" type="text" id="email" value="" size="20" /></td>
        </tr>
        <tr>
    <td width="100" valign="top" bgcolor="#E6E6E6">Subject</td>
    <td valign="top" bgcolor="#E6E6E6"><input name="subject" type="text" id="subject" value="" size="50" /></td>
    </tr>
    <tr>
    <td width="100" valign="top" bgcolor="#E6E6E6">Message</td>
    <td valign="top" bgcolor="#E6E6E6"><textarea name="message" rows="15" id="message" style="width: 99%"></textarea></td>
    </tr>
            <tr>
	    <td width="100" valign="top" bgcolor="#E6E6E6">1 + 3 = </td>
	    <td valign="top" bgcolor="#E6E6E6"><input name="check" type="text" id="check" value="" size="20" />
	      <input type="submit" value="SEND"/></td>
	    </tr>
    </table>
    </form>
    </td></tr></table><hr />
</body>
</head>