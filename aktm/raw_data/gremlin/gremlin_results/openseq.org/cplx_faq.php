<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>OPENSEQ.org - GREMLIN FAQ</title>
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
.blue {	color: #00F;
	font-weight: bold;
}
.green {	color: #090;
	font-weight: bold;
}
.greensub {	font-size: 10px;
	color: #83A156;
}
.red {	color: #F00;
	font-weight: bold;
}
subbold {
	font-weight: bold;
}
.subbold {
	font-weight: bold;
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
    <td colspan="4" valign="top" bgcolor="#E6E6E6"><span class="header">Complexes - FAQ</span><br />
    FAQ page under construction (please <a href="contactus.php">send questions</a>!)</td>
  </tr>
  <tr>
    <td colspan="4" valign="top" bgcolor="#CCCCCC"><strong>How is a paired-alignment generated?</strong></td>
  </tr>
  <tr>
    <td width="350" valign="top"><img src="http://openseq.org/complexes/flip.gif" alt="Operons" width="350" height="131" /></td>
    <td colspan="2" valign="top">Lets say we want to build a paired-alignment between the <span class="blue">BLUE</span> gene and the <span class="red">RED</span> gene. The task is further complicated by the fact that each genome has multiple copies of <span class="blue">BLUE</span> and <span class="red">RED</span> (these are called paralogs). How do we know which copy of <span class="blue">BLUE</span> to pair with which copy of <span class="red">RED</span>?<br />
      <br />
      It turns out, for bacterial genomes, interacting genes are often found near eachother  in the genome, in units called <span class="green">operons.</span> Using the <span class="green">operon</span> information, or a measure of how far apart two genes are in the genome (<strong>&Delta;gene</strong>) we can avoid the paralog issue altogether!<a href="cplx_faq.php#" onclick="showhide('uni2loc'); return(false);"><br />
      <br />
      Click here for technical details</a><br /></td>
  </tr>
  <tr>
    <td colspan="3" valign="top">      <div style="display: none;" id="uni2loc"><ul>
      <li>For the paper we exploited the fact that most UniProtKB/TrEMBL accession id(s) were assigned sequentially for each genome, allowing the rapid calulation of &Delta;gene by simply taking the aphanumeric difference of the uniprot id(s). For the <a href="cplx_submit.php">web-server</a>, we use a  lookup table of each uniprot id to its respective genome/contig and the nucleotide span, to calculate the &Delta;gene.  <br />
        <br />
      </li>
        <li>Download: <a href="http://openseq.org/uni2loc/uni2loc_2014_03_18_raw.zip">uni2loc_2014_03_18_raw.zip</a>
          <ul>
            <li>The mapping between uniprot id(s) and CDS records as extracted from the <a href="http://www.ebi.ac.uk/ena/">ENA</a> database. The CDS record tells you the contig accession id and the location on that nucleotide sequence.  A contig is continuous sequence of DNA. </li>
            <li>Will be updated following the <a href="http://www.ebi.ac.uk/ena/">ENA</a> update cycle.<br />
              <br />
        </li>
          </ul>
        </li>
        <li>Download: <a href="http://openseq.org/uni2loc/uni2loc_2014_03_18.zip">uni2loc_2014_03_18.zip</a>
          <ul>
            <li>A processed mapping limited to uniprot id(s) that are found in multi-gene contigs.</li>
            <li>The list is sorted by uniprot id, allowing for use with <a href="http://sgrep.sourceforge.net/">sgrep</a> for quick look-up.</li>
            <li>Lets say you are trying to decide if these two sequences should be stitched from two seperate alignments:<br />
              <span class="sub">B3MJ72	07aQ_00I9_F (from alignment A)<br />
              B3MJ73	07aQ_00Ia_F (from alignment B)</span><br />
              The &quot;07aQ&quot; tells you they are from the same genome/contig.<br />
              The &Delta;gene = |00I9-00Ia| = 1;  tells you they are one unit apart (Note: gene count is in base-62 (0-9,a-z,A-Z)]).<br />
              The fact that both have &quot;F&quot; (which can be R), tells you that the protein-coding genes are  running in the same direction, and thus more likely to be part of the same operon (if &Delta;gene is small).<br />
              <br />
            </li>
            </ul>
        </li>
        <li>Download: <a href="http://robetta.bakerlab.org/downloads/contact_prediction/uni2loc_2014_03_18.fas.zip">uni2loc_2014_03_18.fas.zip</a>
          <ul>
            <li>Uniprot  sequence database, filtered to remove singletons (contigs with only a single gene).</li>
            <li>The fasta headers:<br />
              <span class="sub">&gt;B3MJ72_07aQ_00I9_F<br />
              &gt;B3MJ72_07aQ_00I9_F</span></li>
            <li>The advantage of using a pre-annotated database, is that you can quickly stitch the alignments in the future!<br />
              <br />
            </li>
          </ul>
        </li>
        <li>Download: <a href="http://openseq.org/complexes/scripts_08May2014.zip">scripts_08May2014.zip</a> (various helper scripts)
          <ul>
            <li>stitch.pl - v1.2 bug fixed to deal with alignments with alternative sequences but with same header<br />
              <br />
            </li>
          </ul>
        </li>
        <li><strong>Suggested protocol for HHblits</strong><span class="sub"><br />
          ===================================================<br />
          Input sequences: </span><strong><span class="greensub">A.fasta</span></strong><span class="sub"> and </span><span class="greensub"><strong>B.fasta</strong></span><span class="sub"><br />
            </span><span class="greensub"><strong>hhblits</strong> -alt 1 -i <em>A.fasta</em> -oa3m <strong>A.a3m</strong> -d DATABASE -n 8 -e 1E-20 -maxfilt 100000000 -neffmax 20 -nodiff -realign_max 10000000<br />
              <strong>hhblits</strong> -alt 1 -i <em>B.fasta</em> -oa3m <strong>B.a3m</strong> -d DATABASE -n 8 -e 1E-20 -maxfilt 100000000 -neffmax 20 -nodiff -realign_max 10000000<br />
              <strong>hhfilter</strong> -i <em>A.a3m</em> -o <strong>A_cov75.a3m</strong> -id 100 -cov 75<br />
              <strong>hhfilter</strong> -i <em>B.a3m</em> -o <strong>B_cov75.a3m</strong> -id 100 -cov 75<br />
              <strong>stitch.pl</strong> -strand -uni2loc  -a <em>A_cov75.a3m</em> -b <em>B_cov75.a3m</em> -min 1 -max 20 -out <strong>AB_cov75.fas</strong></span> <br />
          <span class="greensub"><strong>hhfilter</strong> -i <em>AB_cov75.fas</em> -id 90 -o <strong>AB_id90cov75.fas</strong><br />
            </span><span class="sub">===================================================<br />
              </span><span class="sub">Some notes for stitch.pl<br />
                =================================================== <br />
                </span>
          <ul>
            <li class="sub">Designed to work with <a href="ftp://toolkit.genzentrum.lmu.de/pub/HH-suite/">HHblits</a> and <a href="ftp://toolkit.genzentrum.lmu.de/pub/HH-suite/databases/hhsuite_dbs/uniprot20_2013_03.tar.gz">uniprot20</a> clustered database.</li>
            <li class="sub"><strong>-min/-max</strong> control  &Delta;gene range you wish to include in the final alignment</li>
            <li class="sub"><strong>-uni2loc</strong> flag enables the uni2loc lookup table (you must modify the script to include absolute paths to <a href="http://sgrep.sourceforge.net/">sgrep</a> and <a href="http://openseq.org/uni2loc/uni2loc_2014_03_18.zip">uni2loc</a> table)</li>
            <li class="sub">if <strong>-uni2loc</strong> flag is not present, difference in uniprot accession ids (as described in the paper) will be used</li>
            <li class="sub">optional <strong>-strand</strong> flag will enforce stitching only between genes in the same strand-ness</li>
            </ul>
          <span class="sub"><br />
          </span></li>
        <li><strong>Suggested protocol for Jackhmmer</strong><span class="sub"><br />
          ===================================================<br />
          Input sequences: </span><strong><span class="greensub">A.fasta</span></strong><span class="sub"> and </span><span class="greensub"><strong>B.fasta</strong></span><span class="sub"><br />
            </span><span class="greensub"><strong>jackhmmer</strong> --incE 1E-20 -E 1E-20 -N 8 -A <strong>A.sto</strong> A.fasta uni2loc_2014_03_18.fas<br />
            <strong>jackhmmer</strong> --incE 1E-20 -E 1E-20 -N 8 -A <strong>B.sto</strong> B.fasta uni2loc_2014_03_18.fas              <br />
            <strong>sto2fas.pl</strong> A.sto &gt; <strong>A.fas</strong><br />
            <strong>sto2fas.pl</strong> B.sto &gt; <strong>B.fas</strong><br />
            <strong>hhfilter</strong> -i <em>A.fas</em> -o <strong>A_cov75.fas</strong> -id 100 -cov 75<br />
            <strong>hhfilter</strong> -i <em>B.fas</em> -o <strong>B_cov75.fas</strong> -id 100 -cov 75<br />
            <strong>stitch.pl</strong> -strand -uni2loc_fas  -a <em>A_cov75.fas</em> -b <em>B_cov75.fas</em> -min 1 -max 20 -out <strong>AB_cov75.fas</strong></span> <br />
          <span class="greensub"><strong>hhfilter</strong> -i <em>AB_cov75.fas</em> -id 90 -o <strong>AB_id90cov75.fas</strong><br />
            </span><span class="sub">===================================================<br />
            </span><span class="sub">Some notes:<br />
            ===================================================</span>
          <ul>
            <li><span class="sub">Notice for jackhmmer, we are using the pre-annotated sequence database: <a href="http://robetta.bakerlab.org/downloads/contact_prediction/uni2loc_2014_03_18.fas.zip">uni2loc_2014_03_18.fas.zip</a></span><a href="http://robetta.bakerlab.org/downloads/contact_prediction/uni2loc_2014_03_18.fas.zip"></a></li>
            <li><span class="sub"><strong>-uni2loc_fas</strong> flag for stitch.pl tells the script to use this pre-annotation found in both alignments</span></li>
            <li><span class="sub">the<strong> sto2fas.pl</strong> not only converts stockholm to fasta format, but also creates a master-slave alignment,<br />
              removing positions
              not in the first query sequence.<br />
              </span></li>
          </ul>
        </li>
        </ul>
    </div></td>
  </tr>
  <tr>
    <td colspan="3" valign="top" bgcolor="#D6D6D6"><strong>How does e-value play a role in seperating the paralogs from orthologs?</strong></td>
  </tr>
  <tr>
    <td colspan="3" valign="top">Alternativetly, one could adjust the e-value threshold until only one copy (for each gene) is detected per genome. The paralog  ratio tells you how many copies per genome are detected for the given settings. Though sometimes its the combination of both approaches that produces the best pairing! Both &Delta;gene and the e-value threshold can be adjusted on our <a href="cplx_submit.php">web-server</a>.</td>
  </tr>
  <tr>
    <td colspan="3" valign="top" bgcolor="#DEDEDE"><strong>Is it possible to run GREMLIN on a complex that involves more than 2 genes?</strong></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><ul>
      <li>Yes! You can do a all-vs-all paired analysis. For example if you have genes A,B and C. You can run the protocol on A+B, A+C, B+C (and put all the results together). This is what we did for the <a href="http://openseq.org/cplx.php?mode=ribo">Ribosome</a> and the <a href="http://openseq.org/cplx.php?mode=ndx">NADH dehydrogenase</a> complex!</li>
    </ul></td>
  </tr>
  <tr>
    <td colspan="3" valign="top" bgcolor="#DEDEDE"><strong>What is &quot;Prob&quot; aka &quot;GREMLIN score&quot;?</strong></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><ul>
      <li><span class='sub'>Scaled Score = raw_score/average(raw_scores)</span> <br />
        <span class="sub">Prob &asymp; P(contact | scaled_score, seq/len, top_inter_score)</span></li>
      <li>This score was not intended to be used as a &quot;cutoff&quot; but instead to give you an idea on how accurate the inter contacts maybe, given the number of sequences and the relative score of the top_inter_score to the inter/intra scores. For docking simulations we find that using all inter contacts within the top 1.5L intra/inter contacts as sigmoidal restraints to work best. &quot;L&quot; being the length of the protein-pair.</li>
      <li> Technical details of how to get this score in question below!<br />
      </li>
    </ul></td>
  </tr>
  <tr>
    <td colspan="3" valign="top" bgcolor="#E4E4E4"><strong>How do I run GREMLIN locally?</strong></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><ul>
      <li>First you need an alignment 
        <ul>
          <li><span class="sub">(see technical details in the first question on how to generate this)</span>.</li>
          </ul>
      </li>
      <li>Remove positions from the alignment that have &gt; 75% gaps
        <ul>
          <li><span class="greensub"><strong>seq_len.pl</strong> -i<em> AB_id90cov75.fas </em> -percent 25</span>
            <ul>
              <li class="sub"><strong>AB_id90cov75.cut.fas</strong> - fasta file for your records</li>
              <li class="sub"><strong>AB_id90cov75.cut.msa</strong> - alignment to be used as input to GREMLIN</li>
              <li class="sub"><strong>AB_id90cov75.cut</strong> - mapping between the full length sequence and cut/trimmed sequence</li>
              <li class="sub">Please take note of seq_len value reported at the end of the script run, you'll need this value later!</li>
              </ul>
            </li>
          </ul>
      </li>
      <li>Run GREMLIN and get scores
        <ul>
          <li><span class="greensub"><strong>run_gremlin.sh</strong> <a href="http://www.mathworks.com/products/compiler/mcr/">MCR_location</a> <em>AB_idcov75.cut.msa</em> AB.mtx MaxIter 30 verbose 1 apc 0</span>
            <ul>
              <li class="sub"><strong>AB.mtx</strong> - raw matrix from GREMLIN (apc 0 = no All Product Correction)</li>
              </ul>
          </li>
          <li><span class="greensub"><strong>mtx2sco.pl</strong> -mtx <em>AB.mtx</em> -cut <em>AB_id90cov74.cut</em> -div <strong>100</strong> -seq_len <strong>5 </strong>-apcd AB.apcd</span>
            <ul>
              <li class="sub"><strong>AB.apcd</strong> - specialized All Product Correction to account for potential differing rates in each gene.</li>
              <li class="sub">-div 100 is the length of gene A (full length of gene A, not the cut length), aka the point of division in the matrix!</li>
              <li class="sub">-seq_len 5 is the number of sequences per length (this is the value you get at the end of running seq_len.pl)<br />
                <br />
              </li>
              </ul>
          </li>
          </ul>
      </li>
      <li>The scripts used in this demo: <a href="http://openseq.org/complexes/scripts_08May2014.zip">scripts_08May2014.zip</a>. Use the <a href="gremlin.php">download form</a> to get a copy of GREMLIN.</li>
    </ul></td>
  </tr>
</table>
<hr />
</body>
</head>
