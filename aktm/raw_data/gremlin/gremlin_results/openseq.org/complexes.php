<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>OPENSEQ.org - Complexes</title>
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
.sub
{
	font-size: 10px;
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
.greensub
{
	font-size: 10px;
	color: #83A156;
	
}
.blue {
	color: #00F;
	font-weight: bold;
}
.red {
	color: #F00;
	font-weight: bold;
}
.green {
	color: #090;
	font-weight: bold;
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
    <td colspan="2" valign="top" bgcolor="#E6E6E6"><span class="header">Complexes</span>
      <hr />      <ul>
      <li>Please read our recent publication for a complete introduction to the dataset:
        <ul>
          <li>Robust and accurate prediction of residue-residue interactions across protein interfaces using evolutionary information
            <ul>
              <li><a href="http://elifesciences.org/content/early/2014/05/01/eLife.02030">Elife</a> (Early release)</li>
              <li><a href="http://openseq.org/complexes/Draft_01May2014.pdf">Compiled PDF</a> (Main text, figures and supplementary figures)<br />
                <br />
              </li>
            </ul>
            </li>
          </ul>
      </li>
      <li>Since our publication: a similar, independent and very cool study has recently been posted to bioRxiv by Hopt et al. check it out:
        <ul>
          <li>Sequence co-evolution gives 3D contacts and structures of protein complexes [<a href="http://biorxiv.org/content/biorxiv/early/2014/05/06/004762">LINK</a>] [<a href="http://biorxiv.org/content/early/2014/05/06/004762.full.pdf">PDF</a>]<br />
            </li>
          </ul>
      </li>
    </ul>    </td>
  </tr>
  <tr>
    <td width="50%" valign="top"><table width="100%%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top"><img src="http://openseq.org/complexes/trap.gif" width="145" height="200" /></td>
        <td valign="top"><strong>GREMLIN Results</strong><br />
          <ul>
            <li><em>E. coli</em> Dataset
              <ul>
                <li><a href="http://openseq.org/cplx.php?mode=ecoli">Complexes</a> (clustering results) </li>
                <li><a href="ecoli.php">Single gene</a><br />
                  </li>
                </ul>
              </li>
            <li><em>T. thermophilus</em> Dataset
              <ul>
                <li><a href="http://openseq.org/cplx.php?mode=ribo">Ribosome</a></li>
                <li><a href="http://openseq.org/cplx.php?mode=ndx">NADH dehydrogenase</a></li>
                </ul>
              </li>
            <li><a href="http://openseq.org/cplx.php?mode=pdb">PDB Dataset</a> (benchmark results)</li>
          </ul></td>
        </tr>
    </table></td>
    <td width="50%" valign="top"><strong>GREMLIN Server</strong>
      <ul>
        <li><a href="cplx_submit.php">Submit Sequences</a></li>
        <li><a href="cplx_sub.php">Submissions</a></li>
        <li><a href="cplx_faq.php">FAQ</a></li>
      </ul>
      <strong>Input FASTA Alignments</strong> (compressed)
      <ul>
        <li><a href="http://openseq.org/complexes/ecoli_paired_alignments.zip">ecoli_paired_alignments.zip</a></li>
        <li><a href="http://openseq.org/complexes/PDB_benchmark_alignments.zip">PDB_benchmark_alignments.zip</a></li>
        <li><a href="http://openseq.org/complexes/PDB_benchmark_alignments_NDX.zip">PDB_benchmark_alignments_NDX.zip</a></li>
        <li><a href="http://openseq.org/complexes/ribosome_50S_alignments.zip">ribosome_50S_alignments.zip</a></li>
        <li><a href="http://openseq.org/complexes/ribosome_70S_alignments.zip">ribosome_70S_alignments.zip</a></li>
    </ul></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" bgcolor="#E6E6E6"><strong>Predicted complexes
    </strong></td>
  </tr>
        <tr>
    <td width="50%" valign="top" bgcolor="#CCCCCC"><strong>The TRAP complex</strong></td>
    <td width="50%" valign="top" bgcolor="#CCCCCC"><strong>Tripartite efflux system</strong></td>
  </tr>
  <tr>
    <td valign="top">Download: <a href="http://openseq.org/complexes/YIA_MNO_v3.pdb">pdb</a>
      <ul>
        <li><a href="http://openseq.org/cplx.php?uni_a=P37674&amp;uni_b=P37675">YIAM - YIAN</a></li>
        <li><a href="http://openseq.org/cplx.php?uni_a=P37674&amp;uni_b=P37676">YIAM - YIAO</a></li>
        <li><a href="http://openseq.org/cplx.php?uni_a=P37675&amp;uni_b=P37676">YIAN - YIAO</a><br />      </a></li></ul></td>
    <td valign="top">Download: <a href="http://openseq.org/complexes/MDTP_MDTN_v1.pdb">pdb</a>
      <ul>
        <li><a href="http://openseq.org/cplx.php?uni_a=P32714&amp;uni_b=P32716">MDTP - MDTN</a></li>
    </ul></td>
  </tr>
          <tr>
    <td width="50%" valign="top" bgcolor="#CCCCCC"><strong id="docs-internal-guid-54c60740-cc5a-521c-f796-9653c8c5ab4c">Pyruvate formate lyase-activating enzyme complex</strong></td>
    <td width="50%" valign="top" bgcolor="#CCCCCC"><strong id="docs-internal-guid-54c60740-cc5a-269d-b109-f14dbbcf7995">D-methionine transport system</strong></td>
  </tr>
  <tr>
    <td valign="top">Download: <a href="http://openseq.org/complexes/PFLA_PFLB_v1.pdb">pdb</a>
      <ul>
        <li><a href="http://openseq.org/cplx.php?uni_a=P0A9N4&amp;uni_b=P09373">PFLA - PFLB</a></li>
    </ul></td>
    <td valign="top">Download: <a href="http://openseq.org/complexes/METI_METQ_v1.pdb">pdb</a>
      <ul>
        <li><a href="http://openseq.org/cplx.php?uni_a=P31547&amp;uni_b=P28635">METI - METQ</a></li>
        <li><a href="http://openseq.org/cplx.php?uni_a=P30750&amp;uni_b=P28635">METN - METQ</a></li>
        <li><a href="http://openseq.org/cplx.php?uni_a=P31547&amp;uni_b=P30750">METI - METN</a> (known interaction)</li>
    </ul></td>
  </tr>
</table>
<hr />
<strong class="red">Note:</strong> The <a href="cplx_faq.php"><strong>FAQ section</strong></a> has been moved to a seperate page!
<hr />
</body>
</head>
