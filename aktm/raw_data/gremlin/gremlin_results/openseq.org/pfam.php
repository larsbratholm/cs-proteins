<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>OPENSEQ.org - Pfam Coevolution Predictions</title>
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
<link href="menu_assets/styles.css" rel="stylesheet" type="text/css">
<style type="text/css">

A{ color: #003366; font-weight: bold;}
A:link{ color: #003366;}
A:visited{ color: #003366;}
A:hover{ color: #54622D;  }
BODY
{
    margin:20px auto;
    width:1024px;
font-family:verdana,geneva,arial,helvetica,sans-serif;
font-size: 12px;
	
}
.header
{
	font-size: 20px;
	font-weight: bold;
}
.subheader
{
	font-size: 16px;
	font-weight: bold;
}
.sub
{
	font-size: 10px;
}
.n0{color: #33CC33; font-weight: bold;}
.n1{color: #CCCC00; font-weight: bold;}
.n2{color: #FF9900; font-weight: bold;}
.n3{color: #FF6600; font-weight: bold;}
.n4{color: #FF0000; font-weight: bold;}
.seq
{
	font-family:Andale Mono, monospace;
}
.act
{
	background-color:#FFFFFF;
	padding:2px 2px 2px 2px;
	-moz-border-radius:3px;
  	-webkit-border-radius: 3px;
  	border-radius: 3px;
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
.scrollBox {

line-height: 12px;

border-style:solid;
border-width:1px;

height: 300px;

width: 500px;
overflow: auto;
}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <td width="50%" valign="middle">
    <span class="header">OPENSEQ.org</span>    </td>
    <td width="50%" align="right" valign="bottom">
            <form method="post" action="pfam.php">
        <span class="subheader">
        <input name="id" type="text" id="id" size="20" />
        </span>
        <input type="submit" value="PFAM"/>
        <br />
        </form>
            </td>
  </tr>
</table>
<div id='cssmenu'>
  <ul>
   <li ><a href='index.php'><span>Home</span></a></li>
   <li class='active'><a href='pfam.php'><span>PFAM</span></a>
      <ul>
      	 <li><a href='pfam.php'><span>Introduction</span></a></li>
         <li><a href='http://openseq.org/pfam.php?mode=full&amp;year=2013'><span>Full_list</span></a></li>
         <li><a href='http://openseq.org/pfam.php?mode=preds&amp;year=2013'><span>Predictions (All)</span></a></li>
         <li class='last'><a href='http://openseq.org/pfam.php?mode=nostruct&amp;year=2013'><span>Predictions (No Structure)</span></a></li>
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

   <li ><a href='contactus.php'><span>Contact Us</span></a></li>
</ul>
</div>    <table width="100%" border="0" cellpadding="3" cellspacing="5" class="round">
	<tr>
	<td valign="top" bgcolor="#E6E6E6"><p><strong>Introduction</strong></p>
	  <p>We've setup an online database that contain GREMLIN predictions for protein domains from the <a href=http://pfam.sanger.ac.uk> PFAM</a> protein family database. The intent of this database is to give you an idea if GREMLIN might be useful for your gene (once you <a href="http://pfam.sanger.ac.uk/search" target="_blank">figure out</a> what protein family it might belong to.) If there are enough homologous sequences to perform the analysis, you can then either use these pre-computed predictions, or submit your sequence to our on-line <a href="submit.php">server.</a></p>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="60%"><p><strong>Predictions made for protein families</strong> (Pfam database)</p>
            <ul>
              <li><a href="pfam.php?mode=full">Full list</a> = provides a list for entire pfam, along with number of sequences</li>
              <li><a href="pfam.php?mode=preds">Predictions (All)</a> = provides a subset of the pfam list, for which we made predictions</li>
              <li><a href="pfam.php?mode=nostruct">Predictions (No Structure)</a> = only list the pfams where there is no structure<br />
                    <form method="post" action="pfam.php">
            <span class="subheader">
            <input name="id" type="text" id="id" size="20" />
            </span>
<input type="submit" value="PFAM"/>
    </form><span class="sub">(using Pfam_id: 1 or PF00001)</span>
              </li>
            </ul>
            <p><strong>Databases</strong></p>
            <ul>
              <li><a href="http://pfam.sanger.ac.uk/">Pfam 27.0</a> (March 2013, 14831 families)</li>
              <li><a href="http://www.uniprot.org/">Uniprot</a> (2012_07, 2013_03)</li>
              <li><a href="http://en.wikipedia.org/wiki/HH-suite">HHsuite</a> pdb70 hhm (11Mar13, 20Jul13)</li>
          </ul></td>
          <td width="40%">&nbsp;</td>
        </tr>
      </table>
      <p><strong>Methods</strong></p>
	  <ul>
	    <li>Alignments
	      <ul>
	        <li>Pfam hmm(s) were used as a seed to enriched the alignment with additionial sequences using HHblits and the uniprot database. The alignmenst where filtered (coverage 75%, indentity 90%). Sites that had more than 75% gaps were removed.</li>
          </ul>
	    </li>
	    <li>Predictions
	      <ul>
	        <li>GREMLIN (with no-priors) was used to measure co-evolution.      </li>
	        <li>Note, we only made predictions for Pfams that were &gt;50 length and had at least 10 sequences per length (extending this to 5 sequences per length for those that have no strcuture)</li>
	        <li>Predictions will be updated yearly to reflect new Pfams, and availiablity of more sequences.</li>
          </ul>
	    </li>
	    <li>PDB homolog
	      <ul>
	        <li>HHsearch was used to locate global alignments, the top hit was used to calculate HH_delta.
	          <ul>
	            <li>HH_delta &gt; 0.5 indicates the input alignment differs significantly from that of the alignment generated for the PDB.</li>
              </ul>
	        </li>
	        <li>From these minimal distance contacts were extracted (&lt;5A), taking into account the overall probability (and HHscore) and the per site alignment probability.</li>
          </ul>
        </li>
      </ul></td>
	</tr>
    </table>

<hr /><span class="sub">
Page generated in 0.0059 seconds.</span>
</body>
