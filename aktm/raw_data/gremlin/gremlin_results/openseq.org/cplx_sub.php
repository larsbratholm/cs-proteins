<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>OPENSEQ.org - GREMLIN Submission</title>
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

.bar {
	width: 100%;
	background-color: #aeaeae;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
}

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
.border {
border-style:solid;
border-width:1px;
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
.round_img{
  -moz-border-radius:5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
}
.scrollBox {

line-height: 12px;

border-style:solid;
border-width:1px;

height: 300px;

width: 500px;
overflow: auto;
}
.weblogo {

line-height: 12px;
border-width:0px;

height: 120px;

width: 1000px;
overflow: auto;
}
.sub_bar {

line-height: 12px;
border-width:0px;

height: 230px;

width: 1000px;
overflow: auto;
}
.act1 {	background-color:#FFFFFF;
	padding:2px 2px 2px 2px;
	-moz-border-radius:3px;
  	-webkit-border-radius: 3px;
  	border-radius: 3px;
}
.light
{
	background-color:#F3F3F3;
}
.light_blue
{
	background-color:#E7F3F9;
}
.mono {	font-family: Andale Mono, monospace;
	font-size: 12px;
}
.scrollBox1 {
line-height: 12px;

border-style:solid;
border-width:1px;

height: 250px;

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
	  <td width="5%" bgcolor="#E6E6E6"><strong><a href="http://openseq.org/cplx_sub.php?sort=id&amp;order=ASC">ID</a></strong></td>
	  <td width="10%" bgcolor="#E6E6E6"><strong><a href="http://openseq.org/cplx_sub.php?sort=seq_len&amp;order=ASC">Seq/Len</a></strong></td>
	  <td width="35%" bgcolor="#E6E6E6"><strong><a href="http://openseq.org/cplx_sub.php?sort=name&amp;order=ASC">Job Name</a></strong></td>
	  <td width="35%" bgcolor="#E6E6E6"><strong>Options</strong></td>
	  <td width="5%" bgcolor="#E6E6E6"><strong>Prob</strong></td>
	  <td width="10%" bgcolor="#E6E6E6"><strong>Status</strong></td>
    </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=169&amp;k=1400676931">0169</a></td>
                <td><span class="n4">0</span></td>
                <td>TAPL-LAMP1</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=168&amp;k=1400674639">0168</a></td>
                <td><span class="n4">0</span></td>
                <td>coreTAPL</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=160&amp;k=1400053105">0160</a></td>
                <td><span class="n4">0.01</span></td>
                <td>Secy-Secg</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=159&amp;k=1400008701">0159</a></td>
                <td><span class="n3">1.3</span></td>
                <td>HbpS SenS (A, 50-188) (B, 150-398)</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-20, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td><span class="n4">0.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=158&amp;k=1400008392">0158</a></td>
                <td><span class="n4">0.72</span></td>
                <td>HbpS SenS (A, 50-188) (B, 150-398)</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-10, 8) B:(1E-10, 8) msa: HHblits</span></td>
                <td><span class="n4">0.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=157&amp;k=1400007381">0157</a></td>
                <td><span class="n4">0.06</span></td>
                <td>HbpS SenS</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-06, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=156&amp;k=1400006768">0156</a></td>
                <td><span class="n4">0.15</span></td>
                <td>HbpS SenS (A, 50-188) (B, 150-398)</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=155&amp;k=1400006583">0155</a></td>
                <td><span class="n4">0.05</span></td>
                <td>HbpS SenS</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-06, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=154&amp;k=1400004658">0154</a></td>
                <td><span class="n4">0.05</span></td>
                <td>HbpS SenS</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-10, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=153&amp;k=1400003265">0153</a></td>
                <td><span class="n4">0.05</span></td>
                <td>HbpS SenS</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=152&amp;k=1399935052">0152</a></td>
                <td><span class="n1">3.64</span></td>
                <td>3G5O_AB</td>
                <td><span class="sub">&Delta;gene:(1, 1) A:(1E-04, 4) B:(1E-04, 4) msa: Jackhmmer</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=150&amp;k=1399928778">0150</a></td>
                <td><span class="n4">0.3</span></td>
                <td>3G5O_AB</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=149&amp;k=1399928342">0149</a></td>
                <td><span class="n1">3.89</span></td>
                <td>3G5O_AB</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-04, 4) B:(1E-04, 4) msa: Jackhmmer</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=148&amp;k=1399925853">0148</a></td>
                <td><span class="n4">0.22</span></td>
                <td>3G5O_AB</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8) msa: Jackhmmer</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=143&amp;k=1399840613">0143</a></td>
                <td><span class="n3">1.52</span></td>
                <td>2D1P_BC</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-20, 8) B:(1E-10, 8) msa: Jackhmmer</span></td>
                <td><span class="n2">0.57</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=142&amp;k=1399837572">0142</a></td>
                <td><span class="n4">0.48</span></td>
                <td>2D1P_BC</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8) msa: Jackhmmer</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=140&amp;k=1399826883">0140</a></td>
                <td><span class="n0">4.71</span></td>
                <td>3RPF_AC</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-06, 8) B:(1E-06, 8) msa: Jackhmmer</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=138&amp;k=1399816783">0138</a></td>
                <td><span class="n4">0.21</span></td>
                <td>3RPF_AC</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-10, 8) B:(1E-10, 8) msa: Jackhmmer</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=135&amp;k=1399813908">0135</a></td>
                <td><span class="n4">0.2</span></td>
                <td>3RPF_AC</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8) msa: Jackhmmer</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=134&amp;k=1399813132">0134</a></td>
                <td><span class="n0">4.07</span></td>
                <td>3RPF_AC</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-10, 8) B:(1E-10, 8) msa: HHblits</span></td>
                <td><span class="n0">0.99</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=133&amp;k=1399810643">0133</a></td>
                <td><span class="n4">0.2</span></td>
                <td>3RPF_AC</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8) msa: HHblits</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=131&amp;k=1399789947">0131</a></td>
                <td><span class="n3">1.77</span></td>
                <td>3PNL_AB</td>
                <td><span class="sub">&Delta;gene:(0, &infin;) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td><span class="n4">0.04</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=130&amp;k=1399789264">0130</a></td>
                <td><span class="n3">1.03</span></td>
                <td>3PNL_AB</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td><span class="n4">0.03</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=108&amp;k=1399622217">0108</a></td>
                <td><span class="n1">3.76</span></td>
                <td>yidC-Foc</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-04, 8) B:(1E-04, 8)</span></td>
                <td><span class="n4">0.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=107&amp;k=1399621249">0107</a></td>
                <td><span class="n1">3.75</span></td>
                <td>qwe1 (B, 35-143)</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td><span class="n4">0.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=106&amp;k=1399620601">0106</a></td>
                <td><span class="n2">2.65</span></td>
                <td>yidC-Foc</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td><span class="n4">0.12</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=104&amp;k=1399619648">0104</a></td>
                <td><span class="n4">0.39</span></td>
                <td>yidC-Foc</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=103&amp;k=1399619605">0103</a></td>
                <td><span class="n4">0.01</span></td>
                <td>qwe1</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=93&amp;k=1399585541">0093</a></td>
                <td><span class="n3">1.85</span></td>
                <td>SecYSecE (B, 60-127)</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-20, 8) B:(1E-04, 8)</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=92&amp;k=1399584683">0092</a></td>
                <td><span class="n4">0.3</span></td>
                <td>SecYSecE</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-20, 8) B:(1E-04, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=91&amp;k=1399584374">0091</a></td>
                <td><span class="n4">0.28</span></td>
                <td>SecYSecE</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=90&amp;k=1399583742">0090</a></td>
                <td><span class="n4">0.01</span></td>
                <td>SecYSecE</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=73&amp;k=1399443042">0073</a></td>
                <td><span class="n4">0</span></td>
                <td>snap25-syt1</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=71&amp;k=1399292577">0071</a></td>
                <td><span class="n2">2.26</span></td>
                <td>METI - METQ</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-40, 8) B:(1E-20, 8)</span></td>
                <td><span class="n0">0.99</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=70&amp;k=1399268628">0070</a></td>
                <td><span class="n0">4.03</span></td>
                <td>ATP6 - ATPF (A, 70-271)</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=69&amp;k=1399267719">0069</a></td>
                <td><span class="n2">2.6</span></td>
                <td>ATP6 - ATPF</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=60&amp;k=1398974163">0060</a></td>
                <td><span class="n4">0</span></td>
                <td>BB1</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=20&amp;k=1395823431">0020</a></td>
                <td><span class="n4">0.01</span></td>
                <td>ATPA - ATPB decreasing evalue to 1E-401E-60</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-40, 8) B:(1E-60, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=19&amp;k=1395822802">0019</a></td>
                <td><span class="n4">0.9</span></td>
                <td>ATPA - ATPB decreasing evalue to 1E-60</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-60, 8) B:(1E-60, 8)</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=18&amp;k=1395822372">0018</a></td>
                <td><span class="n4">0.88</span></td>
                <td>ATPA - ATPB decreasing evalue</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-80, 8) B:(1E-80, 8)</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=17&amp;k=1395821192">0017</a></td>
                <td><span class="n4">0</span></td>
                <td>ATPA - ATPB</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=15&amp;k=1395799772">0015</a></td>
                <td><span class="n1">3.57</span></td>
                <td>METN - YOEB</td>
                <td><span class="sub">&Delta;gene:(1, &infin;) A:(1E-20, 8) B:(1E-04, 8)</span></td>
                <td><span class="n4">0.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=14&amp;k=1395791866">0014</a></td>
                <td><span class="n4">0.15</span></td>
                <td>METN - YOEB</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-04, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=13&amp;k=1395737804">0013</a></td>
                <td><span class="n4">0.03</span></td>
                <td>METN - YOEB</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=12&amp;k=1395735847">0012</a></td>
                <td><span class="n3">1.44</span></td>
                <td>METN - METQ</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-60, 8) B:(1E-60, 8)</span></td>
                <td><span class="n4">0.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=11&amp;k=1395735180">0011</a></td>
                <td><span class="n3">1.45</span></td>
                <td>METN - METQ</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td><span class="n4">0.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=10&amp;k=1395729964">0010</a></td>
                <td><span class="n0">5.05</span></td>
                <td>YEFM - YOEB</td>
                <td><span class="sub">&Delta;gene:(0, 20) A:(1E-04, 8) B:(1E-04, 8)</span></td>
                <td><span class="n0">0.99</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=9&amp;k=1395729399">0009</a></td>
                <td><span class="n2">2.92</span></td>
                <td>YDCT - YDCV</td>
                <td><span class="sub">&Delta;gene:(1, 100) A:(1E-20, 8) B:(1E-60, 8)</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=8&amp;k=1395728011">0008</a></td>
                <td><span class="n0">8.74</span></td>
                <td>YDCT - YDCV</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-40, 8)</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=7&amp;k=1395725840">0007</a></td>
                <td><span class="n2">2.54</span></td>
                <td>YDCT - YDCV</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-60, 8)</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=6&amp;k=1395708608">0006</a></td>
                <td><span class="n0">11.45</span></td>
                <td>YDCT - YDCV</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=5&amp;k=1395696569">0005</a></td>
                <td><span class="n3">1.59</span></td>
                <td>YEFM - YOEB</td>
                <td><span class="sub">&Delta;gene:(0, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td><span class="n0">0.99</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=4&amp;k=1395696074">0004</a></td>
                <td><span class="n3">1.09</span></td>
                <td>M N</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-80, 8) B:(1E-80, 8)</span></td>
                <td><span class="n0">0.91</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=3&amp;k=1395696074">0003</a></td>
                <td><span class="n4">0.03</span></td>
                <td>M N</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-60, 8) B:(1E-60, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/cplx_sub.php?id=2&amp;k=1395696074">0002</a></td>
                <td><span class="n4">0.03</span></td>
                <td>4HEA_M - 4HEA_N</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td></td>
                <td>
				<span class='n4'>Killed</span>                </td>
            </tr>
				<tr >
            	<td><a href="http://openseq.org/cplx_sub.php?id=1&amp;k=1395696074">0001</a></td>
                <td><span class="n1">3.75</span></td>
                <td>NUOJ NUOK</td>
                <td><span class="sub">&Delta;gene:(1, 20) A:(1E-20, 8) B:(1E-20, 8)</span></td>
                <td><span class="n0">1.00</span></td>
                <td>
				<span class='n0'>Done</span>                </td>
            </tr>
		</table>
	<hr /><span class="sub">
Page generated in 0.0231 seconds.</span>
</body>
