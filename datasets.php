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

<h2>Datasets</h2>

<h3>Clean Dataset (CD)</h3>

<p>
Our Clean Dataset (CD) has 10,000 genes with numbers of splice forms varying from one to ten. In particular, there are 1000 genes with n splice forms, for each n=1,2,…,10, for a total of 55,000 splice forms. There are no overlapping genes and alternate forms for a given gene share both terminal exons, differing only by the presence of absence of one or more internal exons. All genes correspond to RefSeq gene models or are modified from a RefSeq model by exclusion of some number of internal exons. CD has 50 million paired-end reads of length 100 bases per end, with a minimum fragment length of 100 bases, median of 200 bases and max of 400. All genes were expressed at the same depth of coverage of approximately 40 reads.
</p>
<h4>Download: <a href="http://itmat.greg.s3.amazonaws.com/hayer1_CD.tar.gz">hayer1_CD.tar.gz</a>
  (<a href="http://itmat.greg.s3.amazonaws.com/hayer1_CD.md5.txt">hayer1_CD.md5.txt</a>) </h4>


<h3>Realistic Dataset (RD)</h3>

<p>
We built a simulated Realistic Dataset (RD), with complicating factors similar to what is observed in real, but relatively clean, data sets. In particular this data has a substitution rate of 0.001, an indel rate of 0.0005, an error rate of 0.05, and approximately 30% of the reads coming from introns. The expression levels also follow a spectrum representative of real data. RD was generated with the full and unmodified RefSeq annotation track of 30,150 transcripts, again with 50 million paired-end reads of 100 bases per end and with a minimum fragment length of 100 bases, median of 200 bases and max of 400.
</p>
<h4>Download: <a href="http://itmat.greg.s3.amazonaws.com/hayer1_CD.tar.gz">hayer1_CD.tar.gz</a>
  (<a href="http://itmat.greg.s3.amazonaws.com/hayer1_CD.md5.txt">hayer1_CD.md5.txt</a>) </h4>


<h3>In vitro transcription dataset (IVT)</h3>
<p>
Finally, we used data from in vitro transcription of 1062 human cDNAs (IVT), sequenced by both poly A seq and total RNA-seq <a href="http://www.ncbi.nlm.nih.gov/pubmed/24981968">(Lahens et al. 2014)</a>. Because these are cDNAs, we know the exact nucleotide sequence, including all the exon-exon junctions. Of these genes 50 have multiple splice forms. This data provides an evaluation of each algorithm on real data.
</p>
<h4>Download: <a href="http://www.ncbi.nlm.nih.gov/geo/query/acc.cgi?acc=GSE50445">GEO ID=GSE50445</a></h4>

</div> <!-- end #content -->


<?php include('includes/footer.php'); ?>

</div> <!-- End #wrapper -->

  </body>

</html>