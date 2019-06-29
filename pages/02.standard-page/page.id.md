---
title: Tools
media_order: website-blocked.png
published: true
date: '23-06-2019 23:33'
taxonomy:
    category:
        - Tool
    tag:
        - 'Unblock Website'
hide_page_title: false
show_sidebar: false
hide_git_sync_repo_link: false
body_classes: 'header-animated header-dark header-transparent'
---

[center]**Buka Website Yang Diblokir**[/center]
[center]Tool ini dibuat berdasarkan Hideoxy. Hideoxy adalah proxy web gratis baru untuk menjelajahi internet secara anonim. Alat ini dapat menyembunyikan alamat IP Anda, mengamankan koneksi Internet Anda, menelusuri situs web secara anonim, menyembunyikan riwayat Internet Anda dan melindungi privasi Anda secara online. Anda dapat menggunakan proksi web Hideoxy di rumah dan di kantor untuk mengunjungi situs web yang diblokir, seperti YouTube, Reddit, Facebook, Google, Tumblr, dan banyak lagi. Jika Anda merasa perlu untuk mengunjungi Hideoxy, gunakan [tautan ini](http://www.hideoxy.com)[/center]

<div>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Masukkan domain website yang diblokir :</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 d-inline-flex flex-row justify-content-center">
          <form class="form-inline" action="http://service.hideoxy.com/index.php" method="post" role="form">
            <div class="form-group">
              <input type="email" class="form-control form-control-lg w-100 px-3 shadow mx-auto" id="websiteURL" placeholder=""> </div>
            <button type="submit" class="btn btn-primary btn-lg ml-3">Buka Blokir</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Contoh: web-diblokir.com dan buang http:// atau https://</p>
        </div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" style=""></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style=""></script>
</body>

</html>
</div>

---


<div>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <script type="text/javascript">
    if (top.location.href != window.location.href) top.location.href = window.location.href;
  </script>
  <script type="text/javascript">
    var afpp = new Array(); // auto-focus point position
    var faces = new Array();

    function update_faces() {
      for (i = 0; i < faces.length; i++) {
        var rec = faces[i];
        var img = document.getElementById(rec.img_id);
        var face = document.getElementById(rec.div_id);
        // for Panasonic
        var black_bar_height = 0;
        if (rec.expected_ratio) {
          black_bar_height = (img.height - (img.width * rec.expected_ratio)) / 2;
          if (black_bar_height < 1) black_bar_height = 0;
        }
        var x1 = Math.round(2 + 1 + rec.x1 * img.width - 3);
        var y1 = Math.round(black_bar_height + 2 + 1 + rec.y1 * (img.height - black_bar_height * 2) - 3);
        var width;
        var height;
        if (rec.width) {
          width = rec.width * img.width;
          height = rec.height * (rec.height_factor_is_width ? img.width : img.height);
        } else {
          var x2 = Math.round(2 + 1 + rec.x2 * img.width - 3);
          var y2 = Math.round(black_bar_height + 2 + 1 + rec.y2 * (img.height - black_bar_height * 2) - 3);
          width = x2 - x1
          height = y2 - y1
        }
        face.style.left = x1 + "px";
        face.style.top = y1 + "px";
        face.style.width = width + "px";
        face.style.height = height + "px";
      }
    }

    function update_af_point() {
      for (i = 0; i < afpp.length; i++) {
        var rec = afpp[i];
        var img = document.getElementById(rec.img_id);
        var div = document.getElementById(rec.div_id);
        div.style.left = Math.round(2 + 1 + rec["x"] * img.width - 3 / 2 - 2) + "px";
        div.style.top = Math.round(2 + 1 + rec["y"] * img.height - 3 / 2 - 2) + "px";
      }
    }

    function update_img_markup() {
      update_faces();
      update_af_point();
    }
    var FT1 = "click to hide";
    var FT2 = "click to show";

    function toggle_faces(obj) {
      var vis;
      if (obj.innerHTML == FT1) {
        obj.innerHTML = FT2;
        vis = "hidden";
      } else {
        obj.innerHTML = FT1;
        vis = "visible";
      }
      for (i = 0; i < faces.length; i++) {
        var rec = faces[i];
        document.getElementById(rec.div_id).style.visibility = vis
      }
    }

    function toggle_afpp(obj) {
      var vis;
      if (obj.innerHTML == FT1) {
        obj.innerHTML = FT2;
        vis = "hidden";
      } else {
        obj.innerHTML = FT1;
        vis = "visible";
      }
      for (i = 0; i < afpp.length; i++) {
        var rec = afpp[i];
        document.getElementById(rec.div_id).style.visibility = vis
      }
    }
    var image_deg = new Array();
    var image_scale = new Array();
    var image_factor = new Array();
    var image_W = new Array();
    var image_H = new Array();
    var view_W = new Array();
    var view_H = new Array();

    function show_image(num, scale, force_width, force_height) {
      var image = document.getElementById('I' + num + '_image');
      var canvas = document.getElementById('I' + num + '_canvas');
      var percent = document.getElementById('I' + num + '_percent');
      var area = document.getElementById('I' + num + '_area');
      if (scale == null) {
        image_factor[num] = 1;
        image.width = view_W[num];
        image.height = view_H[num];
      } else if (scale != 1) {
        image_factor[num] *= scale;
        image.width *= scale;
        image.height *= scale;
      }
      if (typeof(canvas.getContext) == "function") {
        var context = canvas.getContext('2d');
        var degrees = image_deg[num];
        context.save();
        switch (image_deg[num]) {
          default:
            canvas.style.display = 'none';
            image.style.display = 'inline';
            break;
          case 90:
            canvas.setAttribute('width', image.height);
            canvas.setAttribute('height', image.width);
            context.rotate(90 * Math.PI / 180);
            context.drawImage(image, 0, -image.height, image.width, image.height);
            image.style.display = 'none';
            canvas.style.display = 'inline';
            break;
          case 180:
            canvas.setAttribute('width', image.width);
            canvas.setAttribute('height', image.height);
            context.rotate(180 * Math.PI / 180);
            context.drawImage(image, -image.width, -image.height, image.width, image.height);
            image.style.display = 'none';
            canvas.style.display = 'inline';
            break;
          case 270:
            canvas.setAttribute('width', image.height);
            canvas.setAttribute('height', image.width);
            context.rotate(270 * Math.PI / 180);
            context.drawImage(image, -image.width, 0, image.width, image.height);
            image.style.display = 'none';
            canvas.style.display = 'inline';
            break;
        }
        context.restore();
      } else {
        switch (image_deg[num]) {
          default:
            image.style.filter = 'progid:DXImageTransform.Microsoft.BasicImage(rotation=0)';
            break;
          case 90:
            image.style.filter = 'progid:DXImageTransform.Microsoft.BasicImage(rotation=1)';
            break;
          case 180:
            image.style.filter = 'progid:DXImageTransform.Microsoft.BasicImage(rotation=2)';
            break;
          case 270:
            image.style.filter = 'progid:DXImageTransform.Microsoft.BasicImage(rotation=3)';
            break;
        }
      }
      percent.innerHTML = Math.round(image_factor[num] * 100) + "%";
      if (area && image_W[num] && image_H[num]) {
        area.innerHTML = Math.round(image.width * image.height / (image_W[num] * image_H[num]) * 100) + "%";
      }
      update_img_markup();
    }

    function zoom_image(num, dir) {
      if (dir > 0) show_image(num, 1.25);
      else show_image(num, .75);
    }

    function rotate_image(num, dir) {
      image_deg[num] += 90 * dir;
      if ((image_deg[num] <= 0) || (image_deg[num] >= 360)) image_deg[num] = 0;
      show_image(num, 1);
    }

    function Histogram(obj, file) {
      var url = location.pathname + "?h=" + file
      obj.innerHTML = "<div class='histo'><img class='histo' src='" + url + "'/><\/div>";
    }

    function toggleframe(span, id, url1, url2) {
      var obj = document.getElementById(id);
      if (obj.src == url1) {
        obj.src = url2;
        span.innerHTML = "show raw frame";
      } else {
        obj.src = url1;
        span.innerHTML = "show composite frame";
      }
    }
  </script>
  <style type="text/css">
    table#basic td {
      border: solid 2px #AAA;
      border-left: none;
      border-bottom: none
    }

    table#basic td:first-child {
      border-left: solid 2px #AAA
    }

    table#basic tr:last-child td {
      border-bottom: solid 2px #AAA
    }

    a:visited,
    a:link {
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    div.histo {
      background-color: #666;
      padding: 10px;
      width: 256px
    }

    .nobr {
      white-space: nowrap;
    }

    div.img_markup {
      position: relative;
      width: 0;
      height: 0;
      overflow: visible
    }

    div.img_markup_item {
      position: absolute;
      z-index: 2;
      overflow: visible
    }

    div.facename {
      position: absolute;
      bottom: -25px;
      left: -0.5em;
      color: yellow;
      background-color: rgba(0, 0, 0, 0.5);
      border: solid 1px #888;
      padding: 0 3px;
      white-space: nowrap
    }

    div.face {
      border: solid red 3px
    }

    div.afpp {
      border: solid 2px green;
      width: 3px;
      height: 3px;
      background-color: white;
      padding: 1px;
    }

    img.frame {
      overflow: visible;
      background-color: #888
    }

    img.subframe {
      overflow: visible;
      background-color: #888;
      position: absolute;
      left: 0px;
      top: 0px
    }
  </style>
  <script type="text/javascript">
    function cansubmit() {
      document.getElementById('subbutton').disabled = false;
      document.getElementById('subbutton').style.borderColor = '#F00';
    }
    window.onload = function() {
      document.getElementById('subbutton').disabled = true;
    };
  </script>
  <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
  <title>Endi Hariadi's Image Metadata Viewer</title>
  <meta name="description" content="Alat Online untuk melihat data Exif, yaitu data pelengkap di balik sebuah file gambar, seperti; pengaturan kamera, kapan diambil, lokasi pengambilan gambar, pemilik gambar, dan sebagainya.">
  <meta name="keywords" content="Exif Image, Endi Hariadi, Tool Online">
</head>

<body>
  <h1 class="text-center">Endi Hariadi's Image Metadata Viewer</h1>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex flex-column justify-content-end align-items-center">
          <form action="http://exif.regex.info/exif.cgi/" method="post" enctype="multipart/form-data" class="w-100">
            <input name="imgurl" type="url" value="" placeholder="URL of image on the web" size="40"><br>
            <i>or...</i><br class="my-3 py-3">
            <b>File:</b> <input type="file" name="f" placeholder="local filename">
          </form>
        </div>
        <div class="col-md-6">
          <div class="g-recaptcha" data-callback="cansubmit" data-sitekey="6LciPqsUAAAAAG7pcKGZfZfssuASiScmUikT6P3t"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mt-3" style="">
          <div class="form-group flex-column d-flex justify-content-end align-items-stretch"><input type="submit" id="subbutton" value="View Image Data" ></div>
        </div>
      </div>
    </div>
  </div>
  <hr style="clear:both;margin-top:100px" class="text-center">
  <p style="font-size:70%"><b>Works with these file types</b>: <span title="3FR: Hasselblad RAW format">3FR</span>, <span title="3G2: 3rd Gen. Partnership Project 2 audio/video">3G2</span>, <span title="3GP: 3rd Gen. Partnership Project audio/video">3GP</span>, <span title="3GP2: 3rd Gen. Partnership Project 2 audio/video">3GP2</span>, <span title="3GPP: 3rd Gen. Partnership Project audio/video">3GPP</span>, <span title="A: Static library">A</span>, <span title="AA: Audible Audiobook">AA</span>, <span title="AAE: Apple edit information">AAE</span>, <span title="AAX: Audible Enhanced Audiobook">AAX</span>, <span title="ACFM: Adobe Composite Font Metrics">ACFM</span>, <span title="ACR: American College of Radiology ACR-NEMA">ACR</span>, <span title="AFM: Adobe Font Metrics">AFM</span>, <span title="AI: Adobe Illustrator">AI</span>, <span title="AIF: Audio Interchange File Format">AIF</span>, <span title="AIFC: Audio Interchange File Format Compressed">AIFC</span>, <span title="AIFF: Audio Interchange File Format">AIFF</span>, <span title="AIT: Adobe Illustrator">AIT</span>, <span title="AMFM: Adobe Multiple Master Font Metrics">AMFM</span>, <span title="APE: Monkey's Audio format">APE</span>, <span title="APNG: Animated Portable Network Graphics">APNG</span>, <span title="ARQ: Sony Alpha Pixel-Shift RAW format">ARQ</span>, <span title="ARW: Sony Alpha RAW format">ARW</span>, <span title="ASF: Microsoft Advanced Systems Format">ASF</span>, <span title="AVI: Audio Video Interleaved">AVI</span>, <span title="AZW: Mobipocket electronic book">AZW</span>, <span title="AZW3: Mobipocket electronic book">AZW3</span>, <span title="BMP: Windows Bitmap">BMP</span>, <span title="BPG: Better Portable Graphics">BPG</span>, <span title="BTF: Big Tagged Image File Format">BTF</span>, <span title="CHM: Microsoft Compiled HTML format">CHM</span>, <span title="CIFF: Camera Image File Format">CIFF</span>, <span title="COS: Capture One Settings">COS</span>, <b style="font-size:120%"><span title="CR2: Canon RAW 2 format">CR2</span></b>, <span title="CR3: Canon RAW 3 format">CR3</span>, <span title="CRM: Canon RAW Movie">CRM</span>, <b style="font-size:120%"><span title="CRW: Canon RAW format">CRW</span></b>, <span title="CS1: Sinar CaptureShop 1-Shot RAW">CS1</span>, <span title="DC3: Digital Imaging and Communications in Medicine">DC3</span>, <span title="DCM: Digital Imaging and Communications in Medicine">DCM</span>, <span title="DCP: DNG Camera Profile">DCP</span>, <span title="DCR: Kodak Digital Camera RAW">DCR</span>, <span title="DFONT: Macintosh Data fork Font">DFONT</span>, <span title="DIB: Device Independent Bitmap">DIB</span>, <span title="DIC: Digital Imaging and Communications in Medicine">DIC</span>, <span title="DICM: Digital Imaging and Communications in Medicine">DICM</span>, <span title="DIVX: DivX media format">DIVX</span>, <span title="DJV: DjVu image">DJV</span>, <span title="DJVU: DjVu image">DJVU</span>, <span title="DLL: Windows Dynamic Link Library">DLL</span>, <b style="font-size:120%"><span title="DNG: Digital Negative">DNG</span></b>, <span title="DOC: Microsoft Word Document">DOC</span>, <span title="DOCM: Office Open XML Document Macro-enabled">DOCM</span>, <span title="DOCX: Office Open XML Document">DOCX</span>, <span title="DOT: Microsoft Word Template">DOT</span>, <span title="DOTM: Office Open XML Document Template Macro-enabled">DOTM</span>, <span title="DOTX: Office Open XML Document Template">DOTX</span>, <span title="DPX: Digital Picture Exchange">DPX</span>, <span title="DR4: Canon VRD version 4 Recipe">DR4</span>, <span title="DS2: Digital Speech Standard 2">DS2</span>, <span title="DSS: Digital Speech Standard">DSS</span>, <span title="DV: Digital Video">DV</span>, <span title="DVB: Digital Video Broadcasting">DVB</span>, <span title="DVR-MS: Microsoft Digital Video recording">DVR-MS</span>, <span title="DYLIB: Mach-O Dynamic Link Library">DYLIB</span>, <span title="EIP: Capture One Enhanced Image Package">EIP</span>, <span title="EPS: Encapsulated PostScript Format">EPS</span>, <span title="EPS2: Encapsulated PostScript Format">EPS2</span>, <span title="EPS3: Encapsulated PostScript Format">EPS3</span>, <span title="EPSF: Encapsulated PostScript Format">EPSF</span>, <span title="EPUB: Electronic Publication">EPUB</span>, <span title="ERF: Epson Raw Format">ERF</span>, <span title="EXE: Windows executable file">EXE</span>, <span title="EXIF: Exchangable Image File Metadata">EXIF</span>, <span title="EXR: Open EXR">EXR</span>, <span title="EXV: Exiv2 metadata">EXV</span>, <span title="F4A: Adobe Flash Player 9+ Audio">F4A</span>, <span title="F4B: Adobe Flash Player 9+ audio Book">F4B</span>, <span title="F4P: Adobe Flash Player 9+ Protected">F4P</span>, <span title="F4V: Adobe Flash Player 9+ Video">F4V</span>, <span title="FFF: Hasselblad Flexible File Format">FFF</span>, <span title="FLA: Macromedia/Adobe Flash project">FLA</span>, <span title="FLAC: Free Lossless Audio Codec">FLAC</span>, <span title="FLIF: Free Lossless Image Format">FLIF</span>, <span title="FLIR: FLIR File Format">FLIR</span>, <span title="FLV: Flash Video">FLV</span>, <span title="FPF: FLIR Public image Format">FPF</span>, <span title="FPX: FlashPix">FPX</span>, <span title="GIF: Compuserve Graphics Interchange Format">GIF</span>, <span title="GPR: GoPro RAW">GPR</span>, <span title="GZ: GNU ZIP compressed archive">GZ</span>, <span title="GZIP: GNU ZIP compressed archive">GZIP</span>, <span title="HDP: Windows HD Photo">HDP</span>, <span title="HDR: Radiance RGBE High Dynamic Range">HDR</span>, <span title="HEIC: High Efficiency Image Format still image">HEIC</span>, <span title="HEIF: High Efficiency Image Format">HEIF</span>, <span title="HTM: HyperText Markup Language">HTM</span>, <span title="HTML: HyperText Markup Language">HTML</span>, <span title="ICAL: iCalendar Schedule">ICAL</span>, <span title="ICC: International Color Consortium">ICC</span>, <span title="ICM: International Color Consortium">ICM</span>, <span title="ICS: iCalendar Schedule">ICS</span>, <span title="IDML: Adobe InDesign Markup Language">IDML</span>, <span title="IIQ: Phase One Intelligent Image Quality RAW">IIQ</span>, <span title="IND: Adobe InDesign">IND</span>, <span title="INDD: Adobe InDesign Document">INDD</span>, <span title="INDT: Adobe InDesign Template">INDT</span>, <span title="INX: Adobe InDesign Interchange">INX</span>, <span title="ISO: ISO 9660 disk image">ISO</span>, <span title="ITC: iTunes Cover Flow">ITC</span>, <span title="J2C: JPEG 2000 codestream">J2C</span>, <span title="J2K: JPEG 2000 file">J2K</span>, <span title="JNG: JPG Network Graphics">JNG</span>, <span title="JP2: JPEG 2000 file">JP2</span>, <span title="JPC: JPEG 2000 codestream">JPC</span>, <span title="JPE: Joint Photographic Experts Group">JPE</span>, <span title="JPEG: Joint Photographic Experts Group">JPEG</span>, <span title="JPF: JPEG 2000 file">JPF</span>, <b style="font-size:120%"><span title="JPG: Joint Photographic Experts Group">JPG</span></b>, <span title="JPM: JPEG 2000 compound image">JPM</span>, <span title="JPX: JPEG 2000 with extensions">JPX</span>, <span title="JSON: JavaScript Object Notation">JSON</span>, <span title="JXR: JPEG XR">JXR</span>, <span title="K25: Kodak DC25 RAW">K25</span>, <span title="KDC: Kodak Digital Camera RAW">KDC</span>, <span title="KEY: Apple Keynote presentation">KEY</span>, <span title="KTH: Apple Keynote Theme">KTH</span>, <span title="LA: Lossless Audio">LA</span>, <span title="LFP: Lytro Light Field Picture">LFP</span>, <span title="LFR: Lytro Light Field Picture">LFR</span>, <span title="LNK: Windows shortcut">LNK</span>, <span title="M2T: MPEG-2 Transport Stream">M2T</span>, <span title="M2TS: MPEG-2 Transport Stream">M2TS</span>, <span title="M2V: MPEG-2 Video">M2V</span>, <span title="M4A: MPEG-4 Audio">M4A</span>, <span title="M4B: MPEG-4 audio Book">M4B</span>, <span title="M4P: MPEG-4 Protected">M4P</span>, <span title="M4V: MPEG-4 Video">M4V</span>, <span title="MAX: 3D Studio MAX">MAX</span>, <span title="MEF: Mamiya (RAW) Electronic Format">MEF</span>, <span title="MIE: Meta Information Encapsulation format">MIE</span>, <span title="MIF: Magick Image File Format">MIF</span>, <span title="MIFF: Magick Image File Format">MIFF</span>, <span title="MKA: Matroska Audio">MKA</span>, <span title="MKS: Matroska Subtitle">MKS</span>, <span title="MKV: Matroska Video">MKV</span>, <span title="MNG: Multiple-image Network Graphics">MNG</span>, <span title="MOBI: Mobipocket electronic book">MOBI</span>, <span title="MODD: Sony Picture Motion metadata">MODD</span>, <span title="MOI: MOD Information file">MOI</span>, <span title="MOS: Creo Leaf Mosaic">MOS</span>, <span title="MOV: Apple QuickTime movie">MOV</span>, <span title="MP3: MPEG-1 Layer 3 audio">MP3</span>, <span title="MP4: MPEG-4 video">MP4</span>, <span title="MPC: Musepack Audio">MPC</span>, <span title="MPEG: MPEG-1 or MPEG-2 audio/video">MPEG</span>, <span title="MPG: MPEG-1 or MPEG-2 audio/video">MPG</span>, <span title="MPO: Extended Multi-Picture format">MPO</span>, <span title="MQV: Sony Mobile Quicktime Video">MQV</span>, <span title="MRW: Minolta RAW format">MRW</span>, <span title="MTS: MPEG-2 Transport Stream">MTS</span>, <span title="MXF: Material Exchange Format">MXF</span>, <b style="font-size:120%"><span title="NEF: Nikon (RAW) Electronic Format">NEF</span></b>, <span title="NEWER: Capture One Settings">NEWER</span>, <span title="NMBTEMPLATE: Apple Numbers Template">NMBTEMPLATE</span>, <span title="NRW: Nikon RAW (2)">NRW</span>, <span title="NUMBERS: Apple Numbers spreadsheet">NUMBERS</span>, <span title="O: Relocatable Object">O</span>, <span title="ODB: Open Document Database">ODB</span>, <span title="ODC: Open Document Chart">ODC</span>, <span title="ODF: Open Document Formula">ODF</span>, <span title="ODG: Open Document Graphics">ODG</span>, <span title="ODI: Open Document Image">ODI</span>, <span title="ODP: Open Document Presentation">ODP</span>, <span title="ODS: Open Document Spreadsheet">ODS</span>, <span title="ODT: Open Document Text file">ODT</span>, <span title="OFR: OptimFROG audio">OFR</span>, <span title="OGG: Ogg Vorbis audio file">OGG</span>, <span title="OGV: Ogg Video file">OGV</span>, <span title="OPUS: Ogg Opus audio file">OPUS</span>, <span title="ORF: Olympus RAW format">ORF</span>, <span title="OTF: Open Type Font">OTF</span>, <span title="PAC: Lossless Predictive Audio Compression">PAC</span>, <span title="PAGES: Apple Pages document">PAGES</span>, <span title="PBM: Portable BitMap">PBM</span>, <span title="PCD: Kodak Photo CD Image Pac">PCD</span>, <span title="PCT: Apple PICTure">PCT</span>, <span title="PDB: Palm Database">PDB</span>, <span title="PDF: Adobe Portable Document Format">PDF</span>, <span title="PEF: Pentax (RAW) Electronic Format">PEF</span>, <span title="PFA: PostScript Font ASCII">PFA</span>, <span title="PFB: PostScript Font Binary">PFB</span>, <span title="PFM: Printer Font Metrics">PFM</span>, <span title="PGF: Progressive Graphics File">PGF</span>, <span title="PGM: Portable Gray Map">PGM</span>, <span title="PICT: Apple PICTure">PICT</span>, <span title="PLIST: Apple Property List">PLIST</span>, <span title="PMP: Sony DSC-F1 Cyber-Shot PMP">PMP</span>, <b style="font-size:120%"><span title="PNG: Portable Network Graphics">PNG</span></b>, <span title="POT: Microsoft PowerPoint Template">POT</span>, <span title="POTM: Office Open XML Presentation Template Macro-enabled">POTM</span>, <span title="POTX: Office Open XML Presentation Template">POTX</span>, <span title="PPM: Portable Pixel Map">PPM</span>, <span title="PPS: Microsoft PowerPoint Slideshow">PPS</span>, <span title="PPSM: Office Open XML Presentation Slideshow Macro-enabled">PPSM</span>, <span title="PPSX: Office Open XML Presentation Slideshow">PPSX</span>, <span title="PPT: Microsoft PowerPoint Presentation">PPT</span>, <span title="PPTM: Office Open XML Presentation Macro-enabled">PPTM</span>, <span title="PPTX: Office Open XML Presentation">PPTX</span>, <span title="PRC: Palm Database">PRC</span>, <span title="PS: PostScript">PS</span>, <span title="PS2: PostScript">PS2</span>, <span title="PS3: PostScript">PS3</span>, <span title="PSB: Photoshop Large Document">PSB</span>, <span title="PSD: Photoshop Document">PSD</span>, <span title="PSDT: Photoshop Document Template">PSDT</span>, <span title="PSP: Paint Shop Pro">PSP</span>, <span title="PSPFRAME: Paint Shop Pro">PSPFRAME</span>, <span title="PSPIMAGE: Paint Shop Pro">PSPIMAGE</span>, <span title="PSPSHAPE: Paint Shop Pro">PSPSHAPE</span>, <span title="PSPTUBE: Paint Shop Pro">PSPTUBE</span>, <span title="QIF: QuickTime Image File">QIF</span>, <span title="QT: Apple QuickTime movie">QT</span>, <span title="QTI: QuickTime Image File">QTI</span>, <span title="QTIF: QuickTime Image File">QTIF</span>, <span title="R3D: Redcode RAW Video">R3D</span>, <span title="RA: Real Audio">RA</span>, <span title="RAF: FujiFilm RAW Format">RAF</span>, <span title="RAM: Real Audio Metafile">RAM</span>, <span title="RAR: RAR Archive">RAR</span>, <b style="font-size:120%"><span title="RAW: Kyocera Contax N Digital RAW or Panasonic RAW">RAW</span></b>, <span title="RIF: Resource Interchange File Format">RIF</span>, <span title="RIFF: Resource Interchange File Format">RIFF</span>, <span title="RM: Real Media">RM</span>, <span title="RMVB: Real Media Variable Bitrate">RMVB</span>, <span title="RPM: Real Media Plug-in Metafile">RPM</span>, <span title="RSRC: Mac OS Resource">RSRC</span>, <span title="RTF: Rich Text Format">RTF</span>, <span title="RV: Real Video">RV</span>, <span title="RW2: Panasonic RAW 2">RW2</span>, <span title="RWL: Leica RAW">RWL</span>, <span title="RWZ: Rawzor compressed image">RWZ</span>, <span title="SEQ: FLIR image Sequence">SEQ</span>, <span title="SKETCH: Sketch design file">SKETCH</span>, <span title="SO: Shared Object file">SO</span>, <span title="SR2: Sony RAW Format 2">SR2</span>, <span title="SRF: Sony RAW Format">SRF</span>, <span title="SRW: Samsung RAW format">SRW</span>, <span title="SVG: Scalable Vector Graphics">SVG</span>, <span title="SWF: Shockwave Flash">SWF</span>, <span title="THM: Canon Thumbnail">THM</span>, <span title="THMX: Office Open XML Theme">THMX</span>, <span title="TIF: Tagged Image File Format">TIF</span>, <span title="TIFF: Tagged Image File Format">TIFF</span>, <span title="TORRENT: BitTorrent description file">TORRENT</span>, <span title="TS: MPEG-2 Transport Stream">TS</span>, <span title="TTC: True Type Font Collection">TTC</span>, <span title="TTF: True Type Font">TTF</span>, <span title="TUB: Paint Shop Pro">TUB</span>, <span title="VCARD: Virtual Card">VCARD</span>, <span title="VCF: Virtual Card">VCF</span>, <span title="VOB: Video Object">VOB</span>, <span title="VRD: Canon VRD Recipe Data">VRD</span>, <span title="VSD: Microsoft Visio Drawing">VSD</span>, <span title="WAV: WAVeform (Windows digital audio)">WAV</span>, <span title="WDP: Windows Media Photo">WDP</span>, <span title="WEBM: Google Web Movie">WEBM</span>, <span title="WEBP: Google Web Picture">WEBP</span>, <span title="WMA: Windows Media Audio">WMA</span>, <span title="WMV: Windows Media Video">WMV</span>, <span title="WTV: Windows recorded TV show">WTV</span>, <span title="WV: WavePack lossless audio">WV</span>, <span title="X3F: Sigma RAW format">X3F</span>, <span title="XCF: GIMP native image format">XCF</span>, <span title="XHTML: Extensible HyperText Markup Language">XHTML</span>, <span title="XLA: Microsoft Excel Add-in">XLA</span>, <span title="XLAM: Office Open XML Spreadsheet Add-in Macro-enabled"> XLAM</span>, <span title="XLS: Microsoft Excel Spreadsheet">XLS</span>, <span title="XLSB: Office Open XML Spreadsheet Binary">XLSB</span>, <span title="XLSM: Office Open XML Spreadsheet Macro-enabled">XLSM</span>, <span title="XLSX: Office Open XML Spreadsheet">XLSX</span>, <span title="XLT: Microsoft Excel Template">XLT</span>, <span title="XLTM: Office Open XML Spreadsheet Template Macro-enabled">XLTM</span>, <span title="XLTX: Office Open XML Spreadsheet Template">XLTX</span>, <b style="font-size:120%"><span title="XMP: Extensible Metadata Platform">XMP</span></b>, and <span title="ZIP: ZIP archive">ZIP</span>.<br> Powered by Phil Harvy's <a href="http://owl.phy.queensu.ca/~phil/exiftool/">ExifTool</a>. Max file size 80 megabytes. Photos and data viewed with this service are not shared with anyone else, nor are they saved beyond the temporary period needed for the service to function.</p>
  <div class="col-md-12">
    <p class="text-center">Tool ini diambil dari sumber aslinya milik Phil Harvy's <a href="http://exif.regex.info/exif.cgi">di alamat ini </a>.</p>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
</div>