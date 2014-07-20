<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>OPENSEQ.org - GREMLIN - Submit Sequence for Coevolution Analysis</title>
<link href="menu_assets/styles.css" rel="stylesheet" type="text/css">
<script>
  function showhide(id)
	{
		if(document.getElementById)
		{
			obj = document.getElementById(id); 
			if(obj.style.display == "none"){obj.style.display = "";}
			else{obj.style.display = "none";}
		}
	}
</script>
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
.mono{
	font-family: Andale Mono, monospace;
	font-size: 12px;
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
    <td valign="top" bgcolor="#E6E6E6"><span class="header">Submit Sequence for Coevolution Analysis</span><br />
Note, due to limited resources your submission may take forever to complete (Jobs Running: 7).</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <td width="150" align="center" valign="top"><img src="http://openseq.org/gremlin/gremlin_logo.gif" width="150" height="138" /></td>
    <td valign="top">
        <form method="post" action="submit.php">
    <table width="100%" border="0" cellpadding="3" cellspacing="5" class="round">
        <tr>
        <td width="100" valign="top" bgcolor="#E6E6E6">Email</td>
        <td valign="top" bgcolor="#E6E6E6"><input name="email" type="text" id="email" value="" size="20" />
          <span class="sub">(Will only be used to send you notice of Completion/Error).</span></td>
        </tr>
                <tr>
        <td width="100" valign="top" bgcolor="#E6E6E6">Job name</td>
        <td valign="top" bgcolor="#E6E6E6"><input name="name" type="text" id="name" value="" size="80" /></td>
        </tr>
        	    <tr>
	    <td width="100" valign="top" bgcolor="#E6E6E6">Starting alignment<br /></td>
	    <td valign="top" bgcolor="#E6E6E6">
	      <span class="sub"> Alignment must be in FASTA format.  Alternatively, you may provide a single sequence in plain text or in FASTA format.<br />
	      </span>
<textarea name="sequence" cols="90" rows="10" id="sequence" class="mono"></textarea>
	      <span class="sub"><br />
	        <strong>NOTE</strong>: We treat your input as a &quot;starting alignment&quot; which is then enriched using HHblits. If Jackhmmer is selected only the first (or query) sequence is used. [20 &lt; query_length &lt; 1000] <a href="contactus.php">contact us</a> if you wish to submit a sequence larger than the limit.</span><br />
	        </td>
	    </tr>
	    <tr>
	      <td valign="top" bgcolor="#E6E6E6">Options</td>
	      <td valign="top" bgcolor="#999999"><table width="100%" border="0" cellpadding="2" cellspacing="5" class="round">
	        <tr>
	          <td colspan="2" align="center" valign="middle" bgcolor="#CCCCCC">Generate MSA using:
	            <select name="msa_method" id="msa_method">
	              <option value="hhb" selected="selected">HHblits</option>
	              <option value="jkh">Jackhmmer</option>
	              </select></td>
	          <td colspan="2" align="center" valign="middle" bgcolor="#CCCCCC">Filter MSA</td>
	          <td align="center" valign="middle" bgcolor="#CCCCCC">GREMLIN</td>
	          </tr>
	        <tr>
	          <td align="center" valign="middle" bgcolor="#E6E6E6"><span class="sub">E-value:</span><select name="evalue" id="evalue">
  <option value="0" selected="selected">1E-04</option>
  <option value="6">1E-06</option>
  <option value="1" selected="selected">1E-10</option>
  <option value="2">1E-20</option>
  <option value="4">1E-40</option>
</select></td>
	          <td align="center" valign="middle" bgcolor="#E6E6E6"><span class="sub">Iterations:</span><select name="iter" id="iter">
  <option value="0" selected="selected">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="4" selected="selected">4</option>
  <option value="8">8</option>
</select></td>
	          <td align="center" valign="middle" bgcolor="#E6E6E6"><span class="sub">Coverage:</span><select name="cov" id="cov">
  <option value="25">25</option>
  <option value="50">50</option>
  <option value="75" selected="selected">75</option>
  <option value="90">90</option>
  <option value="95">95</option>
</select></td>
	          <td align="center" valign="middle" bgcolor="#E6E6E6"><span class="sub">Remove gaps:
	            </span>	            <select name="gap" id="gap">
	              <option value="0" selected="selected">none</option>
	              <option value="50">50</option>
	              <option value="75" selected="selected">75</option>
	              </select></td>
	          <td align="center" valign="middle" bgcolor="#E6E6E6"><span class="sub">Prior:</span><select name="prior" id="prior">
  <option value="0" selected="selected">Vanilla</option>
  </select></td>
	          </tr>
	        <tr>
	          <td colspan="5" align="left" valign="top" bgcolor="#E6E6E6"><ul>
	            <li><strong>HHblits/Jackhmmer</strong>
	              <ul>
	                <li><span class="sub">HHblits and Jackhmmer are methods used to generate the Multiple Sequence Alignment (MSA).</span></li>
	                </ul>
	            </li>
	            <ul>
	              <li><span class="sub">&lt;E-value/Iterations&gt; options are used to control the diversity of MSA generation.</span></li>
	              <li><span class="sub"><strong>To use your own alignment</strong>, without MSA enrichment, set Iterations to 0.</span><br />
	                </li>
	              </ul>
	              <li><strong>Filter
MSA</strong>
<ul>
  <li><span class="sub">&lt;Coverage&gt; Filter MSA to remove sequences that don't cover at least (%) of query.</span></li>
    <li><span class="sub">&lt;Remove gaps&gt; After coverage filter, remove positions in the alignment that have (%) gaps. (The 'none' option will </span><span class="sub">keep all positions, except those that have less than 1 sequence/length.)</span></li>
    </ul>
	                </li>
	            <li><strong>GREMLIN</strong>
<ul>
  <li><span class="sub">only <strong>Vanilia</strong> works right now, other options are under construction.</span></li>
	                <li><span class="sub">Vanilla - Pure sequence based analysis (no prior).</span></li>
	                <li><span class="sub">SS - Add Secondary Structure prior, based on PSIPRED predictions.</span></li>
	                <li><span class="sub">SVM - Add SVM-CON prior.</span></li>
</ul>
	              </li>
	            </ul></td>
	          </tr>
	        </table></td>
	      </tr>
        <tr>
          <td width="100" valign="middle" bgcolor="#E6E6E6">1 + 2 = </td>
          <td valign="top" bgcolor="#E6E6E6"><table width="100%%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="50%" align="left" valign="middle"><input name="check" type="text" id="check" value="" size="20" />
                <input type="submit" value="SUBMIT"/></td>
              <td width="50%" align="right" valign="middle"><input name="share" type="checkbox" id="share" checked="checked"/>
                List results for others to see.</td>
              </tr>
            </table></td>
        </tr>
    </table>
    </form>
    </td></tr></table>
   <hr />
   </body>
</head>