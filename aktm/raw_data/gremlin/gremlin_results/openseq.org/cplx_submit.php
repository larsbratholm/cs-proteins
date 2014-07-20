<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>OPENSEQ.org - GREMLIN - Submit Sequences for Coevolution Analysis</title>
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
.act
{
	background-color:#FFFFFF;
	padding:2px 2px 2px 2px;
	-moz-border-radius:3px;
  	-webkit-border-radius: 3px;
  	border-radius: 3px;
}
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
.n0{color: #33CC33; font-weight: bold;}
.n1{color: #CCCC00; font-weight: bold;}
.n2{color: #FF9900; font-weight: bold;}
.n3{color: #FF6600; font-weight: bold;}
.n4{color: #FF0000; font-weight: bold;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head>
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

	    <li class='active'><a href='complexes.php'><span>Complexes</span></a>
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
    <td valign="top" bgcolor="#E6E6E6"><span class="header">Submit sequences for coevolution analysis</span><br />
Note, due to limited resources your submission may take forever to complete (Jobs Running:
  0).</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <td width="150" align="center" valign="top"><img src="http://openseq.org/gremlin/gremlin_logo.gif" alt="" width="150" height="138" /></td>
    <td valign="top">
        <form method="post" action="cplx_submit.php">
    <table width="100%" border="0" cellpadding="3" cellspacing="5" class="round">
        <tr>
        <td width="100" valign="middle" bgcolor="#E6E6E6">Email</td>
        <td valign="middle" bgcolor="#E6E6E6"><input name="email" type="text" id="email" value="" size="20" />
          <span class="sub">(Will only be used to send you notice of Completion/Error).</span></td>
        </tr>
                <tr>
        <td width="100" valign="middle" bgcolor="#E6E6E6">Job name</td>
        <td valign="middle" bgcolor="#E6E6E6"><input name="name" type="text" id="name" value="" size="80" /></td>
        </tr>
                <tr>
                  <td colspan="2" valign="top" bgcolor="#999999"><table width="100%" border="0" cellspacing="5" cellpadding="2" class="round">
                    <tr>
                      <td width="50%" colspan="2" align="left" valign="top" bgcolor="#E6E6E6">Sequence A:<span class="sub"><br />
                      </span>
                      <center>
                        <textarea name="seq_A" cols="50" rows="5" id="seq_A" class="mono"></textarea>
                        <br />
<span class="sub">You may provide a single sequence in plain text or in FASTA format.</span>
                        </center></td>
                      <td width="50%" colspan="2" align="left" valign="top" bgcolor="#E6E6E6">Sequence B:<span class="sub"><br />
                      </span>
                      <center>
                        <textarea name="seq_B" cols="50" rows="5" id="seq_B" class="mono"></textarea>
                        <br />
                        <span class="sub">You may provide a single sequence in plain text or in FASTA format.</span>
                        </center></td>
                    </tr>
                    <tr>
                      <td align="center" valign="middle" bgcolor="#E6E6E6" class="round">E-value:
                        <select name="eval_A" id="eval_A">
                          <option value="4">1E-04</option>
                          <option value="6">1E-06</option>
                          <option value="10">1E-10</option>
                          <option value="20" selected="selected">1E-20</option>
                          <option value="40">1E-40</option>
                          <option value="60">1E-60</option>
                          <option value="80">1E-80</option>
                        </select></td>
                      <td align="center" valign="middle" bgcolor="#E6E6E6" class="round">Iterations:
                        <select name="iter_A" id="iter_A">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="4">4</option>
                          <option value="8" selected="selected">8</option>
                        </select></td>
                      <td align="center" valign="middle" bgcolor="#E6E6E6" class="round">E-value:
                        <select name="eval_B" id="eval_B">
                          <option value="4">1E-04</option>
                          <option value="6">1E-06</option>
                          <option value="10">1E-10</option>
                          <option value="20" selected="selected">1E-20</option>
                          <option value="40">1E-40</option>
                          <option value="60">1E-60</option>
                          <option value="80">1E-80</option>
                        </select></td>
                      <td align="center" valign="middle" bgcolor="#E6E6E6" class="round">Iterations:
                        <select name="iter_B" id="iter_B">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="4">4</option>
                          <option value="8" selected="selected">8</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td colspan="4" align="left" valign="middle" bgcolor="#CCCCCC" class="round"><select name="msa_method" id="msa_method">
                        <option value="hhb" selected="selected">HHblits</option>
                        <option value="jkh">Jackhmmer</option>
                      </select>
                      <span class="sub">HHblits and Jackhmmer are methods used to generate the Multiple Sequence Alignment (MSA).</span></td>
                    </tr>
                  </table></td>
                </tr>
        	    <tr>
        	      <td valign="middle" bgcolor="#E6E6E6">&Delta;gene</td>
        	      <td valign="middle" bgcolor="#E6E6E6">min:
                    <select name="g_min" id="g_min">
                      <option value="0" selected="selected">0</option>
                      <option value="1" selected="selected">1</option>
                    </select>
max:
<select name="g_max" id="g_max">
  <option value="0" selected="selected">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="5">5</option>
  <option value="10">10</option>
  <option value="20" selected="selected">20</option>
  <option value="100">100</option>
  <option value="999">∞</option>
</select></td>
   	          </tr>
        <tr>
          <td width="100" valign="middle" bgcolor="#E6E6E6">1 + 2 = </td>
          <td valign="middle" bgcolor="#E6E6E6"><table width="100%%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left"><input name="check" type="text" id="check" value="" size="20" />
                <input type="submit" value="SUBMIT"/></td>
              <td align="right"><input name="share" type="checkbox" id="share" checked="checked"/>
List results for others to see.</td>
            </tr>
          </table></td>
        </tr>
    </table>
    </form>
       </td></tr></table>
<hr />
<table width="100%" border="0" cellpadding="3" cellspacing="5" class="round">
  <tr>
    <td valign="top" bgcolor="#E6E6E6"><div style="display: none;" id="readme"><span class="header">README</span><br />
      Due to complexity of seperating orthologs from paralogs (multiple copies of close homologs in the same genome), generating a paired alignment of two genes is a difficult task. This is because we not know which copy of gene A to pair with which copy of gene B. To avoid paralogs, we can do one or both of the following:
        <ol>
        <li><strong class="n4">Decrease</strong> the <strong>e-value</strong> until only one copy is detected per genome.</li>
        <li>For prokaryotic genomes, use operon information (&Delta;gene) to decide which genes to pair.  Adjust the &Delta;gene until no neighboring paralogs are detected.
          <ul>
            <li class="sub">&Delta;gene of (1,∞) = &quot;pair <em>genes</em> that are from the same <em>genome</em>&quot;</li>
            <li class="sub">&Delta;gene of (1,1) = &quot;only pair <em>genes</em> that are immediate neighbors in the same <em>genome</em>&quot;</li>
            <li class="sub">&Delta;gene of (1,20) = &quot;only pair <em>genes</em> that are within 20 annotated genes of eachother in the same <em>genome</em>&quot;</li>
            <li class="sub">&Delta;gene of (0,0) = &quot;pair <em>domains</em> that are from the same <em>gene</em>&quot;</li>
            <li class="sub"><em>Besides domain-pairing, why might min=0 option be useful in gene-pairing context?</em> Sometimes genes that are immediate neighbors (such as fusion genes) are annotated as a single gene in the genome, setting &Delta;gene min to 0, allows for these to be included in the alignment. On the other hand, if the two genes you are joining are paralogous to eachother, joining at min=0 will result in corrupted alignment!</li>
          </ul>
        </li>
      </ol>
      <p>On the flip side, decreasing the e-value and setting a &Delta;gene cuttoff will results in less sequences for coevolution analysis.<em> <strong>So a balance must be found!</strong></em> To increase the number of sequences/length, we can do one or both of the following:</p>
      <ol>
        <li><strong class="n0">Increase</strong> the <strong>e-value</strong> and number of iterations until there is enough sequences per length.        </li>
        <ul>
          <li class="sub">For paired alignments, we find that the best results are achieved when there is at least 1 sequence per length. For example: If gene A is length 50, and gene B is length 50, we would want at least 100 non-redunant sequences.</li>
        </ul>
        <li>Trim the query sequence to where there is likely to be more homologous sequences.<br />
        </li>
      </ol></div>
      <strong><font color='#FF0000'>HELP!</font></strong> [<a href="cplx_submit.php#" onClick="showhide('readme'); return(false);">Show README</a>]</td>
  </tr>
</table>
<hr />
</body>
</head>