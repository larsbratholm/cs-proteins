<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>OPENSEQ.org - GREMLIN FAQ</title>
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
</div><table border="0" cellpadding="3" cellspacing="5" class="round">
  <tr>
    <td colspan="2" valign="top" bgcolor="#E6E6E6"><span class="header">FAQ</span><br /></td>
  </tr>
      <tr>
    <td  colspan="2" valign="top" bgcolor="#CCCCCC"><strong>What is Coevolution, Covariance and Correlated Mutations?</strong></td>
  </tr>
  <tr>
    <td valign="top">
    <img src="http://openseq.org/img/covary_small.gif" width="500" height="190" /></td>
    <td valign="top"><ul>
      <li>For protein coding genes, when a residue mutates a compensatory mutation follows.  These mutations are captured in our DNA and in the DNA of all living organisms. By analyzing a MSA (multiple sequence alignment) of homolgous protein sequences, we can measure coupling of any given residue pairs.</li>
      <li>Example on the left shows two shapes complementing eachother (red and green). If one of them changes, the other has to change. By comparying positions in a MSA, we can determine which pairs of positions might be in contact.</li>
    </ul></td>
  </tr>
        <tr>
    <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>What is GREMLIN?</strong></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p>GREMLIN (Generative REgularized ModeLs of proteINs) is a  method to learn a statistical model that simultaneously captures conservation and coevolution in a multiple sequence alignment. The statistical model, a Markov Random Field with log-linear potentials, has also been referred to as a maximum-entropy model or a global statistical model.
      </p>
      <ul>
        <li> GREMLIN's learning procedure optimizes a regularized Pseudo-likelihood objective resulting in a statistically consistent method. This results in higher accuracy than other approaches. </li>
        <li> For proteins with deep alignments, the strength of the co-evolution parameters after correcting for entropic effects with the Average Product Correction (APC) accurately predicts residue-residue contacts in the 3D structure of a protein.</li>
      </ul>    
    </td>
  </tr>
  <tr>
    <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>How do I read a contact map?</strong></td>
  </tr>
  <tr>
          <td><img src="http://openseq.org/img/contact_map_small.gif" width="500" height="250" /></td>
          <td valign="top"><ul>
            <li>A contact map (or a distance matrix) is a two-dimensional representation of the three-dimensional protein structure showing which residues are in contact for a specified distance cutoff.</li>
            <li>Example on the left, shows a contact (yellow dashed line) between two strands of a protein structure. The same contact is also shown on the contact map as a yellow-filled circle. Notice the rainbow color on both the structure and contact map. The blue region is in contact with the green region.</li>
            <li>Just like we can display actual contacts for a given protein, we can also display covarying residues! <a href="http://openseq.org/sub.php?id=1377323210">See example here</a>.</li>
          </ul></td>
  </tr>
          <tr>
    <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>How can I use co-evolution measurements?</strong></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" ><ul>
      <li>For proteins that have no structure, the co-evolution measurements could be used as a predictor of which residues are in contacts.</li>
      <li>If a structure does exists, co-evolution measurements can be used to learn which contacts are actually important and evolutionarily selected for.</li>
    </ul></td>
  </tr>
            <tr>
    <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>How do I interpret the scores?</strong></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" ><p>We provide a Scaled Score, which is simply the score divided by the average of scores reported. 
          </p>
      <ul>
            <li>If a value &gt;&gt; 1, this means that particular residue pair are highly covarying compared to the average. </li>
            <li>If all values are ~1, this means that there is not enough information to learn which residues are covarying.</li>
          </ul>

  </tr>
    <tr>
    <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>How many homologous sequences do I need?</strong></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" >
      We've found the predictions to be most accurate when there are at least [5 x length of query] non-redundant sequences in the alignment. Predictions are unlikely to be useful if there are fewer sequences than the length of the query.
    <ul>
      <li>By non-redundant we mean that the no pair of sequences in the input alignment are more than 90% identical to each other.</li>
    </ul></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>What is HHblits/Jackhmmer?</strong></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" ><ul>
      <li>We use <strong>HHblits</strong> to find homologous sequences.
        <ul>
          <li>HHblits and HHsearch(see question below) are part of the <a href="http://en.wikipedia.org/wiki/HH-suite">HHsuite</a> package (that use Hmm-Hmm alignments, hence the &quot;HH&quot;).</li>
          <li>HHblits works similar to PSI-Blast, but is much faster and more accurate. It achieves the speed in part by searching against a pre-clustered Uniprot database. Once a cluster is detected all the sequences from the cluster are dumped into the alignment. Given that the pre-clustering is very computationally expensive, it is only performed once a year. </li>
        </ul>
      </li>
      <li>What is <strong>Jackhmmer</strong>?
        <ul>
        <li>Jackhmmer is part of the <a href="http://hmmer.janelia.org/">HMMER</a> package. It is similar to HHblist, but slower since it compares to all sequences (instead of clusters). Since  pre-clustering it not required, it can use the latest Uniprot database directly  which is updated once a month. </li></ul></li>
    </ul></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>What is HHsearch and HH_delta?</strong></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" ><ul>
      <li>The purpose of the HHsearch output is to give the user an idea of how well the GREMLIN output matches the contacts of the closest known PDB<br />
        structure. HHsearch results are not used in GREMLIN. </li>
      <li>We use HHsearch to find homolgous PDB structures.
        <ul>
          <li>For each <a href="http://www.rcsb.org/pdb/home/home.do">PDB</a> (entry in the Protein Database), a pre-computed alignment and corrresponding hmm (hidden markov model) is made.</li>
          <li>We then compare your query alignment (generated by HHblits) to the alignment of the HHsearch hit. If the sequences in the alignments are very different we report a HIGH HH_delta, otherwise the HH_delta is low.</li>
          <li>For homology modeling purposes, high HH_delta (&gt;0.5) means that there is likely to be more information in the co-evolution matrix than if you were to simply copy all the coordinates of the closet known homolog.      </li>
        </ul>
      </li>
    </ul></td>
  </tr>
    <tr>
    <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>Can I run GREMLIN on protein complexes (multiple genes)?</strong></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" ><ul>
          <li>Yes, as long as you can create a paired alignment. Please refer to our help section below the <a href="cplx_submit.php">Complex Submission</a> form.</li>
    </ul></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>What other servers exist?</strong></td>
  </tr>
  <tr>
    <td colspan="2" valign="top" ><ul>
          <li><a href="http://raptorx.uchicago.edu/ContactMap/">PhyCMAP (RaptorX)</a></li>
          <li><a href="http://evfold.org/evfold-web/evfold.do">Evfold</a> - Also uses Pseudo-likelihood learning procedure (<a href="http://plmdca.csc.kth.se/">plmDCA</a>).</li>
          <li><a href="http://mistic.leloir.org.ar/index.php">MISTIC</a> - Mutual Information Server to Infer Coevolution</li>
          <li><a href="http://binfolab12.kaist.ac.kr/cmat/">CMAT</a> - Correlated Mutation Analysis Tool</li>
      </ul>
    <p>We would love to include your server on the list, <a href="contactus.php">please drop us a line</a>.</p></td>
  </tr>
</table>
<hr />
</body>
</head>
