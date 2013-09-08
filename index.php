<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KDV ve Gelir Vergisi Hesaplama</title>
<!-- CSS Dosyaları -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive1.css"/>
<style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      #sonucGoster, #sonucGosterf{
          height:250px;
      }

    </style>
<!-- JS Dosyaları -->
<script type="text/javascript" language="javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="assets/js/bootstrap.js"></script>

</head>
<!--<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false" style="min-height:600px;">-->
<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
<div class="container">
<div id="maas" class="span6">
<h4>Fatura için KDV ve Gelir Vergisi Hesaplama</h4>
<form class="form-inline">
<label class="answers-label" for="kdvli" title="">KDVli Bedel</label>
<input type="text" id="kdvli">
<button type="button" id="widget-btn1" onclick="hesapla();" class="btn btn-small btn-primary">Devam</button>
</form>
<div id="sonucGoster">

</div>
</div>
<div id="fatura" class="span5">
<h4>Fatura için KDV ve Gelir Vergisi Hesaplama</h4>
<form class="form-inline">
<label class="answers-label" for="kdvsiz" title="">KDV'siz Bedel</label>
<input type="text" id="kdvsiz">
<button type="button" id="widget-btn1" onclick="fhesapla();" class="btn btn-small btn-primary">Devam</button>
</form>
<div id="sonucGosterf">

</div>
</div>
<div class="span12">
<a href="vergihesapla.zip">Script İndir</a>
</div>
</div>
</body>
</html>
<script language="javascript" type="text/javascript">
	function hesapla(){
        var kdvli    = $('#kdvli').val();
        var kdvsiz   = kdvli/1.18;
        var kdv      = kdvli-kdvsiz;
        var gelir    = kdvsiz*.2;
        var kalan    = kdvsiz-gelir;
        var odenecek = kdv+gelir;

        htmlStr = "";
        htmlStr += "<h4>Hesaplama Sonucu</h4>";
        htmlStr += "<table class='table span4'>";
        htmlStr += "<tr><td>KDV</td><td style='text-align:right;'>"+kdv.toFixed(2)+" TL</td></tr>";
        htmlStr += "<tr><td>KDV siz</td><td style='text-align:right;'>"+kdvsiz.toFixed(2)+" TL</td></tr>";
        htmlStr += "<tr><td>Gelir Vergisi</td><td style='text-align:right;'>"+gelir.toFixed(2)+" TL</td></tr>";
        htmlStr += "<tr><td>Kalan</td><td style='text-align:right;'>"+kalan.toFixed(2)+" TL</td></tr>";
        htmlStr += "<tr><td>Ödenecek Toplam</td><td style='text-align:right;'>"+odenecek.toFixed(2)+" TL</td></tr>";

        $('#sonucGoster').html(htmlStr);
	}

    function fhesapla(){
        var kdvsiz    = $('#kdvsiz').val();
        var kdv      = kdvsiz*0.18;
        var gelir    = kdvsiz*.2;
        var sonuc    = +kdvsiz+kdv;
        var kalan    = kdvsiz-gelir;
        var odenecek = kdv+gelir;

        htmlStr = "";
        htmlStr += "<h4>Hesaplama Sonucu</h4>";
        htmlStr += "<table class='table span4'>";
        htmlStr += "<tr><td>KDV</td><td style='text-align:right;'>"+kdv.toFixed(2)+" TL</td></tr>";
        htmlStr += "<tr><td>Toplam</td><td style='text-align:right;'>"+sonuc.toFixed(2)+" TL</td></tr>";
        htmlStr += "<tr><td>Gelir Vergisi</td><td style='text-align:right;'>"+gelir.toFixed(2)+" TL</td></tr>";
        htmlStr += "<tr><td>Kalan</td><td style='text-align:right;'>"+kalan.toFixed(2)+" TL</td></tr>";
        htmlStr += "<tr><td>Ödenecek Toplam</td><td style='text-align:right;'>"+odenecek.toFixed(2)+" TL</td></tr>";

        $('#sonucGosterf').html(htmlStr);
    }
</script>