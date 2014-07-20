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
.scrollBox {

line-height: 12px;

border-style:solid;
border-width:1px;

height: 200px;

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
	  <td bgcolor="#E6E6E6"><strong><a href="http://openseq.org/sub.php?sort=id&amp;order=ASC">ID</a></strong></td>
	  <td bgcolor="#E6E6E6"><strong><a href="http://openseq.org/sub.php?sort=length&amp;order=ASC">Length</a></strong></td>
	  <td bgcolor="#E6E6E6"><strong><a href="http://openseq.org/sub.php?sort=seq&amp;order=ASC">Sequences</a></strong></td>
	  <td bgcolor="#E6E6E6"><strong><a href="http://openseq.org/sub.php?sort=seq_len&amp;order=ASC">Seq/Len</a></strong></td>
	  <td bgcolor="#E6E6E6"><strong><a href="http://openseq.org/sub.php?sort=name&amp;order=ASC">Name</a></strong></td>
      <td bgcolor="#E6E6E6"><strong>Options</strong></td>
	</tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1400694995">1400694995</a></td>
                <td>481</td>
                <td>6129</td>
				<td><span class=n1>13.04</span></td>
                <td>
                T0788 GP120</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1400694958">1400694958</a></td>
                <td>153</td>
                <td>1960</td>
				<td><span class=n1>12.81</span></td>
                <td>
                T0787 GP41</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1400509785">1400509785</a></td>
                <td>198</td>
                <td>669</td>
				<td><span class=n3>3.40</span></td>
                <td>
                tram</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1400509302">1400509302</a></td>
                <td>198</td>
                <td>685</td>
				<td><span class=n3>3.48</span></td>
                <td>
                tram</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1400294488">1400294488</a></td>
                <td>248</td>
                <td>622</td>
				<td><span class=n3>2.55</span></td>
                <td>
                1LM7_A</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 90                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1400293700">1400293700</a></td>
                <td>248</td>
                <td>854</td>
				<td><span class=n3>3.50</span></td>
                <td>
                1LM7_A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1400293567">1400293567</a></td>
                <td>248</td>
                <td>259</td>
				<td><span class=n3>1.07</span></td>
                <td>
                1LM7_A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1400250848">1400250848</a></td>
                <td>545</td>
                <td>222</td>
				<td><span class=n4>0.42</span></td>
                <td>
                yedyz5</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 25                -gap 50                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1400250698">1400250698</a></td>
                <td>545</td>
                <td>221</td>
				<td><span class=n4>0.42</span></td>
                <td>
                yedyz4</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 50                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1400248251">1400248251</a></td>
                <td>211</td>
                <td>584</td>
				<td><span class=n3>2.90</span></td>
                <td>
                yedz</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1400243483">1400243483</a></td>
                <td>334</td>
                <td>1133</td>
				<td><span class=n3>3.65</span></td>
                <td>
                srg-34</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1400173890">1400173890</a></td>
                <td>101</td>
                <td>629</td>
				<td><span class=n2>6.42</span></td>
                <td>
                GP25 20-120</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1400157382">1400157382</a></td>
                <td>134</td>
                <td>351</td>
				<td><span class=n3>2.90</span></td>
                <td>
                GP25</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1399787609">1399787609</a></td>
                <td>145</td>
                <td>290</td>
				<td><span class=n3>2.01</span></td>
                <td>
                babushka</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 4            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1399786188">1399786188</a></td>
                <td>145</td>
                <td>178</td>
				<td><span class=n3>1.23</span></td>
                <td>
                babushka</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1399453085">1399453085</a></td>
                <td>131</td>
                <td>675</td>
				<td><span class=n2>5.23</span></td>
                <td>
                d1p0za_</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1399418003">1399418003</a></td>
                <td>361</td>
                <td>327</td>
				<td><span class=n4>0.92</span></td>
                <td>
                PEX30 60-420</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 8            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1399417107">1399417107</a></td>
                <td>208</td>
                <td>374</td>
				<td><span class=n3>1.99</span></td>
                <td>
                RTN1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1399416517">1399416517</a></td>
                <td>523</td>
                <td>15</td>
				<td><span class=n4>0.03</span></td>
                <td>
                PEX30</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1399416260">1399416260</a></td>
                <td>523</td>
                <td>15</td>
				<td><span class=n4>0.03</span></td>
                <td>
                PEX30</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1399415768">1399415768</a></td>
                <td>523</td>
                <td>15</td>
				<td><span class=n4>0.03</span></td>
                <td>
                PEX30</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1399398546">1399398546</a></td>
                <td>485</td>
                <td>2907</td>
				<td><span class=n2>6.25</span></td>
                <td>
                yjdlleastfilt</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 2            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1399347233">1399347233</a></td>
                <td>217</td>
                <td>705</td>
				<td><span class=n3>3.39</span></td>
                <td>
                4m5b</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1399260653">1399260653</a></td>
                <td>286</td>
                <td>28586</td>
				<td><span class=n0>107.06</span></td>
                <td>
                MCP hydrolase</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1399115759">1399115759</a></td>
                <td>235</td>
                <td>29116</td>
				<td><span class=n0>128.83</span></td>
                <td>
                roko</td>
                <td><span class="sub">
                -e <span class="n2">1E-06</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1399049570">1399049570</a></td>
                <td>285</td>
                <td>1</td>
				<td><span class=n4>0.00</span></td>
                <td>
                T0761</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1398568075">1398568075</a></td>
                <td>348</td>
                <td>10355</td>
				<td><span class=n0>35.83</span></td>
                <td>
                1f88</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1398558695">1398558695</a></td>
                <td>218</td>
                <td>185</td>
				<td><span class=n4>0.88</span></td>
                <td>
                4keo</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1398558419">1398558419</a></td>
                <td>218</td>
                <td>106</td>
				<td><span class=n4>0.51</span></td>
                <td>
                4keo</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1398400900">1398400900</a></td>
                <td>24</td>
                <td>1</td>
				<td><span class=n4>0.04</span></td>
                <td>
                cereal</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1398234100">1398234100</a></td>
                <td>201</td>
                <td>188</td>
				<td><span class=n4>0.94</span></td>
                <td>
                4LRHA 10-210</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1398233346">1398233346</a></td>
                <td>218</td>
                <td>187</td>
				<td><span class=n4>0.89</span></td>
                <td>
                4LRHA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1398233077">1398233077</a></td>
                <td>218</td>
                <td>107</td>
				<td><span class=n4>0.51</span></td>
                <td>
                4LRHA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1398154428">1398154428</a></td>
                <td>227</td>
                <td>561</td>
				<td><span class=n3>2.67</span></td>
                <td>
                JHBP</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1397947780">1397947780</a></td>
                <td>485</td>
                <td>5333</td>
				<td><span class=n1>11.30</span></td>
                <td>
                yjdlleastfilt</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 2            	-cov 25                -gap 0                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1397940353">1397940353</a></td>
                <td>84</td>
                <td>9049</td>
				<td><span class=n0>120.65</span></td>
                <td>
                2rt3_trim</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1397938799">1397938799</a></td>
                <td>121</td>
                <td>1783</td>
				<td><span class=n0>16.98</span></td>
                <td>
                2mmz</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1397938763">1397938763</a></td>
                <td>97</td>
                <td>2945</td>
				<td><span class=n0>35.91</span></td>
                <td>
                2rt3</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1397935289">1397935289</a></td>
                <td>108</td>
                <td>21</td>
				<td><span class=n4>0.20</span></td>
                <td>
                3k7c</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1397903917">1397903917</a></td>
                <td>496</td>
                <td>5750</td>
				<td><span class=n1>11.90</span></td>
                <td>
                gkp4it</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1397852365">1397852365</a></td>
                <td>102</td>
                <td>97</td>
				<td><span class=n3>1.14</span></td>
                <td>
                4B6IA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 0                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1397852240">1397852240</a></td>
                <td>102</td>
                <td>149</td>
				<td><span class=n3>1.62</span></td>
                <td>
                4B6IA</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 0                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1397821813">1397821813</a></td>
                <td>102</td>
                <td>85</td>
				<td><span class=n4>0.00</span></td>
                <td>
                4B6IA</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 0                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1397821357">1397821357</a></td>
                <td>102</td>
                <td>63</td>
				<td><span class=n4>0.00</span></td>
                <td>
                4B6IA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 0                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1397724085">1397724085</a></td>
                <td>510</td>
                <td>137</td>
				<td><span class=n4>0.28</span></td>
                <td>
                full-1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1397721518">1397721518</a></td>
                <td>510</td>
                <td>137</td>
				<td><span class=n4>0.28</span></td>
                <td>
                full1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1397684670">1397684670</a></td>
                <td>51</td>
                <td>713</td>
				<td><span class=n1>13.98</span></td>
                <td>
                yt5</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1397683749">1397683749</a></td>
                <td>51</td>
                <td>415</td>
				<td><span class=n2>8.14</span></td>
                <td>
                yt4</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1397561199">1397561199</a></td>
                <td>118</td>
                <td>981</td>
				<td><span class=n2>8.76</span></td>
                <td>
                TEST123</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1396566296">1396566296</a></td>
                <td>361</td>
                <td>527</td>
				<td><span class=n3>1.48</span></td>
                <td>
                vipB 15-375</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1396559863">1396559863</a></td>
                <td>361</td>
                <td>372</td>
				<td><span class=n3>1.04</span></td>
                <td>
                vipB 15-375</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1396559297">1396559297</a></td>
                <td>168</td>
                <td>377</td>
				<td><span class=n3>2.34</span></td>
                <td>
                vipA</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1396545828">1396545828</a></td>
                <td>307</td>
                <td>2920</td>
				<td><span class=n2>9.80</span></td>
                <td>
                4N7W</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1396507434">1396507434</a></td>
                <td>168</td>
                <td>553</td>
				<td><span class=n3>3.48</span></td>
                <td>
                vipA jackhmmer test</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1396507057">1396507057</a></td>
                <td>265</td>
                <td>77515</td>
				<td><span class=n0>301.62</span></td>
                <td>
                LckKD Jackhmmer test</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1396502790">1396502790</a></td>
                <td>81</td>
                <td>28424</td>
				<td><span class=n0>355.30</span></td>
                <td>
                4F25 cut to pdb length Jackhmmer test</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 0                -msa Jackhmmer</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1396490449">1396490449</a></td>
                <td>660</td>
                <td>14</td>
				<td><span class=n4>0.02</span></td>
                <td>
                vipAB</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1396490389">1396490389</a></td>
                <td>492</td>
                <td>334</td>
				<td><span class=n4>0.71</span></td>
                <td>
                vipB</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1396490331">1396490331</a></td>
                <td>168</td>
                <td>376</td>
				<td><span class=n3>2.33</span></td>
                <td>
                vipA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1396483829">1396483829</a></td>
                <td>369</td>
                <td>2439</td>
				<td><span class=n2>8.30</span></td>
                <td>
                Q8IWU4 ZNT8_HUMAN</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1395701628">1395701628</a></td>
                <td>159</td>
                <td>323</td>
				<td><span class=n3>2.10</span></td>
                <td>
                SP17106A</td>
                <td><span class="sub">
                -e <span class="n2">1E-06</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1395700868">1395700868</a></td>
                <td>159</td>
                <td>315</td>
				<td><span class=n3>2.04</span></td>
                <td>
                SP17106A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1395667910">1395667910</a></td>
                <td>42</td>
                <td>36</td>
				<td><span class=n4>1.00</span></td>
                <td>
                amyloid beta</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1395667584">1395667584</a></td>
                <td>140</td>
                <td>24</td>
				<td><span class=n4>0.17</span></td>
                <td>
                Asynuclein</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1394755011">1394755011</a></td>
                <td>452</td>
                <td>927</td>
				<td><span class=n3>2.08</span></td>
                <td>
                SrcFL</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1394740056">1394740056</a></td>
                <td>376</td>
                <td>212</td>
				<td><span class=n4>0.56</span></td>
                <td>
                Nav17</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1394654187">1394654187</a></td>
                <td>57</td>
                <td>8</td>
				<td><span class=n4>0.15</span></td>
                <td>
                3wmi</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1394651855">1394651855</a></td>
                <td>57</td>
                <td>8</td>
				<td><span class=n4>0.15</span></td>
                <td>
                3wmi</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1394650819">1394650819</a></td>
                <td>265</td>
                <td>3489</td>
				<td><span class=n1>13.32</span></td>
                <td>
                LckKD</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 95                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1394598272">1394598272</a></td>
                <td>265</td>
                <td>50870</td>
				<td><span class=n0>200.28</span></td>
                <td>
                LckKD</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1394362160">1394362160</a></td>
                <td>53</td>
                <td>1749</td>
				<td><span class=n0>33.00</span></td>
                <td>
                BPT1_BOVIN_corrected</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 0                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1394361921">1394361921</a></td>
                <td>53</td>
                <td>1743</td>
				<td><span class=n0>32.89</span></td>
                <td>
                BPT1_BOVIN</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 0                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1394221761">1394221761</a></td>
                <td>113</td>
                <td>1972</td>
				<td><span class=n0>17.61</span></td>
                <td>
                all_no_filtering</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1394220619">1394220619</a></td>
                <td>113</td>
                <td>4121</td>
				<td><span class=n0>36.47</span></td>
                <td>
                1laf_lao_id95_min100</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1394220350">1394220350</a></td>
                <td>106</td>
                <td>4146</td>
				<td><span class=n0>39.11</span></td>
                <td>
                1xt8_cys_id95_min100</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1394220284">1394220284</a></td>
                <td>103</td>
                <td>4121</td>
				<td><span class=n0>41.63</span></td>
                <td>
                1wdn_gln_id95_min100</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1394212799">1394212799</a></td>
                <td>113</td>
                <td>2882</td>
				<td><span class=n0>25.73</span></td>
                <td>
                all_id95_min100</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1394162526">1394162526</a></td>
                <td>139</td>
                <td>847</td>
				<td><span class=n2>6.47</span></td>
                <td>
                Rstspo 20-158</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1394044198">1394044198</a></td>
                <td>380</td>
                <td>1550</td>
				<td><span class=n3>4.19</span></td>
                <td>
                human PABPC1 1-380</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1393986716">1393986716</a></td>
                <td>636</td>
                <td>301</td>
				<td><span class=n4>0.48</span></td>
                <td>
                human PABPC1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1393978574">1393978574</a></td>
                <td>502</td>
                <td>186</td>
				<td><span class=n4>0.38</span></td>
                <td>
                Pab1 RRM2</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1393820083">1393820083</a></td>
                <td>571</td>
                <td>29</td>
				<td><span class=n4>0.06</span></td>
                <td>
                HAdV_36A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1393662799">1393662799</a></td>
                <td>345</td>
                <td>2</td>
				<td><span class=n4>0.01</span></td>
                <td>
                bchain</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1393596119">1393596119</a></td>
                <td>324</td>
                <td>462</td>
				<td><span class=n3>1.43</span></td>
                <td>
                MORE</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1393588909">1393588909</a></td>
                <td>660</td>
                <td>199</td>
				<td><span class=n4>0.30</span></td>
                <td>
                Brado</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1393552071">1393552071</a></td>
                <td>324</td>
                <td>405</td>
				<td><span class=n3>1.25</span></td>
                <td>
                cdhit</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1393518065">1393518065</a></td>
                <td>324</td>
                <td>410</td>
				<td><span class=n3>1.26</span></td>
                <td>
                445</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1393511077">1393511077</a></td>
                <td>324</td>
                <td>410</td>
				<td><span class=n3>1.26</span></td>
                <td>
                500</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1393405885">1393405885</a></td>
                <td>324</td>
                <td>243</td>
				<td><span class=n4>0.75</span></td>
                <td>
                245</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1393318664">1393318664</a></td>
                <td>281</td>
                <td>614</td>
				<td><span class=n3>2.33</span></td>
                <td>
                FrhB</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1393316581">1393316581</a></td>
                <td>281</td>
                <td>623</td>
				<td><span class=n3>2.36</span></td>
                <td>
                FrhB</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1393297760">1393297760</a></td>
                <td>324</td>
                <td>98</td>
				<td><span class=n4>0.30</span></td>
                <td>
                only99</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1392709548">1392709548</a></td>
                <td>60</td>
                <td>7255</td>
				<td><span class=n0>136.89</span></td>
                <td>
                alsk_ecoli N-term</td>
                <td><span class="sub">
                -e <span class="n2">1E-06</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1392709218">1392709218</a></td>
                <td>60</td>
                <td>26</td>
				<td><span class=n4>0.43</span></td>
                <td>
                alsk_ecoli N-term</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1392538078">1392538078</a></td>
                <td>239</td>
                <td>1117</td>
				<td><span class=n2>5.27</span></td>
                <td>
                RS3_THET8</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1392360019">1392360019</a></td>
                <td>133</td>
                <td>211</td>
				<td><span class=n3>1.59</span></td>
                <td>
                gp120gp41corr</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1392158042">1392158042</a></td>
                <td>238</td>
                <td>13117</td>
				<td><span class=n0>56.06</span></td>
                <td>
                mafft1_gis</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1392077908">1392077908</a></td>
                <td>97</td>
                <td>478</td>
				<td><span class=n2>5.03</span></td>
                <td>
                SP18632A</td>
                <td><span class="sub">
                -e <span class="n2">1E-06</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1392077333">1392077333</a></td>
                <td>97</td>
                <td>476</td>
				<td><span class=n2>5.01</span></td>
                <td>
                SP18632A</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1392073813">1392073813</a></td>
                <td>97</td>
                <td>50</td>
				<td><span class=n4>0.52</span></td>
                <td>
                SP18632A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1391081074">1391081074</a></td>
                <td>844</td>
                <td>114</td>
				<td><span class=n4>0.14</span></td>
                <td>
                cladeA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1390947230">1390947230</a></td>
                <td>128</td>
                <td>515</td>
				<td><span class=n3>4.29</span></td>
                <td>
                CASP ROLL R0046</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1390931498">1390931498</a></td>
                <td>128</td>
                <td>516</td>
				<td><span class=n3>4.30</span></td>
                <td>
                Roll</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1390931199">1390931199</a></td>
                <td>128</td>
                <td>51</td>
				<td><span class=n4>0.40</span></td>
                <td>
                Roll</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1390462853">1390462853</a></td>
                <td>181</td>
                <td>7844</td>
				<td><span class=n0>46.97</span></td>
                <td>
                Tar Dna binding 90-270</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1390017539">1390017539</a></td>
                <td>349</td>
                <td>620</td>
				<td><span class=n3>2.81</span></td>
                <td>
                T0735</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 25                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1390016993">1390016993</a></td>
                <td>349</td>
                <td>23</td>
				<td><span class=n4>0.07</span></td>
                <td>
                T0735</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1389840621">1389840621</a></td>
                <td>355</td>
                <td>489</td>
				<td><span class=n3>1.38</span></td>
                <td>
                PON1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1389743443">1389743443</a></td>
                <td>300</td>
                <td>4844</td>
				<td><span class=n0>17.06</span></td>
                <td>
                yiip</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1389647934">1389647934</a></td>
                <td>238</td>
                <td>14078</td>
				<td><span class=n0>60.42</span></td>
                <td>
                2lao_no_eukarya_141013</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1389403138">1389403138</a></td>
                <td>105</td>
                <td>303</td>
				<td><span class=n3>3.26</span></td>
                <td>
                TB1554C</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1389246751">1389246751</a></td>
                <td>530</td>
                <td>20371</td>
				<td><span class=n0>43.62</span></td>
                <td>
                MFS 4J05A</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1389132092">1389132092</a></td>
                <td>109</td>
                <td>53</td>
				<td><span class=n4>0.49</span></td>
                <td>
                SP13297C</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1389132032">1389132032</a></td>
                <td>185</td>
                <td>9</td>
				<td><span class=n4>0.05</span></td>
                <td>
                SP17061B</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1389103510">1389103510</a></td>
                <td>803</td>
                <td>1</td>
				<td><span class=n4>0.00</span></td>
                <td>
                cs</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1389033239">1389033239</a></td>
                <td>161</td>
                <td>44</td>
				<td><span class=n4>0.28</span></td>
                <td>
                roll 30-190</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1389033011">1389033011</a></td>
                <td>366</td>
                <td>42</td>
				<td><span class=n4>0.13</span></td>
                <td>
                roll</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1388795778">1388795778</a></td>
                <td>167</td>
                <td>75</td>
				<td><span class=n4>0.46</span></td>
                <td>
                GS13232A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1388695164">1388695164</a></td>
                <td>231</td>
                <td>206</td>
				<td><span class=n4>0.89</span></td>
                <td>
                nameca</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1388641719">1388641719</a></td>
                <td>260</td>
                <td>203</td>
				<td><span class=n4>0.78</span></td>
                <td>
                test1</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1388213981">1388213981</a></td>
                <td>99</td>
                <td>2258</td>
				<td><span class=n0>22.81</span></td>
                <td>
                1a30A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1388128936">1388128936</a></td>
                <td>260</td>
                <td>205</td>
				<td><span class=n4>0.79</span></td>
                <td>
                test1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1388084844">1388084844</a></td>
                <td>279</td>
                <td>3006</td>
				<td><span class=n1>10.85</span></td>
                <td>
                GC_sapC_2</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 25                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387857033">1387857033</a></td>
                <td>309</td>
                <td>9983</td>
				<td><span class=n0>32.31</span></td>
                <td>
                all optimizd 2</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387829518">1387829518</a></td>
                <td>217</td>
                <td>1146</td>
				<td><span class=n2>5.31</span></td>
                <td>
                GC_sapC_3</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 25                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387813607">1387813607</a></td>
                <td>43</td>
                <td>40</td>
				<td><span class=n4>0.93</span></td>
                <td>
                GCase_as_3_1a</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 25                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387793805">1387793805</a></td>
                <td>312</td>
                <td>10002</td>
				<td><span class=n0>32.06</span></td>
                <td>
                all adjustment</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387788812">1387788812</a></td>
                <td>450</td>
                <td>7724</td>
				<td><span class=n0>18.89</span></td>
                <td>
                4I5S</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387788027">1387788027</a></td>
                <td>192</td>
                <td>9646</td>
				<td><span class=n0>50.24</span></td>
                <td>
                more optimized</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387786487">1387786487</a></td>
                <td>196</td>
                <td>9655</td>
				<td><span class=n0>49.26</span></td>
                <td>
                onlyCaC</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387752557">1387752557</a></td>
                <td>277</td>
                <td>835</td>
				<td><span class=n2>6.18</span></td>
                <td>
                GCase_as_3</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 25                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387751431">1387751431</a></td>
                <td>277</td>
                <td>11</td>
				<td><span class=n4>0.04</span></td>
                <td>
                GCase_as_3</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387749640">1387749640</a></td>
                <td>277</td>
                <td>11</td>
				<td><span class=n4>0.04</span></td>
                <td>
                GCase_as_3</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387460539">1387460539</a></td>
                <td>258</td>
                <td>1091</td>
				<td><span class=n3>4.51</span></td>
                <td>
                2pw9</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387441479">1387441479</a></td>
                <td>584</td>
                <td>67</td>
				<td><span class=n4>0.13</span></td>
                <td>
                Ashfaq Ahmad</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387440255">1387440255</a></td>
                <td>685</td>
                <td>355</td>
				<td><span class=n4>0.53</span></td>
                <td>
                pcaf</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387402449">1387402449</a></td>
                <td>128</td>
                <td>1384</td>
				<td><span class=n1>12.47</span></td>
                <td>
                GS13232A 40-167</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387365459">1387365459</a></td>
                <td>111</td>
                <td>74</td>
				<td><span class=n4>0.67</span></td>
                <td>
                GS13232A 50-160</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387364982">1387364982</a></td>
                <td>167</td>
                <td>137</td>
				<td><span class=n4>0.85</span></td>
                <td>
                GS13232A</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387364784">1387364784</a></td>
                <td>185</td>
                <td>9</td>
				<td><span class=n4>0.05</span></td>
                <td>
                SP17061B</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387364731">1387364731</a></td>
                <td>109</td>
                <td>57</td>
				<td><span class=n4>0.52</span></td>
                <td>
                SP13297C</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387364204">1387364204</a></td>
                <td>167</td>
                <td>138</td>
				<td><span class=n4>0.85</span></td>
                <td>
                GS13232A</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387353243">1387353243</a></td>
                <td>449</td>
                <td>252</td>
				<td><span class=n4>0.72</span></td>
                <td>
                mm</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387350714">1387350714</a></td>
                <td>93</td>
                <td>17508</td>
				<td><span class=n0>190.30</span></td>
                <td>
                only C</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387336923">1387336923</a></td>
                <td>794</td>
                <td>1</td>
				<td><span class=n4>0.00</span></td>
                <td>
                HisKr-e-06-It-8</td>
                <td><span class="sub">
                -e <span class="n2">1E-06</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387336235">1387336235</a></td>
                <td>787</td>
                <td>1</td>
				<td><span class=n4>0.00</span></td>
                <td>
                stocho</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387335134">1387335134</a></td>
                <td>794</td>
                <td>1</td>
				<td><span class=n4>0.00</span></td>
                <td>
                hiskr</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387278702">1387278702</a></td>
                <td>101</td>
                <td>161</td>
				<td><span class=n3>1.59</span></td>
                <td>
                prot 1E-06 iter 8</td>
                <td><span class="sub">
                -e <span class="n2">1E-06</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387278335">1387278335</a></td>
                <td>101</td>
                <td>161</td>
				<td><span class=n3>1.59</span></td>
                <td>
                prot 1E-06</td>
                <td><span class="sub">
                -e <span class="n2">1E-06</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387275228">1387275228</a></td>
                <td>101</td>
                <td>159</td>
				<td><span class=n3>1.57</span></td>
                <td>
                prot</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1387274880">1387274880</a></td>
                <td>101</td>
                <td>2109</td>
				<td><span class=n0>21.74</span></td>
                <td>
                prot</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1387273917">1387273917</a></td>
                <td>101</td>
                <td>159</td>
				<td><span class=n3>1.61</span></td>
                <td>
                prot</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 0                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1386882242">1386882242</a></td>
                <td>204</td>
                <td>9</td>
				<td><span class=n4>0.04</span></td>
                <td>
                roll</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 25                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1386882155">1386882155</a></td>
                <td>204</td>
                <td>9</td>
				<td><span class=n4>0.04</span></td>
                <td>
                roll44</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1386651738">1386651738</a></td>
                <td>204</td>
                <td>9</td>
				<td><span class=n4>0.04</span></td>
                <td>
                roll</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1386291833">1386291833</a></td>
                <td>136</td>
                <td>54</td>
				<td><span class=n4>0.40</span></td>
                <td>
                tyrosine-protein 300-435</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1386291670">1386291670</a></td>
                <td>300</td>
                <td>1787</td>
				<td><span class=n2>6.55</span></td>
                <td>
                tyrosine-protein 1-300</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1386290166">1386290166</a></td>
                <td>435</td>
                <td>68</td>
				<td><span class=n4>0.16</span></td>
                <td>
                tyrosine-protein</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1386262784">1386262784</a></td>
                <td>743</td>
                <td>7</td>
				<td><span class=n4>0.01</span></td>
                <td>
                tdb</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1386244003">1386244003</a></td>
                <td>708</td>
                <td>167</td>
				<td><span class=n4>0.24</span></td>
                <td>
                pots</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1386194907">1386194907</a></td>
                <td>583</td>
                <td>1840</td>
				<td><span class=n3>3.34</span></td>
                <td>
                ytyt</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1386176802">1386176802</a></td>
                <td>163</td>
                <td>2</td>
				<td><span class=n4>0.01</span></td>
                <td>
                roll</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1386104495">1386104495</a></td>
                <td>258</td>
                <td>22</td>
				<td><span class=n4>0.09</span></td>
                <td>
                tospovirus</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 1            	-cov 95                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1386103934">1386103934</a></td>
                <td>258</td>
                <td>27</td>
				<td><span class=n4>0.10</span></td>
                <td>
                tospovirus</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 1            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1386103527">1386103527</a></td>
                <td>258</td>
                <td>27</td>
				<td><span class=n4>0.10</span></td>
                <td>
                tospovirus</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1385998643">1385998643</a></td>
                <td>101</td>
                <td>159</td>
				<td><span class=n3>1.57</span></td>
                <td>
                CcdB GREMLIN</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1385744236">1385744236</a></td>
                <td>86</td>
                <td>3450</td>
				<td><span class=n0>50.00</span></td>
                <td>
                3vfzA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1385674903">1385674903</a></td>
                <td>366</td>
                <td>479</td>
				<td><span class=n3>1.32</span></td>
                <td>
                Bsub_YheD _BSU09770 80-445</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1385618187">1385618187</a></td>
                <td>453</td>
                <td>214</td>
				<td><span class=n4>0.48</span></td>
                <td>
                Bsub_YheD _BSU09770</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1385513769">1385513769</a></td>
                <td>89</td>
                <td>549</td>
				<td><span class=n2>6.31</span></td>
                <td>
                Q9X0J6</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1384812638">1384812638</a></td>
                <td>137</td>
                <td>1</td>
				<td><span class=n4>0.01</span></td>
                <td>
                kwglbwblv</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1384787493">1384787493</a></td>
                <td>325</td>
                <td>706</td>
				<td><span class=n3>2.20</span></td>
                <td>
                twinarg</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1384776086">1384776086</a></td>
                <td>666</td>
                <td>745</td>
				<td><span class=n3>1.15</span></td>
                <td>
                brade</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1384502719">1384502719</a></td>
                <td>724</td>
                <td>1</td>
				<td><span class=n4>0.00</span></td>
                <td>
                overal final check</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1384501425">1384501425</a></td>
                <td>537</td>
                <td>555</td>
				<td><span class=n3>1.31</span></td>
                <td>
                wdoutCA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1384499927">1384499927</a></td>
                <td>253</td>
                <td>399</td>
				<td><span class=n3>1.61</span></td>
                <td>
                new_trim_data</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1384481639">1384481639</a></td>
                <td>235</td>
                <td>27955</td>
				<td><span class=n0>124.80</span></td>
                <td>
                RR</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1384449696">1384449696</a></td>
                <td>484</td>
                <td>1653</td>
				<td><span class=n3>3.89</span></td>
                <td>
                CARR</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1384379830">1384379830</a></td>
                <td>881</td>
                <td>10</td>
				<td><span class=n4>0.01</span></td>
                <td>
                FL-Gal4</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1384302712">1384302712</a></td>
                <td>62</td>
                <td>125</td>
				<td><span class=n3>2.15</span></td>
                <td>
                GAL4-DBD</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1384294308">1384294308</a></td>
                <td>70</td>
                <td>44</td>
				<td><span class=n4>0.64</span></td>
                <td>
                gal4dbd 1-70 1e-20</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1384290151">1384290151</a></td>
                <td>70</td>
                <td>1139</td>
				<td><span class=n0>17.00</span></td>
                <td>
                gal4dbd 1-70</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1384289784">1384289784</a></td>
                <td>196</td>
                <td>15</td>
				<td><span class=n4>0.08</span></td>
                <td>
                gal4dbd</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1384279060">1384279060</a></td>
                <td>141</td>
                <td>145</td>
				<td><span class=n3>1.03</span></td>
                <td>
                roll 300-470 20-160</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1384278369">1384278369</a></td>
                <td>171</td>
                <td>148</td>
				<td><span class=n4>0.86</span></td>
                <td>
                roll 300-470</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1384277629">1384277629</a></td>
                <td>171</td>
                <td>148</td>
				<td><span class=n4>0.86</span></td>
                <td>
                roll 300-470</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1384277130">1384277130</a></td>
                <td>470</td>
                <td>158</td>
				<td><span class=n4>0.34</span></td>
                <td>
                roll</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1383855279">1383855279</a></td>
                <td>536</td>
                <td>403</td>
				<td><span class=n4>0.82</span></td>
                <td>
                GBA_human</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1383707580">1383707580</a></td>
                <td>486</td>
                <td>644</td>
				<td><span class=n3>1.53</span></td>
                <td>
                DhpCARR</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1383656994">1383656994</a></td>
                <td>884</td>
                <td>1</td>
				<td><span class=n4>0.00</span></td>
                <td>
                ch</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1383636204">1383636204</a></td>
                <td>226</td>
                <td>29283</td>
				<td><span class=n0>130.73</span></td>
                <td>
                Rgx</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1383549203">1383549203</a></td>
                <td>65</td>
                <td>33</td>
				<td><span class=n4>0.52</span></td>
                <td>
                TM_TCS interdomain</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1383361478">1383361478</a></td>
                <td>141</td>
                <td>150</td>
				<td><span class=n3>1.10</span></td>
                <td>
                test 170-310</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1383360363">1383360363</a></td>
                <td>66</td>
                <td>92</td>
				<td><span class=n3>1.51</span></td>
                <td>
                small domain i8</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1383353193">1383353193</a></td>
                <td>66</td>
                <td>92</td>
				<td><span class=n3>1.51</span></td>
                <td>
                small domain</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1383261899">1383261899</a></td>
                <td>66</td>
                <td>15</td>
				<td><span class=n4>0.23</span></td>
                <td>
                small domain</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1383228835">1383228835</a></td>
                <td>216</td>
                <td>56355</td>
				<td><span class=n0>263.34</span></td>
                <td>
                dhp-ca</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1382999981">1382999981</a></td>
                <td>228</td>
                <td>30</td>
				<td><span class=n4>0.15</span></td>
                <td>
                ss</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1382907794">1382907794</a></td>
                <td>577</td>
                <td>300</td>
				<td><span class=n4>0.56</span></td>
                <td>
                Yeast_PAB1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1382752092">1382752092</a></td>
                <td>671</td>
                <td>1789</td>
				<td><span class=n3>3.03</span></td>
                <td>
                test</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1382747613">1382747613</a></td>
                <td>671</td>
                <td>1789</td>
				<td><span class=n3>3.03</span></td>
                <td>
                test</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1382729628">1382729628</a></td>
                <td>671</td>
                <td>1789</td>
				<td><span class=n3>3.03</span></td>
                <td>
                test</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1382699404">1382699404</a></td>
                <td>139</td>
                <td>53</td>
				<td><span class=n4>0.38</span></td>
                <td>
                test</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1382563988">1382563988</a></td>
                <td>109</td>
                <td>56</td>
				<td><span class=n4>0.51</span></td>
                <td>
                SP13297E</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1382563922">1382563922</a></td>
                <td>101</td>
                <td>44</td>
				<td><span class=n4>0.45</span></td>
                <td>
                SP17945A</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1382563578">1382563578</a></td>
                <td>101</td>
                <td>44</td>
				<td><span class=n4>0.45</span></td>
                <td>
                SP17945A</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1382563536">1382563536</a></td>
                <td>109</td>
                <td>54</td>
				<td><span class=n4>0.49</span></td>
                <td>
                SP13297E</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1382563232">1382563232</a></td>
                <td>101</td>
                <td>38</td>
				<td><span class=n4>0.39</span></td>
                <td>
                SP17945A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1382273363">1382273363</a></td>
                <td>207</td>
                <td>857</td>
				<td><span class=n3>4.14</span></td>
                <td>
                zero iteration 2</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1382234293">1382234293</a></td>
                <td>398</td>
                <td>873</td>
				<td><span class=n3>2.20</span></td>
                <td>
                zero iteration</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 0            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1382152145">1382152145</a></td>
                <td>226</td>
                <td>22318</td>
				<td><span class=n0>108.87</span></td>
                <td>
                wdoutCA-Nter</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1382151343">1382151343</a></td>
                <td>322</td>
                <td>934</td>
				<td><span class=n3>2.90</span></td>
                <td>
                wdoutCA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1382149686">1382149686</a></td>
                <td>398</td>
                <td>1481</td>
				<td><span class=n3>3.72</span></td>
                <td>
                muscle alignment</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1382133355">1382133355</a></td>
                <td>216</td>
                <td>1481</td>
				<td><span class=n2>7.22</span></td>
                <td>
                1q6o</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1382092153">1382092153</a></td>
                <td>312</td>
                <td>13977</td>
				<td><span class=n0>45.23</span></td>
                <td>
                clustal_alignment</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1382082972">1382082972</a></td>
                <td>171</td>
                <td>16266</td>
				<td><span class=n0>108.44</span></td>
                <td>
                GLI1 100-270</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1382026204">1382026204</a></td>
                <td>978</td>
                <td>15</td>
				<td><span class=n4>0.01</span></td>
                <td>
                GLI1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1381998731">1381998731</a></td>
                <td>130</td>
                <td>34</td>
				<td><span class=n4>0.26</span></td>
                <td>
                sds</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1381920005">1381920005</a></td>
                <td>130</td>
                <td>34</td>
				<td><span class=n4>0.26</span></td>
                <td>
                sds</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1381878101">1381878101</a></td>
                <td>102</td>
                <td>322</td>
				<td><span class=n3>3.22</span></td>
                <td>
                e4b</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1381876777">1381876777</a></td>
                <td>102</td>
                <td>322</td>
				<td><span class=n3>3.22</span></td>
                <td>
                e4b</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1381530274">1381530274</a></td>
                <td>190</td>
                <td>8253</td>
				<td><span class=n0>47.70</span></td>
                <td>
                1CVJ</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1381525157">1381525157</a></td>
                <td>85</td>
                <td>261</td>
				<td><span class=n3>3.35</span></td>
                <td>
                1nmr</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1381449903">1381449903</a></td>
                <td>132</td>
                <td>11023</td>
				<td><span class=n0>95.03</span></td>
                <td>
                CC20730A</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 2            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1381448906">1381448906</a></td>
                <td>132</td>
                <td>112</td>
				<td><span class=n4>0.85</span></td>
                <td>
                CC20730A</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 1            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1381448604">1381448604</a></td>
                <td>132</td>
                <td>121</td>
				<td><span class=n4>0.92</span></td>
                <td>
                CC20730A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1381443290">1381443290</a></td>
                <td>132</td>
                <td>68905</td>
				<td><span class=n0>564.79</span></td>
                <td>
                CC20730A</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1381442883">1381442883</a></td>
                <td>132</td>
                <td>121</td>
				<td><span class=n4>0.92</span></td>
                <td>
                CC20730A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1381326306">1381326306</a></td>
                <td>304</td>
                <td>236</td>
				<td><span class=n4>0.78</span></td>
                <td>
                wdout CA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1381261284">1381261284</a></td>
                <td>462</td>
                <td>8092</td>
				<td><span class=n0>19.31</span></td>
                <td>
                NadC</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1381192796">1381192796</a></td>
                <td>323</td>
                <td>43</td>
				<td><span class=n4>0.14</span></td>
                <td>
                TatT</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1381183389">1381183389</a></td>
                <td>189</td>
                <td>1210</td>
				<td><span class=n2>6.65</span></td>
                <td>
                SP13737C</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1381152067">1381152067</a></td>
                <td>670</td>
                <td>428</td>
				<td><span class=n4>0.73</span></td>
                <td>
                vick</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1381128420">1381128420</a></td>
                <td>161</td>
                <td>161</td>
				<td><span class=n4>1.00</span></td>
                <td>
                ATPB 90-250</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1381127783">1381127783</a></td>
                <td>256</td>
                <td>139</td>
				<td><span class=n4>0.55</span></td>
                <td>
                ATPB</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1381126459">1381126459</a></td>
                <td>256</td>
                <td>151</td>
				<td><span class=n4>0.60</span></td>
                <td>
                ATPB</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1380857740">1380857740</a></td>
                <td>226</td>
                <td>44210</td>
				<td><span class=n0>217.78</span></td>
                <td>
                agrc 200-425</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1380837166">1380837166</a></td>
                <td>226</td>
                <td>40138</td>
				<td><span class=n0>194.84</span></td>
                <td>
                agrc 200-425</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1380830317">1380830317</a></td>
                <td>425</td>
                <td>96</td>
				<td><span class=n4>0.23</span></td>
                <td>
                agrc</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1380727725">1380727725</a></td>
                <td>453</td>
                <td>1726</td>
				<td><span class=n3>4.50</span></td>
                <td>
                cp2_alat</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1380612640">1380612640</a></td>
                <td>445</td>
                <td>11728</td>
				<td><span class=n0>27.79</span></td>
                <td>
                3l1l</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1380612533">1380612533</a></td>
                <td>444</td>
                <td>11208</td>
				<td><span class=n0>26.94</span></td>
                <td>
                3gia</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1380612111">1380612111</a></td>
                <td>500</td>
                <td>1501</td>
				<td><span class=n3>3.03</span></td>
                <td>
                2wsw</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1380611931">1380611931</a></td>
                <td>500</td>
                <td>2448</td>
				<td><span class=n2>5.20</span></td>
                <td>
                2q72</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1380443331">1380443331</a></td>
                <td>396</td>
                <td>4469</td>
				<td><span class=n1>14.80</span></td>
                <td>
                wujun2</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1380437168">1380437168</a></td>
                <td>401</td>
                <td>1339</td>
				<td><span class=n3>3.60</span></td>
                <td>
                154 </td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1380272480">1380272480</a></td>
                <td>539</td>
                <td>1478</td>
				<td><span class=n3>2.99</span></td>
                <td>
                4AIN_A</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1380272084">1380272084</a></td>
                <td>539</td>
                <td>1476</td>
				<td><span class=n3>2.99</span></td>
                <td>
                4AIN_A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1380199292">1380199292</a></td>
                <td>196</td>
                <td>122</td>
				<td><span class=n4>0.62</span></td>
                <td>
                yjag</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1380138417">1380138417</a></td>
                <td>301</td>
                <td>2411</td>
				<td><span class=n2>8.29</span></td>
                <td>
                4IGL_A 400-700</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1380136658">1380136658</a></td>
                <td>194</td>
                <td>4922</td>
				<td><span class=n0>26.46</span></td>
                <td>
                1uul</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1380135944">1380135944</a></td>
                <td>690</td>
                <td>935</td>
				<td><span class=n3>1.39</span></td>
                <td>
                4IGL_B</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1380135902">1380135902</a></td>
                <td>1488</td>
                <td>102</td>
				<td><span class=n4>0.07</span></td>
                <td>
                4IGL_A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1380096497">1380096497</a></td>
                <td>207</td>
                <td>2212</td>
				<td><span class=n1>11.17</span></td>
                <td>
                YidC</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1379708582">1379708582</a></td>
                <td>176</td>
                <td>2167</td>
				<td><span class=n1>12.75</span></td>
                <td>
                Q53VV3_sub</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1379705058">1379705058</a></td>
                <td>397</td>
                <td>838</td>
				<td><span class=n3>2.70</span></td>
                <td>
                Q53VV3_full</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1379705018">1379705018</a></td>
                <td>176</td>
                <td>2771</td>
				<td><span class=n0>16.20</span></td>
                <td>
                Q53VV3_sub</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1379704736">1379704736</a></td>
                <td>132</td>
                <td>658</td>
				<td><span class=n3>4.99</span></td>
                <td>
                WYL domain</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1379704550">1379704550</a></td>
                <td>372</td>
                <td>415</td>
				<td><span class=n3>1.25</span></td>
                <td>
                Vancomycin B-type resistance protein vanW</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1379667122">1379667122</a></td>
                <td>189</td>
                <td>18</td>
				<td><span class=n4>0.10</span></td>
                <td>
                Q9NPF7</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1379666701">1379666701</a></td>
                <td>85</td>
                <td>14</td>
				<td><span class=n4>0.17</span></td>
                <td>
                2K0N</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1379496737">1379496737</a></td>
                <td>42</td>
                <td>9451</td>
				<td><span class=n0>225.02</span></td>
                <td>
                Q3YL5_EF</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1379493377">1379493377</a></td>
                <td>116</td>
                <td>3603</td>
				<td><span class=n0>35.32</span></td>
                <td>
                Q3YL5_full</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1379492598">1379492598</a></td>
                <td>42</td>
                <td>2</td>
				<td><span class=n4>0.05</span></td>
                <td>
                Q3YL5_EF</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1379492428">1379492428</a></td>
                <td>116</td>
                <td>2</td>
				<td><span class=n4>0.02</span></td>
                <td>
                Q3YL5_full</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1379302168">1379302168</a></td>
                <td>80</td>
                <td>42</td>
				<td><span class=n4>0.53</span></td>
                <td>
                4a20A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 2            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1379301352">1379301352</a></td>
                <td>80</td>
                <td>17</td>
				<td><span class=n4>0.22</span></td>
                <td>
                4a20A</td>
                <td><span class="sub">
                -e <span class="n0">1E-20</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1379300283">1379300283</a></td>
                <td>80</td>
                <td>1037</td>
				<td><span class=n1>14.01</span></td>
                <td>
                4a20A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1379205224">1379205224</a></td>
                <td>101</td>
                <td>1522</td>
				<td><span class=n0>15.22</span></td>
                <td>
                P60492 RL21_THET8</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1379164819">1379164819</a></td>
                <td>830</td>
                <td>4712</td>
				<td><span class=n2>5.78</span></td>
                <td>
                RA</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1379134853">1379134853</a></td>
                <td>281</td>
                <td>44325</td>
				<td><span class=n0>170.48</span></td>
                <td>
                ItkFL 340-620</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1379129307">1379129307</a></td>
                <td>620</td>
                <td>88</td>
				<td><span class=n4>0.14</span></td>
                <td>
                ItkFL</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1379052773">1379052773</a></td>
                <td>137</td>
                <td>118</td>
				<td><span class=n4>0.91</span></td>
                <td>
                stat3_sh2</td>
                <td><span class="sub">
                -e <span class="n3">1E-04</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1379037759">1379037759</a></td>
                <td>137</td>
                <td>107</td>
				<td><span class=n4>0.82</span></td>
                <td>
                stat3_sh2</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1378882835">1378882835</a></td>
                <td>300</td>
                <td>4973</td>
				<td><span class=n0>17.51</span></td>
                <td>
                Ferrous-iron efflux pump FieF</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1378872896">1378872896</a></td>
                <td>361</td>
                <td>2393</td>
				<td><span class=n2>6.65</span></td>
                <td>
                DegQ 30-390</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1378862361">1378862361</a></td>
                <td>395</td>
                <td>1908</td>
				<td><span class=n3>4.92</span></td>
                <td>
                DegQ</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1378844941">1378844941</a></td>
                <td>131</td>
                <td>21</td>
				<td><span class=n4>0.16</span></td>
                <td>
                cc</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1378834714">1378834714</a></td>
                <td>57</td>
                <td>926</td>
				<td><span class=n0>16.84</span></td>
                <td>
                RL32</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1378828938">1378828938</a></td>
                <td>131</td>
                <td>558</td>
				<td><span class=n3>4.26</span></td>
                <td>
                cc</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1378803386">1378803386</a></td>
                <td>283</td>
                <td>526</td>
				<td><span class=n3>1.86</span></td>
                <td>
                hVDAC1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1378800846">1378800846</a></td>
                <td>283</td>
                <td>622</td>
				<td><span class=n3>2.21</span></td>
                <td>
                hVDAC1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1378800354">1378800354</a></td>
                <td>283</td>
                <td>625</td>
				<td><span class=n3>2.22</span></td>
                <td>
                hVDAC1</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 8            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1378777663">1378777663</a></td>
                <td>171</td>
                <td>22</td>
				<td><span class=n4>0.14</span></td>
                <td>
                dnmt1_mammal</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1378028768">1378028768</a></td>
                <td>334</td>
                <td>6302</td>
				<td><span class=n0>19.82</span></td>
                <td>
                4G1U HmuU</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1377397301">1377397301</a></td>
                <td>113</td>
                <td>1834</td>
				<td><span class=n0>16.52</span></td>
                <td>
                Q5SHP3</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1377397182">1377397182</a></td>
                <td>200</td>
                <td>23774</td>
				<td><span class=n0>125.13</span></td>
                <td>
                CifR</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1377324331">1377324331</a></td>
                <td>81</td>
                <td>5656</td>
				<td><span class=n0>71.59</span></td>
                <td>
                4F25 cut to pdb length</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 95                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1377323210">1377323210</a></td>
                <td>81</td>
                <td>13235</td>
				<td><span class=n0>163.40</span></td>
                <td>
                4F25 cut to pdb length</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 0                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1377321811">1377321811</a></td>
                <td>110</td>
                <td>1299</td>
				<td><span class=n1>12.49</span></td>
                <td>
                50S ribosomal protein L24 Q5SHP9</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1377320903">1377320903</a></td>
                <td>420</td>
                <td>413</td>
				<td><span class=n3>1.00</span></td>
                <td>
                human EIF2A 1-420</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 90                -gap 50                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1377319840">1377319840</a></td>
                <td>420</td>
                <td>413</td>
				<td><span class=n4>0.99</span></td>
                <td>
                human EIF2A 1-420</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 90                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1377319292">1377319292</a></td>
                <td>420</td>
                <td>7273</td>
				<td><span class=n0>18.46</span></td>
                <td>
                human EIF2A 1-420</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr >
            	<td><a href="http://openseq.org/sub.php?id=1377316792">1377316792</a></td>
                <td>585</td>
                <td>179</td>
				<td><span class=n4>0.31</span></td>
                <td>
                human EIF2A</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
				<tr class="light">
            	<td><a href="http://openseq.org/sub.php?id=1377307531">1377307531</a></td>
                <td>96</td>
                <td>1608</td>
				<td><span class=n0>17.11</span></td>
                <td>
                L23 50S Thermus Ribosome</td>
                <td><span class="sub">
                -e <span class="n1">1E-10</span>
            	-iter 4            	-cov 75                -gap 75                -msa HHblits</span>
                
                </td>
            	
            </tr>
		</table>
	<hr /><span class="sub">
Page generated in 0.4336 seconds.</span>
</body>
