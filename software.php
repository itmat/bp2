<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="Benchmark Analysis of Algorithms for Determining and Quantifying Full-length mRNA Splice Forms from RNA-Seq Data" />

<meta name="keywords" content="RNA-Seq" />

<meta name="author" content="Katharina Hayer" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<title>BP2</title>

</head>

<body>


<div id="wrapper">

<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>


<div id="content">

<h2>Benchmarked Software</h2>
<h3>Genome guided transcriptome assembly approaches</h3>
<table>
<tr>
  <th>Name</th>
  <th>Pubmed</th>
  <th>Version</th>
</tr>
<tr>
  <td>AUGUSTUS</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/18218656">Using native and syntenically mapped cDNA alignments to improve de novo gene finding. (Stanke 2008)</a></td>
  <td>augustus-3.0.3</td>
</tr>
<tr>
  <td>CLASS</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/23734605">CLASS: constrained transcript assembly of RNA-seq reads. (Song 2013)</a></td>
  <td>CLASS_2.00</td>
</tr>
<tr>
  <td>Cufflinks</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/20436464">Transcript assembly and quantification by RNA-Seq reveals unannotated transcripts and isoform switching during cell differentiation. (Trapnell 2010)</a></td>
  <td>cufflinks-2.2.1.Linux_x86_64</td>
</tr>
<tr>
<tr>
  <td>FlipFlop</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/24813214">Efficient RNA isoform identification and quantification from RNA-Seq data with network flows. (Bernard 2014)</a></td>
  <td>flipflop_1.4.1</td>
</tr>
<tr>
  <td>iReckon</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/23204306">iReckon: simultaneous isoform discovery and abundance estimation from RNA-seq data. (Mezlini 2013)</a></td>
  <td>IReckon-1.0.8.jar</td>
</tr>
<tr>
  <td>IsoLasso</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/21951053">IsoLasso: a LASSO regression approach to RNA-Seq based transcriptome assembly. (Li 2011)</a></td>
  <td>isolasso-2.6.1</td>
</tr>
<tr>
  <td>MITIE</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/23980025">MITIE: Simultaneous RNA-Seq-based transcript identification and quantification in multiple samples. (Behr 2013)</a></td>
  <td>10/27/2014</td>
</tr>
<tr>
  <td>StringTie</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/25690850">StringTie enables improved reconstruction of a transcriptome from RNA-seq reads. (Pertea 2015)</a></td>
  <td>v1.0.0</td>
</tr>
</table>

<h3>De novo transcriptome assembly approaches</h3>
<table>
<tr>
  <th>Name</th>
  <th>Pubmed</th>
  <th>Version</th>
</tr>
<tr>
  <td>SOAPdenovo-Trans</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/24532719">SOAPdenovo-Trans: de novo transcriptome assembly with short RNA-Seq reads. (Xie 2014)</a></td>
  <td>v1.03</td>
</tr>
<tr>
  <td>Trans-ABySS</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/20935650">De novo assembly and analysis of RNA-seq data. (Robertson 2010)</a></td>
  <td>1.5.2</td>
</tr>
<tr>
  <td>Trinity</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/21572440">Full-length transcriptome assembly from RNA-Seq data without a reference genome. (Grabherr 2011)</a></td>
  <td>trinityrnaseq_r20140717</td>
</tr>
</table>

<h2>Other tools used in this project</h2>
<table>
<tr>
  <th>Name</th>
  <th>Pubmed</th>
  <th>Version</th>
</tr>
<tr>
  <td>Bowtie 2</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/22388286">Fast gapped-read alignment with Bowtie 2. (Langmead 2012)</a></td>
  <td>bowtie2-2.2.3</td>
</tr>
<tr>
  <td>GMAP</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/15728110">GMAP: a genomic mapping and alignment program for mRNA and EST sequences. (Wu 2005)</a></td>
  <td>gmap-gsnap-2014-10-22</td>
</tr>
<tr>
  <td>SAMtools</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/19505943">The Sequence Alignment/Map format and SAMtools. (Li 2009)</a></td>
  <td>samtools-0.1.19</td>
</tr>
<tr>
  <td>STAR</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/23104886">STAR: ultrafast universal RNA-seq aligner. (Dobin 2013)</a></td>
  <td>STAR_2.4.0d</td>
</tr>
<tr>
  <td>TopHat2</td>
  <td><a href="http://www.ncbi.nlm.nih.gov/pubmed/23618408">TopHat2: accurate alignment of transcriptomes in the presence of insertions, deletions and gene fusions. (Kim 2013)</a></td>
  <td>TopHat 2.0.13</td>
</tr>
</table>

<h2>Our Code to evaluate the presented algorithms</h2>
<p>
The benchmarking scripts can be found on <a href="https://github.com/khayer/benchmarking_scripts">github</a>.
</p>

</div> <!-- end #content -->


<?php include('includes/footer.php'); ?>

</div> <!-- End #wrapper -->

  </body>

</html>