<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>OPENSEQ.org - GREMLIN Downloads</title>
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
.sub
{
	font-size: 10px;
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

   <li class='active'><a href='submit.php'><span>GREMLIN</span></a>
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

   <li ><a href='contactus.php'><span>Contact Us</span></a></li>
</ul>
</div><table width="100%" border="0" cellpadding="3" cellspacing="5" class="round">
  <tr>
    <td valign="top" bgcolor="#E6E6E6"><span class="header">Request for GREMLIN Source Code</span></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <td width="100" align="center" valign="top"><img src="http://openseq.org/gremlin/gremlin_logo.gif" width="150" height="138" /></td>
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
	    <td width="100" valign="top" bgcolor="#E6E6E6">Affiliation</td>
	    <td valign="top" bgcolor="#E6E6E6"><input name="affiliation" type="text" id="affiliation" value="" size="50" /></td>
	    </tr>
	    <tr>
	    <td width="100" valign="top" bgcolor="#E6E6E6">1 + 2 = </td>
	    <td valign="top" bgcolor="#E6E6E6"><input name="check" type="text" id="check" value="" size="50" /> <input type="submit" value="SEND"/></td>
	    </tr>
    </table>
    </form>
       </td>
<td width="300" align="center" valign="top">
	<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br />
	<span class="sub" xmlns:dct="http://purl.org/dc/terms/" property="dct:title">GREMLIN</span><span class="sub"> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://gremlin.bakerlab.org" property="cc:attributionName" rel="cc:attributionURL">Hetunandan Kamisetty</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.
    </span></td>
</tr>
</table>
<table width="100%" border="0" cellpadding="3" cellspacing="5" class="round">
  <tr>
    <td valign="top" bgcolor="#E6E6E6"><span class="header">VERSION</span></td>
  </tr>
  <tr>
    <td valign="top"><ul>
      <li><strong>CHANGES v2.01</strong> (Jan. 08, 2014)<br />
Fixed a bug in sequence reweighting in the public version.</li>
      <li><strong>CHANGES v2.00 </strong>(Dec. 24, 2012)<br />
        This  version that learns a Markov Random Field from an input alignment with parameters optimized for accuracy and speed of contact prediction.</li>
    </ul></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#E6E6E6"><span class="header">Downloads</span></td>
  </tr>
  <tr>
    <td valign="top"><ul>
      <li><a href="http://robetta.bakerlab.org/downloads/contact_prediction/final_alignments.tar.gz">CAMEO Alignments</a> -  used for Kamisetty et al. 2013 paper</li>
    </ul></td>
  </tr>
</table>
<hr />
</body>
</head>