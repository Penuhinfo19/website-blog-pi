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
content:
    items: '@self.modular'
    order:
        by: ''
        dir: ''
---

# [center]Buka Website Yang Diblokir[/center]
[center]Tool ini dibuat berdasarkan Hideoxy. Hideoxy adalah proxy web gratis baru untuk menjelajahi internet secara anonim. Alat ini dapat menyembunyikan alamat IP Anda, mengamankan koneksi Internet Anda, menelusuri situs web secara anonim, menyembunyikan riwayat Internet Anda dan melindungi privasi Anda secara online. Anda dapat menggunakan proksi web Hideoxy di rumah dan di kantor untuk mengunjungi situs web yang diblokir, seperti YouTube, Reddit, Facebook, Google, Tumblr, dan banyak lagi. Jika Anda merasa perlu untuk mengunjungi Hideoxy, gunakan [tautan ini](http://www.hideoxy.com)[/center]

<div>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
              <input type="text" name="url" class="form-control form-control-lg w-100 px-3 shadow mx-auto" id="websiteURL" placeholder=""> </div>
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
</body>

</html>
</div>

---
# [center]Tinjau Data Dalam Gambar[/center]

<div>
    <!DOCTYPE html>
	<html>
	
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Pembaca Data Gambar</title>
	  <meta name="description" content="Alat Online untuk melihat data Exif, yaitu data pelengkap di balik sebuah file gambar, seperti; pengaturan kamera, kapan diambil, lokasi pengambilan gambar, pemilik gambar, dan sebagainya.">
	  <meta name="keywords" content="Exif Image, Endi Hariadi, Tool Online">
	    <!-- GeoCoder -->
				<link rel="stylesheet" href="assets/css/Control.Geocoder.css">
	  <script src="https://cdn.jsdelivr.net/npm/exif-js"></script>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	</head>
	
	<body>
	  <div class="py-5">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <p class="text-center">Tool online untuk melihat data dan informasi pada gambar (yang tertanam dalam metadata gambar). Ini dapat berupa; jenis dan merk kamera saat foto diambil, pengaturan editing, tanggal pengambilan, pengunggah foto asli, informasi tanggal dan lokasi, dan lokasi gambar (dapat dilacak lokasinya), dan sebagainya.</p>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="py-5">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <form class="form-inline">
	            <div class="input-group input-group-lg w-100 d-inline-flex flex-row justify-content-center">
	              <input id="file-input" type="file" class="form-control form-control-lg">
	            </div>
	          </form>
	        </div>
	      </div>
	    </div>
	  </div>
	    
	    <!-- Modal -->
				<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;">
				<div class="modal-dialog modal-lg">
					<div class="modal-content"><div class="ajax-loading" style="display: none;"><img src="assets/img/ajax-loading.gif"></div>
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<span class="modal-title" id="modal-label"><div class="alert alert-info editing-files" role="alert"><h5>You're editing this picture: GERINDRA.jpg</h5></div></span>
						</div>
						<div class="modal-body">
							<div id="exifer-modal-response"></div>						
							<form id="form-exiftool" method="get" class="form-horizontal">
								<!-- REMOVED SEARCH LOCATION -->
								<div id="googleMap" style="width: 100%; height: 300px; position: relative;" class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" role="presentation" src="http://b.tile.openstreetmap.org/10/549/373.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(196px, -76px, 0px); opacity: 1;"><img alt="" role="presentation" src="http://c.tile.openstreetmap.org/10/550/373.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(452px, -76px, 0px); opacity: 1;"><img alt="" role="presentation" src="http://c.tile.openstreetmap.org/10/549/374.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(196px, 180px, 0px); opacity: 1;"><img alt="" role="presentation" src="http://a.tile.openstreetmap.org/10/550/374.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(452px, 180px, 0px); opacity: 1;"><img alt="" role="presentation" src="http://a.tile.openstreetmap.org/10/548/373.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-60px, -76px, 0px); opacity: 1;"><img alt="" role="presentation" src="http://a.tile.openstreetmap.org/10/551/373.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(708px, -76px, 0px); opacity: 1;"><img alt="" role="presentation" src="http://b.tile.openstreetmap.org/10/548/374.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-60px, 180px, 0px); opacity: 1;"><img alt="" role="presentation" src="http://b.tile.openstreetmap.org/10/551/374.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(708px, 180px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"><img src="https://unpkg.com/leaflet@1.4.0/dist/images/marker-shadow.png" class="leaflet-marker-shadow leaflet-zoom-animated" alt="" style="margin-left: -12px; margin-top: -41px; width: 41px; height: 41px; transform: translate3d(414px, 150px, 0px);"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><img src="https://unpkg.com/leaflet@1.4.0/dist/images/marker-icon.png" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive leaflet-marker-draggable" alt="" tabindex="0" style="margin-left: -12px; margin-top: -41px; width: 25px; height: 41px; transform: translate3d(414px, 150px, 0px); z-index: 150;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"><div class="leaflet-popup  leaflet-zoom-animated" style="opacity: 1; transform: translate3d(415px, 116px, 0px); bottom: -7px; left: -152px;"><div class="leaflet-popup-content-wrapper"><div class="leaflet-popup-content" style="width: 263px;"><div class="mapInfo">The uploaded picture does not have any GPS data,<br>this is just the default marker locaion ;D</div></div></div><div class="leaflet-popup-tip-container"><div class="leaflet-popup-tip"></div></div><a class="leaflet-popup-close-button" href="#close">×</a></div></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(140762px, 95713.7px, 0px) scale(512);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"><div class="leaflet-control-geocoder leaflet-bar leaflet-control-geocoder-expanded leaflet-control"><button class="leaflet-control-geocoder-icon" type="button">&nbsp;</button><div class="leaflet-control-geocoder-form"><input class="" type="text" placeholder="Search Places..."></div><div class="leaflet-control-geocoder-form-no-error">Nothing found.</div><ul class="leaflet-control-geocoder-alternatives leaflet-control-geocoder-alternatives-minimized"></ul></div></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control">© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a></div></div></div></div>							
								<div class="row panel-title pictureCleaner">
									<div class="col-xs-6 col-md-4"><h3><span class="label label-warning">EXIF Cleaner</span></h3></div><div class="col-xs-6 col-md-8"><span class="pull-right top-buffer-15"><label class="checkbox-inline"><input type="checkbox" name="Clear" id="Clear"> If checked all the tags will be cleared</label></span></div>
								</div>
	
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" id="exif-general-li" class="active"><a href="#exif-general" aria-controls="exif-general" role="tab" data-toggle="tab" aria-expanded="true">EXIF General <span class="badge data-error" id="exif-general-badge"></span></a></li>
									<li role="presentation" id="exif-camera-settings-li"><a href="#exif-camera-settings" aria-controls="exif-camera-settings" role="tab" data-toggle="tab">EXIF Camera Settings <span class="badge data-error" id="exif-camera-settings-badge"></span></a></li>
									<li role="presentation" id="iptc-tags-li" class=""><a href="#iptc-tags" aria-controls="iptc-tags" role="tab" data-toggle="tab" aria-expanded="false">IPTC Tags<span class="badge data-error" id="iptc-tags-badge"></span></a></li>
									<li role="presentation" id="geo-tags-li"><a href="#geo-tags" aria-controls="geo-tags" role="tab" data-toggle="tab">GEO Tags <span class="badge data-error" id="geo-tags-badge"></span></a></li>
									<li role="presentation" id="xmp-tags-li"><a href="#xmp-tags" aria-controls="xmp-tags" role="tab" data-toggle="tab">XMP Tags <span class="badge data-error" id="xmp-tags-badge"></span></a></li>
									<li role="presentation" id="xmp-gpano-tags-li"><a href="#xmp-gpano-tags" aria-controls="xmp-tags" role="tab" data-toggle="tab">XMP GPano Tags <span class="badge data-error" id="xmp-gpano-tags-badge"></span></a></li>
									<li role="presentation" id="quicktime-tags-li" style="display: none;"><a href="#quicktime-tags" aria-controls="quicktime-tags" role="tab" data-toggle="tab">Quicktime Tags <span class="badge data-error" id="quicktime-tags-badge"></span></a></li>
								</ul>
								<div class="tab-content">
									<!----	EXIF General-->
									<div role="tabpanel" class="tab-pane fade active in" id="exif-general">
											<div class="row panel-title">
												<div class="col-xs-12">
													<h6 class="text-center">These tags will work with:&nbsp;&nbsp;
														<span class="label label-success">.JPEG / .JPG</span>&nbsp;&nbsp;
														<span class="label label-success">.PNG</span>&nbsp;&nbsp;
														<span class="label label-success">.TIFF</span>&nbsp;&nbsp;
														<span class="label label-danger fileTypeDisabled">.GIF</span>&nbsp;&nbsp;
														<span class="label label-danger fileTypeDisabled">.MP4</span>&nbsp;&nbsp;
														<span class="label label-danger fileTypeDisabled">.MOV</span>&nbsp;&nbsp;
														<span class="label label-danger fileTypeDisabled">.3G2 / 3GP2</span>&nbsp;&nbsp;
														<span class="label label-danger fileTypeDisabled">.3GP / 3GPP</span>&nbsp;&nbsp;
													</h6>
												</div>
												<div class="col-xs-6"><h3><span class="label label-primary">EXIF Data(s)</span></h3></div><div class="col-xs-6"><span class="pull-right top-buffer-15"><label class="checkbox-inline"><input type="checkbox" name="EXIFwrite" id="EXIFwrite" checked="checked"> Write</label></span></div>
											</div>
										<div class="row">
											<div class="form-group"><label class="col-xs-3 control-label">Make</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFMake" id="EXIFMake"><ul class="typeahead dropdown-menu"></ul></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Model</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFModel" id="EXIFModel"><ul class="typeahead dropdown-menu"></ul></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">LensMake</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFLensMake" id="EXIFLensMake"><ul class="typeahead dropdown-menu"></ul></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">LensModel</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFLensModel" id="EXIFLensModel"><ul class="typeahead dropdown-menu"></ul></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">LensSerialNumber</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFLensSerialNumber" id="EXIFLensSerialNumber"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Software</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFSoftware" id="EXIFSoftware"></div><div class="col-xs-1"></div></div>
											<hr>
											<div class="form-group"><label class="col-xs-3 control-label">CreateDate</label><div class="col-xs-5"><input type="text" class="form-control input-sm" name="EXIFCreateDate" id="EXIFCreateDate"></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD hh:mm:ss</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">DateTimeOriginal</label><div class="col-xs-5"><input type="text" class="form-control input-sm" name="EXIFDateTimeOriginal" id="EXIFDateTimeOriginal"></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD hh:mm:ss</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ModifyDate</label><div class="col-xs-5"><input type="text" class="form-control input-sm" name="EXIFModifyDate" id="EXIFModifyDate"></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD hh:mm:ss</code></pre></div><div class="col-xs-3"></div></div>
											<hr>
											<div class="form-group"><label class="col-xs-3 control-label">Artist</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFArtist" id="EXIFArtist"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">OwnerName</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFOwnerName" id="EXIFOwnerName"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Copyright</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFCopyright" id="EXIFCopyright"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ImageDescription</label><div class="col-xs-8"><textarea class="form-control" name="EXIFImageDescription" id="EXIFImageDescription" rows="4"></textarea></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">UserComment</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFUserComment" id="EXIFUserComment"></div><div class="col-xs-1"></div></div>
										</div>	
									</div>
									
									<!----	EXIF Camera Settings-->										
									<div role="tabpanel" class="tab-pane fade" id="exif-camera-settings">
										<div class="row panel-title">
												<div class="col-xs-12">
													<h6 class="text-center">These tags will work with:&nbsp;&nbsp;
														<span class="label label-success">.JPEG / .JPG</span>&nbsp;&nbsp;
														<span class="label label-success">.PNG</span>&nbsp;&nbsp;
														<span class="label label-success">.TIFF</span>&nbsp;&nbsp;
														<span class="label label-danger fileTypeDisabled">.GIF</span>&nbsp;&nbsp;
														<span class="label label-danger fileTypeDisabled">.MP4</span>&nbsp;&nbsp;
														<span class="label label-danger fileTypeDisabled">.MOV</span>&nbsp;&nbsp;
														<span class="label label-danger fileTypeDisabled">.3G2 / 3GP2</span>&nbsp;&nbsp;
														<span class="label label-danger fileTypeDisabled">.3GP / 3GPP</span>&nbsp;&nbsp;
													</h6>
												</div>
											<div class="col-xs-6"><h3><span class="label label-primary">Camera Settings</span></h3></div><div class="col-xs-6"><span class="pull-right top-buffer-15"><label class="checkbox-inline"><input type="checkbox" name="EXIFCAMERAwrite" id="EXIFCAMERAwrite" checked="checked"> Write</label></span></div>											
										</div>
										<div class="row">
											<div class="form-group"><label class="col-xs-3 control-label">ISO</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFISO" id="EXIFISO"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">FNumber</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFFNumber" id="EXIFFNumber"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ApertureValue</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFApertureValue" id="EXIFApertureValue"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MaxApertureValue</label><div class="col-xs-8"><input type="text" class="form-control input-sm" name="EXIFMaxApertureValue" id="EXIFMaxApertureValue"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ShutterSpeedValue</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFShutterSpeedValue" id="EXIFShutterSpeedValue"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ExposureTime</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFExposureTime" id="EXIFExposureTime"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ExposureProgram</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFExposureProgram" id="EXIFExposureProgram">
														<option value="">Please select a value</option>					
														<option value="Not Defined">Not Defined</option>
														<option value="Manual">Manual</option>
														<option value="Program AE">Program AE</option>
														<option value="Aperture-priority AE">Aperture-priority AE</option>
														<option value="Shutter speed priority AE">Shutter speed priority AE</option>
														<option value="Creative (Slow speed)">Creative (Slow speed)</option>
														<option value="Action (High speed)">Action (High speed)</option>
														<option value="Portrait">Portrait</option>
														<option value="Landscape">Landscape</option>
														<option value="Bulb">Bulb</option>
													</select>
												</div><div class="col-xs-1"></div>
											</div>
											<div class="form-group"><label class="col-xs-3 control-label">ExposureCompensation</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFExposureCompensation" id="EXIFExposureCompensation"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ExposureMode</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFExposureMode" id="EXIFExposureMode">
														<option value="">Please select a value</option>
														<option value="Auto">Auto</option>
														<option value="Manual">Manual</option>
														<option value="Auto bracket">Auto bracket</option>
													</select>
												</div><div class="col-xs-1"></div>
											</div>
											<div class="form-group"><label class="col-xs-3 control-label">MeteringMode</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFMeteringMode" id="EXIFMeteringMode">
														<option value="">Please select a value</option>
														<option value="Unknown">Unknown</option>
														<option value="Average">Average</option>
														<option value="Center-weighted average">Center-weighted average</option>
														<option value="Spot">Spot</option>
														<option value="Multi-spot">Multi-spot</option>
														<option value="Multi-segment">Multi-segment</option>
														<option value="Partial">Partial</option>
														<option value="Other">Other</option>
													</select>
												</div><div class="col-xs-1"></div>
											</div>
											<div class="form-group"><label class="col-xs-3 control-label">Flash</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFFlash" id="EXIFFlash">
														<option value="">Please select a value</option>
														<option value="No Flash">No Flash</option>
														<option value="Fired">Fired</option>
														<option value="Fired, Return not detected">Fired, Return not detected</option>
														<option value="Fired, Return detected">Fired, Return detected</option>
														<option value="On, Did not fire">On, Did not fire</option>
														<option value="On, Fired">On, Fired</option>
														<option value="On, Return not detected">On, Return not detected</option>
														<option value="On, Return detected">On, Return detected</option>
														<option value="Off, Did not fire">Off, Did not fire</option>
														<option value="Off, Did not fire, Return not detected">Off, Did not fire, Return not detected</option>
														<option value="Auto, Did not fire">Auto, Did not fire</option>
														<option value="Auto, Fired">Auto, Fired</option>
														<option value="Auto, Fired, Return not detected">Auto, Fired, Return not detected</option>
														<option value="Auto, Fired, Return detected">Auto, Fired, Return detected</option>
														<option value="No Flash function">No Flash function</option>
														<option value="Off, No flash function">Off, No flash function</option>
														<option value="Fired, Red-eye reduction">Fired, Red-eye reduction</option>
														<option value="Fired, Red-eye reduction, Return not detected">Fired, Red-eye reduction, Return not detected</option>
														<option value="Fired, Red-eye reduction, Return detected">Fired, Red-eye reduction, Return detected</option>
														<option value="On, Red-eye reduction">On, Red-eye reduction</option>
														<option value="On, Red-eye reduction, Return not detected">On, Red-eye reduction, Return not detected</option>
														<option value="On, Red-eye reduction, Return detected">On, Red-eye reduction, Return detected</option>
														<option value="Off, Red-eye reduction">Off, Red-eye reduction</option>
														<option value="Auto, Did not fire, Red-eye reduction">Auto, Did not fire, Red-eye reduction</option>
														<option value="Auto, Fired, Red-eye reduction">Auto, Fired, Red-eye reduction</option>
														<option value="Auto, Fired, Red-eye reduction, Return not detected">Auto, Fired, Red-eye reduction, Return not detected</option>
														<option value="Auto, Fired, Red-eye reduction, Return detected">Auto, Fired, Red-eye reduction, Return detected</option>
													</select>
												</div>
												<div class="col-xs-1"></div>
											</div>
											<div class="form-group"><label class="col-xs-3 control-label">FocalLengthIn35mmFormat</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFFocalLengthIn35mmFormat" id="EXIFFocalLengthIn35mmFormat"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">FocalLength</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFFocalLength" id="EXIFFocalLength"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">WhiteBalance</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFWhiteBalance" id="EXIFWhiteBalance">
														<option value="">Please select a value</option>
														<option value="Auto">Auto</option>
														<option value="Manual">Manual</option>
													</select>
												</div>
												<div class="col-xs-1"></div>
											</div>
											<hr>
											<div class="form-group"><label class="col-xs-3 control-label">XResolution</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFXResolution" id="EXIFXResolution"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">YResolution</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFYResolution" id="EXIFYResolution"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Orientation</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFOrientation" id="EXIFOrientation">
														<option value="">Please select a value</option>
														<option value="">None</option>
														<option value="Horizontal (normal)">Horizontal (normal)</option>
														<option value="Mirror horizontal">Mirror horizontal</option>
														<option value="Rotate 180">Rotate 180</option>
														<option value="Mirror vertical">Mirror vertical</option>
														<option value="Mirror horizontal and rotate 270 CW">Mirror horizontal and rotate 270 CW</option>
														<option value="Rotate 90 CW">Rotate 90 CW</option>
														<option value="Mirror horizontal and rotate 90 CW">Mirror horizontal and rotate 90 CW</option>
														<option value="Rotate 270 CW">Rotate 270 CW</option>
													</select>
												</div>
												<div class="col-xs-1"></div>
											</div>
											<div class="form-group"><label class="col-xs-3 control-label">ColorSpace</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFColorSpace" id="EXIFColorSpace">
														<option value="">Please select a value</option>
														<option value="">None</option>
														<option value="sRGB">sRGB</option>
														<option value="Adobe RGB">Adobe RGB</option>
														<option value="Wide Gamut RGB">Wide Gamut RGB</option>
														<option value="ICC Profile">ICC Profile</option>
														<option value="Uncalibrated">Uncalibrated</option>
													</select>	
												</div>
												<div class="col-xs-1"></div>
											</div>
											<div class="form-group"><label class="col-xs-3 control-label">InteropIndex</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFInteropIndex" id="EXIFInteropIndex">
														<option value="">None</option>
														<option value="R03 - DCF option file (Adobe RGB)">R03 - DCF option file (Adobe RGB)</option>
														<option value="R98 - DCF basic file (sRGB)">R98 - DCF basic file (sRGB)</option>
														<option value="THM - DCF thumbnail file">THM - DCF thumbnail file</option>
													</select>	
												</div><div class="col-xs-1"></div>
											</div>
											<div class="form-group"><label class="col-xs-3 control-label">Compression</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFCompression" id="EXIFCompression">
														<option value="">Please select a value</option>
														<option value="Uncompressed">Uncompressed</option>
														<option value="CCITT 1D">CCITT 1D</option>
														<option value="T4/Group 3 Fax">T4/Group 3 Fax</option>
														<option value="T6/Group 4 Fax">T6/Group 4 Fax</option>
														<option value="LZW">LZW</option>
														<option value="JPEG (old-style)">JPEG (old-style)</option>
														<option value="JPEG">JPEG</option>
														<option value="Adobe Deflate">Adobe Deflate</option>
														<option value="JBIG B&amp;W">JBIG B&amp;W</option>
														<option value="JBIG Color">JBIG Color</option>
														<option value="JPEG">JPEG</option>
														<option value="Kodak 262">Kodak 262</option>
														<option value="Next">Next</option>
														<option value="Sony ARW Compressed">Sony ARW Compressed</option>
														<option value="Packed RAW">Packed RAW</option>
														<option value="Samsung SRW Compressed">Samsung SRW Compressed</option>
														<option value="CCIRLEW">CCIRLEW</option>
														<option value="PackBits">PackBits</option>
														<option value="Thunderscan">Thunderscan</option>
														<option value="Kodak KDC Compressed">Kodak KDC Compressed</option>
														<option value="IT8CTPAD">IT8CTPAD</option>
														<option value="IT8LW">IT8LW</option>
														<option value="IT8MP">IT8MP</option>
														<option value="IT8BL">IT8BL</option>
														<option value="PixarFilm">PixarFilm</option>
														<option value="PixarLog">PixarLog</option>
														<option value="Deflate">Deflate</option>
														<option value="DCS">DCS</option>
														<option value="JBIG">JBIG</option>
														<option value="SGILog">SGILog</option>
														<option value="SGILog24">SGILog24</option>
														<option value="JPEG 2000">JPEG 2000</option>
														<option value="Nikon NEF Compressed">Nikon NEF Compressed</option>
														<option value="JBIG2 TIFF FX">JBIG2 TIFF FX</option>
														<option value="Microsoft Document Imaging (MDI) Binary Level Codec">Microsoft Document Imaging (MDI) Binary Level Codec</option>
														<option value="Microsoft Document Imaging (MDI) Progressive Transform Codec">Microsoft Document Imaging (MDI) Progressive Transform Codec</option>
														<option value="Microsoft Document Imaging (MDI) Vector">Microsoft Document Imaging (MDI) Vector</option>
														<option value="Kodak DCR Compressed">Kodak DCR Compressed</option>
														<option value="Pentax PEF Compressed">Pentax PEF Compressed</option>
													</select>
													<pre class="top-buffer-10"><code>*This setting will not affect TIFF Files<br>It's unsafe for TIFF Files because the image can be unreadable!</code></pre>
												</div>
												<div class="col-xs-1"></div>
											</div>
										</div>
									</div>
									
									<!--
									--	IPTC Tags
									-->										
									<div role="tabpanel" class="tab-pane" id="iptc-tags">
										<div class="row panel-title">
											<div class="col-xs-12">
												<h6 class="text-center">These tags will work with:&nbsp;&nbsp;
													<span class="label label-success">.JPEG / .JPG</span>&nbsp;&nbsp;
													<span class="label label-success">.PNG</span>&nbsp;&nbsp;
													<span class="label label-success">.TIFF</span>&nbsp;&nbsp;
													<span class="label label-danger fileTypeDisabled">.GIF</span>&nbsp;&nbsp;
													<span class="label label-danger fileTypeDisabled">.MP4</span>&nbsp;&nbsp;
													<span class="label label-danger fileTypeDisabled">.MOV</span>&nbsp;&nbsp;
													<span class="label label-danger fileTypeDisabled">.3G2 / 3GP2</span>&nbsp;&nbsp;
													<span class="label label-danger fileTypeDisabled">.3GP / 3GPP</span>&nbsp;&nbsp;
												</h6>
											</div>
											<div class="col-xs-6"><h3><span class="label label-primary">IPTC Tags</span></h3></div><div class="col-xs-6"><span class="pull-right top-buffer-15"><label class="checkbox-inline"><input type="checkbox" name="IPTCwrite" id="IPTCwrite" checked="checked"> Write</label></span></div>
										</div>
										<div class="rows">
											<div class="form-group"><label class="col-xs-3 control-label">FileFormat</label>
												<div class="col-xs-8">
													<select class="form-control" name="IPTCFileFormat" id="IPTCFileFormat">
														<option value="">Please select a value</option>
														<option value="No ObjectData">No ObjectData</option>
														<option value="IPTC-NAA Digital Newsphoto Parameter Record">IPTC-NAA Digital Newsphoto Parameter Record</option>
														<option value="IPTC7901 Recommended Message Format">IPTC7901 Recommended Message Format</option>
														<option value="Tagged Image File Format (Adobe/Aldus Image data)">Tagged Image File Format (Adobe/Aldus Image data)</option>
														<option value="Illustrator (Adobe Graphics data)">Illustrator (Adobe Graphics data)</option>
														<option value="AppleSingle (Apple Computer Inc)">AppleSingle (Apple Computer Inc)</option>
														<option value="NAA 89-3 (ANPA 1312)">NAA 89-3 (ANPA 1312)</option>
														<option value="MacBinary II">MacBinary II</option>
														<option value="IPTC Unstructured Character Oriented File Format (UCOFF)">IPTC Unstructured Character Oriented File Format (UCOFF)</option>
														<option value="United Press International ANPA 1312 variant">United Press International ANPA 1312 variant</option>
														<option value="United Press International Down-Load Message">United Press International Down-Load Message</option>
														<option value="JPEG File Interchange (JFIF)">JPEG File Interchange (JFIF)</option>
														<option value="Photo-CD Image-Pac (Eastman Kodak)">Photo-CD Image-Pac (Eastman Kodak)</option>
														<option value="Bit Mapped Graphics File [.BMP] (Microsoft)">Bit Mapped Graphics File [.BMP] (Microsoft)</option>
														<option value="Digital Audio File [.WAV] (Microsoft &amp; Creative Labs)">Digital Audio File [.WAV] (Microsoft &amp; Creative Labs)</option>
														<option value="Audio plus Moving Video [.AVI] (Microsoft)">Audio plus Moving Video [.AVI] (Microsoft)</option>
														<option value="PC DOS/Windows Executable Files [.COM][.EXE]">PC DOS/Windows Executable Files [.COM][.EXE]</option>
														<option value="Compressed Binary File [.ZIP] (PKWare Inc)">Compressed Binary File [.ZIP] (PKWare Inc)</option>
														<option value="Audio Interchange File Format AIFF (Apple Computer Inc)">Audio Interchange File Format AIFF (Apple Computer Inc)</option>
														<option value="RIFF Wave (Microsoft Corporation)">RIFF Wave (Microsoft Corporation)</option>
														<option value="Freehand (Macromedia/Aldus)">Freehand (Macromedia/Aldus)</option>
														<option value="Hypertext Markup Language [.HTML] (The Internet Society)">Hypertext Markup Language [.HTML] (The Internet Society)</option>
														<option value="MPEG 2 Audio Layer 2 (Musicom), ISO/IEC">MPEG 2 Audio Layer 2 (Musicom), ISO/IEC</option>
														<option value="MPEG 2 Audio Layer 3, ISO/IEC">MPEG 2 Audio Layer 3, ISO/IEC</option>
														<option value="Portable Document File [.PDF] Adobe">Portable Document File [.PDF] Adobe</option>
														<option value="News Industry Text Format (NITF)">News Industry Text Format (NITF)</option>
														<option value="Tape Archive [.TAR]">Tape Archive [.TAR]</option>
														<option value="Tidningarnas Telegrambyra NITF version (TTNITF DTD)">Tidningarnas Telegrambyra NITF version (TTNITF DTD)</option>
														<option value="Ritzaus Bureau NITF version (RBNITF DTD)">Ritzaus Bureau NITF version (RBNITF DTD)</option>
													</select>	
												</div><div class="col-xs-1"></div>
											</div>
											<div class="form-group"><label class="col-xs-3 control-label">By-line</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="IPTCBy-line" id="IPTCBy-line"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">By-lineTitle</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="IPTCBy-lineTitle" id="IPTCBy-lineTitle"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">CopyrightNotice</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="IPTCCopyrightNotice" id="IPTCCopyrightNotice"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Writer-Editor</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="IPTCWriter-Editor" id="IPTCWriter-Editor"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Keywords</label><div class="col-xs-8"><textarea class="form-control" name="IPTCKeywords" id="IPTCKeywords" rows="4"></textarea></div><div class="col-xs-1"></div></div>
											<hr>
											<div class="form-group"><label class="col-xs-3 control-label">ObjectName</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="IPTCObjectName" id="IPTCObjectName"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Headline</label><div class="col-xs-8"><textarea class="form-control" name="IPTCHeadline" id="IPTCHeadline" rows="4"></textarea></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Caption-Abstract</label><div class="col-xs-8"><textarea class="form-control" name="IPTCCaption-Abstract" id="IPTCCaption-Abstract" rows="4"></textarea></div><div class="col-xs-1"></div></div>
											<hr>
											<div class="form-group"><label class="col-xs-3 control-label">Country-PrimaryLocationName</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="IPTCCountry-PrimaryLocationName" id="IPTCCountry-PrimaryLocationName"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Province-State</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="IPTCProvince-State" id="IPTCProvince-State"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">City</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="IPTCCity" id="IPTCCity"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Sub-location</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="IPTCSub-location" id="IPTCSub-location"></div><div class="col-xs-1"></div></div>
										</div>
									</div>
									
									<!--
									--	GEO Tags
									-->											
									<div role="tabpanel" class="tab-pane fade" id="geo-tags">
										<div class="row panel-title">
											<div class="col-xs-12">
												<h6 class="text-center">These tags will work with:&nbsp;&nbsp;
													<span class="label label-success">.JPEG / .JPG</span>&nbsp;&nbsp;
													<span class="label label-success">.PNG</span>&nbsp;&nbsp;
													<span class="label label-success">.TIFF</span>&nbsp;&nbsp;
													<span class="label label-danger fileTypeDisabled">.GIF</span>&nbsp;&nbsp;
													<span class="label label-danger fileTypeDisabled">.MP4</span>&nbsp;&nbsp;
													<span class="label label-danger fileTypeDisabled">.MOV</span>&nbsp;&nbsp;
													<span class="label label-danger fileTypeDisabled">.3G2 / 3GP2</span>&nbsp;&nbsp;
													<span class="label label-danger fileTypeDisabled">.3GP / 3GPP</span>&nbsp;&nbsp;
												</h6>
											</div>
											<div class="col-xs-6"><h3><span class="label label-primary">GPS Tags</span></h3></div><div class="col-xs-6"><span class="pull-right top-buffer-15"><label class="checkbox-inline"><input type="checkbox" name="GPSwrite" id="GPSwrite" checked="checked"> Write</label></span></div>
										</div>
										<div class="row">
											<div class="form-group"><label class="col-xs-3 control-label">GPSVersionID</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSVersionID" id="EXIFGPSVersionID"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">GPSLatitudeRef</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFGPSLatitudeRef" id="EXIFGPSLatitudeRef">
														<option value="">Please select a value</option>
														<option value="North">North</option>
														<option value="South">South</option>
													</select>
												</div><div class="col-xs-1"></div>
											</div>
											<div class="form-group"><label class="col-xs-3 control-label">GPSLatitude</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSLatitude" id="EXIFGPSLatitude"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">GPSLongitudeRef</label>
												<div class="col-xs-8">
													<select class="form-control" name="EXIFGPSLongitudeRef" id="EXIFGPSLongitudeRef">
														<option value="">Please select a value</option>
														<option value="East">East</option>
														<option value="West">West</option>
													</select>
												</div><div class="col-xs-1"></div>
											</div>
											<div class="form-group"><label class="col-xs-3 control-label">GPSLongitude</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSLongitude" id="EXIFGPSLongitude">
												<div class="row top-buffer-10">
													<div class="col-xs-2"><button type="button" class="btn btn-xs btn-primary" id="setMapOnCoordinates">Set Map</button></div>
													<div class="col-xs-10"><pre><code>Please only insert positive numbers and use the Latitude and Longitude Reference.</code></pre></div>
												</div>
												</div><div class="col-xs-1"></div>
											</div>
	
											<div class="row panel-title">
												<div class="col-xs-12"><h3><span class="label label-primary">More GPS Tags</span></h3></div>
											</div>												
											<div id="formGPSmore">					
												<div class="form-group"><label class="col-xs-3 control-label">GPSAltitudeRef</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSAltitudeRef" id="EXIFGPSAltitudeRef">
															<option value="">Please select a value</option>
															<option value="Above Sea Level">Above Sea Level</option>
															<option value="Below Sea Level">Below Sea Level</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSAltitude</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSAltitude" id="EXIFGPSAltitude"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSSatellites</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSSatellites" id="EXIFGPSSatellites"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSStatus</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSStatus" id="EXIFGPSStatus">
															<option value="">Please select a value</option>
															<option value="Measurement Active">Measurement Active</option>
															<option value="Measurement Void">Measurement Void</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSMeasureMode</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSMeasureMode" id="EXIFGPSMeasureMode">
															<option value="">Please select a value</option>
															<option value="2-Dimensional Measurement">2-Dimensional Measurement</option>
															<option value="3-Dimensional Measurement">3-Dimensional Measurement</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSDOP</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSDOP" id="EXIFGPSDOP"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSSpeedRef</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSSpeedRef" id="EXIFGPSSpeedRef">
															<option value="">Please select a value</option>
															<option value="km/h">km/h</option>
															<option value="mph">mph</option>
															<option value="knots">knots</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSSpeed</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSSpeed" id="EXIFGPSSpeed"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSTrackRef</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSTrackRef" id="EXIFGPSTrackRef">
															<option value="">Please select a value</option>
															<option value="Magnetic North">Magnetic North </option>
															<option value="True North">True North</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSTrack</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSTrack" id="EXIFGPSTrack"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSImgDirectionRef</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSImgDirectionRef" id="EXIFGPSImgDirectionRef">
															<option value="">Please select a value</option>
															<option value="Magnetic North">Magnetic North </option>
															<option value="True North">True North</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSImgDirection</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSImgDirection" id="EXIFGPSImgDirection"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSMapDatum</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSMapDatum" id="EXIFGPSMapDatum"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSDestLatitudeRef</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSDestLatitudeRef" id="EXIFGPSDestLatitudeRef">
															<option value="">Please select a value</option>
															<option value="North">North</option>
															<option value="South">South</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSDestLatitude</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSDestLatitude" id="EXIFGPSDestLatitude"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSDestLongitudeRef</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSDestLongitudeRef" id="EXIFGPSDestLongitudeRef">
															<option value="">Please select a value</option>
															<option value="East">East</option>
															<option value="West">West</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSDestLongitude</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSDestLongitude" id="EXIFGPSDestLongitude"></div><div class="col-xs-1"></div></div>					
												<div class="form-group"><label class="col-xs-3 control-label">GPSDestBearingRef</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSDestBearingRef" id="EXIFGPSDestBearingRef">
															<option value="">Please select a value</option>
															<option value="Magnetic North">Magnetic North </option>
															<option value="True North">True North</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSDestBearing</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSDestBearing" id="EXIFGPSDestBearing"></div><div class="col-xs-1"></div></div>				
												<div class="form-group"><label class="col-xs-3 control-label">GPSDestDistanceRef</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSDestDistanceRef" id="EXIFGPSDestDistanceRef">
															<option value="">Please select a value</option>
															<option value="Kilometers">Kilometers</option>
															<option value="Miles">Miles</option>
															<option value="Nautical Miles">Nautical Miles</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSDestDistance</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSDestDistance" id="EXIFGPSDestDistance"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSDifferential</label>
													<div class="col-xs-8">
														<select class="form-control" name="EXIFGPSDifferential" id="EXIFGPSDifferential">
															<option value="">Please select a value</option>
															<option value="No Correction">No Correction</option>
															<option value="Differential Corrected">Differential Corrected</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">GPSTimeStamp</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="EXIFGPSTimeStamp" id="EXIFGPSTimeStamp"></div><div class="col-xs-1"></div></div>
											</div>
										</div>
									</div>
									
									<!--
									--	XMP Tags
									-->											
									<div role="tabpanel" class="tab-pane fade" id="xmp-tags">
										<div class="row panel-title">
											<div class="col-xs-12">
												<h6 class="text-center">These tags will work with:&nbsp;&nbsp;
													<span class="label label-success">.JPEG / .JPG</span>&nbsp;&nbsp;
													<span class="label label-success">.PNG</span>&nbsp;&nbsp;
													<span class="label label-success">.TIFF</span>&nbsp;&nbsp;
													<span class="label label-success">.GIF</span>&nbsp;&nbsp;
													<span class="label label-success">.MP4</span>&nbsp;&nbsp;
													<span class="label label-success">.MOV</span>&nbsp;&nbsp;
													<span class="label label-success">.3G2 / 3GP2</span>&nbsp;&nbsp;
													<span class="label label-success">.3GP / 3GPP</span>&nbsp;&nbsp;
												</h6>
											</div>
											<div class="col-xs-6"><h3><span class="label label-primary">XMP Tags</span></h3></div><div class="col-xs-6"><span class="pull-right top-buffer-15"><label class="checkbox-inline"><input type="checkbox" name="XMPwrite" id="XMPwrite" checked="checked"> Write</label></span></div>
										</div>
										<div class="row">
											<div class="form-group"><label class="col-xs-3 control-label">Creator</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCreator" id="XMPCreator"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Rights</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPRights" id="XMPRights"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Title</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPTitle" id="XMPTitle"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Description</label><div class="col-xs-8"><textarea class="form-control" name="XMPDescription" id="XMPDescription" rows="4"></textarea></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Rating</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPRating" id="XMPRating"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Label</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPLabel" id="XMPLabel"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Location</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPLocation" id="XMPLocation"></div><div class="col-xs-1"></div></div>
											
											<div class="row panel-title">
												<div class="col-xs-12"><h3><span class="label label-primary">XMP Photoshop Tags</span></h3></div>
											</div>
											<div id="xMPphotoshop">
												<div class="form-group"><label class="col-xs-3 control-label">AuthorsPosition</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPAuthorsPosition" id="XMPAuthorsPosition"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">CaptionWriter</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCaptionWriter" id="XMPCaptionWriter"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">Category</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCategory" id="XMPCategory"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">ColorMode</label>
													<div class="col-xs-8">
														<select class="form-control" name="XMPColorMode" id="XMPColorMode">
															<option value="">Please select a value</option>
															<option value="Bitmap">Bitmap</option>
															<option value="Grayscale">Grayscale</option>
															<option value="Indexed">Indexed</option>
															<option value="RGB">RGB</option>
															<option value="CMYK">CMYK</option>
															<option value="Multichannel">Multichannel</option>
															<option value="Duotone">Duotone</option>
															<option value="Lab">Lab</option>
														</select>
													</div><div class="col-xs-1"></div>
												</div>
												<div class="form-group"><label class="col-xs-3 control-label">Country</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCountry" id="XMPCountry"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">State</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPState" id="XMPState"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">City</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCity" id="XMPCity"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">Credit</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCredit" id="XMPCredit"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">DateCreated</label><div class="col-xs-5"><input class="form-control input-sm" type="text" name="XMPDateCreated" id="XMPDateCreated"></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD hh:mm:ss</code></pre></div><div class="col-xs-3"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">Headline</label><div class="col-xs-8"><textarea class="form-control" name="XMPHeadline" id="XMPHeadline" rows="4"></textarea></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">ICCProfileName</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPICCProfileName" id="XMPICCProfileName"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">Instructions</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPInstructions" id="XMPInstructions"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">LegacyIPTCDigest</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPLegacyIPTCDigest" id="XMPLegacyIPTCDigest"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">SidecarForExtension</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPSidecarForExtension" id="XMPSidecarForExtension"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">Source</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPSource" id="XMPSource"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">SupplementalCategories</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPSupplementalCategories" id="XMPSupplementalCategories"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">TransmissionReference</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPTransmissionReference" id="XMPTransmissionReference"></div><div class="col-xs-1"></div></div>
												<div class="form-group"><label class="col-xs-3 control-label">Urgency</label>
													<div class="col-xs-8">
														<select class="form-control" name="XMPUrgency" id="XMPUrgency">
															<option value="">Please select a value</option>
															<option value="0 (reserved)">0 (reserved)</option>
															<option value="1 (most urgent)">1 (most urgent)</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5 (normal urgency)">5 (normal urgency)</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8 (least urgent)">8 (least urgent)</option>
															<option value="9 (user-defined priority)">9 (user-defined priority)</option>
														</select>		
													</div><div class="col-xs-1"></div>
												</div>
											</div>
										</div>
									</div>
									
									<!--
									--	XMP GPano Tags
									-->	
									<div role="tabpanel" class="tab-pane fade" id="xmp-gpano-tags">
										<div class="col-xs-12">
											<h6 class="text-center">These tags will work with:&nbsp;&nbsp;
												<span class="label label-success">.JPEG / .JPG</span>&nbsp;&nbsp;
												<span class="label label-success">.PNG</span>&nbsp;&nbsp;
												<span class="label label-success">.TIFF</span>&nbsp;&nbsp;
												<span class="label label-success">.GIF</span>&nbsp;&nbsp;
												<span class="label label-success">.MP4</span>&nbsp;&nbsp;
												<span class="label label-success">.MOV</span>&nbsp;&nbsp;
												<span class="label label-success">.3G2 / 3GP2</span>&nbsp;&nbsp;
												<span class="label label-success">.3GP / 3GPP</span>&nbsp;&nbsp;
											</h6>
										</div>
										<div class="row panel-title">
											<div class="col-xs-6"><h3><span class="label label-primary">XMP GPano Tags</span></h3></div><div class="col-xs-6"><span class="pull-right top-buffer-15"><label class="checkbox-inline"><input type="checkbox" name="XMPGPANOwrite" id="XMPGPANOwrite" checked="checked"> Write</label></span></div>
										</div>
										<div class="row">
											<div class="form-group"><label class="col-xs-3 control-label">CaptureSoftware</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCaptureSoftware" id="XMPCaptureSoftware"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">CroppedAreaImageHeightPixels</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCroppedAreaImageHeightPixels" id="XMPCroppedAreaImageHeightPixels"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">CroppedAreaImageWidthPixels</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCroppedAreaImageWidthPixels" id="XMPCroppedAreaImageWidthPixels"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">CroppedAreaLeftPixels</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCroppedAreaLeftPixels" id="XMPCroppedAreaLeftPixels"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">CroppedAreaTopPixels</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPCroppedAreaTopPixels" id="XMPCroppedAreaTopPixels"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ExposureLockUsed</label><div class="col-xs-5"><input class="form-control input-sm" type="text" name="XMPExposureLockUsed" id="XMPExposureLockUsed"></div><div class="col-xs-3"><pre><code>Format: true / false</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">FirstPhotoDate</label><div class="col-xs-5"><input class="form-control input-sm" type="text" name="XMPFirstPhotoDate" id="XMPFirstPhotoDate"></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">FullPanoHeightPixels</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPFullPanoHeightPixels" id="XMPFullPanoHeightPixels"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">FullPanoWidthPixels</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPFullPanoWidthPixels" id="XMPFullPanoWidthPixels"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">InitialHorizontalFOVDegrees</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPInitialHorizontalFOVDegrees" id="XMPInitialHorizontalFOVDegrees"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">InitialViewHeadingDegrees</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPInitialViewHeadingDegrees" id="XMPInitialViewHeadingDegrees"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">InitialViewPitchDegrees</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPInitialViewPitchDegrees" id="XMPInitialViewPitchDegrees"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">InitialViewRollDegrees</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPInitialViewRollDegrees" id="XMPInitialViewRollDegrees"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">LargestValidInteriorRectHeight</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPLargestValidInteriorRectHeight" id="XMPLargestValidInteriorRectHeight"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">LargestValidInteriorRectLeft</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPLargestValidInteriorRectLeft" id="XMPLargestValidInteriorRectLeft"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">LargestValidInteriorRectTop</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPLargestValidInteriorRectTop" id="XMPLargestValidInteriorRectTop"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">LargestValidInteriorRectWidth</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPLargestValidInteriorRectWidth" id="XMPLargestValidInteriorRectWidth"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">LastPhotoDate</label><div class="col-xs-5"><input class="form-control input-sm" type="text" name="XMPLastPhotoDate" id="XMPLastPhotoDate"></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">PoseHeadingDegrees</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPPoseHeadingDegrees" id="XMPPoseHeadingDegrees"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">PosePitchDegrees</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPPosePitchDegrees" id="XMPPosePitchDegrees"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">PoseRollDegrees</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPPoseRollDegrees" id="XMPPoseRollDegrees"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ProjectionType</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPProjectionType" id="XMPProjectionType"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">SourcePhotosCount</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPSourcePhotosCount" id="XMPSourcePhotosCount"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">StitchingSoftware</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="XMPStitchingSoftware" id="XMPStitchingSoftware"></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">UsePanoramaViewer</label><div class="col-xs-5"><input class="form-control input-sm" type="text" name="XMPUsePanoramaViewer" id="XMPUsePanoramaViewer"></div><div class="col-xs-3"><pre><code>Format: true / false</code></pre></div><div class="col-xs-3"></div></div>
										</div>
									</div>
	
									<!--
									--	QUICKTIME Tags
									-->											
									<div role="tabpanel" class="tab-pane fade" id="quicktime-tags">
										<div class="row panel-title">
											<div class="col-xs-12">
												<h6 class="text-center">
													The Quicktime fields are read only, unfortunately this kind of data isn't editable.
												</h6>
											</div>
											<div class="col-xs-6"><h3><span class="label label-primary">Quicktime Tags</span></h3></div><div class="col-xs-6"><span class="pull-right top-buffer-15"><!--<label class="checkbox-inline"><input type="checkbox" name="QUICKTIMEwrite" id="QUICKTIMEwrite" checked="checked"> Write</label>--></span></div>
										</div>
										<div class="row">
											<div class="form-group"><label class="col-xs-3 control-label">MajorBrand</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeMajorBrand" id="QuickTimeMajorBrand" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MinorVersion</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeMinorVersion" id="QuickTimeMinorVersion" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">CompatibleBrands</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeCompatibleBrands" id="QuickTimeCompatibleBrands" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MovieDataSize</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeMovieDataSize" id="QuickTimeMovieDataSize" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MovieDataOffset</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeMovieDataOffset" id="QuickTimeMovieDataOffset" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MovieHeaderVersion</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeMovieHeaderVersion" id="QuickTimeMovieHeaderVersion" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">CreateDate</label><div class="col-xs-5"><input type="text" class="form-control input-sm" name="QuickTimeCreateDate" id="QuickTimeCreateDate" disabled=""></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD hh:mm:ss</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ModifyDate</label><div class="col-xs-5"><input type="text" class="form-control input-sm" name="QuickTimeModifyDate" id="QuickTimeModifyDate" disabled=""></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD hh:mm:ss</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">TimeScale</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeTimeScale" id="QuickTimeTimeScale" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Duration</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeDuration" id="QuickTimeDuration" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">PreferredRate</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimePreferredRate" id="QuickTimePreferredRate" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">PreferredVolume</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimePreferredVolume" id="QuickTimePreferredVolume" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">PreviewTime</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimePreviewTime" id="QuickTimePreviewTime" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">PreviewDuration</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimePreviewDuration" id="QuickTimePreviewDuration" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">PosterTime</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimePosterTime" id="QuickTimePosterTime" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">SelectionTime</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeSelectionTime" id="QuickTimeSelectionTime" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">SelectionDuration</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeSelectionDuration" id="QuickTimeSelectionDuration" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">CurrentTime</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeCurrentTime" id="QuickTimeCurrentTime" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">NextTrackID</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeNextTrackID" id="QuickTimeNextTrackID" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">TrackHeaderVersion</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeTrackHeaderVersion" id="QuickTimeTrackHeaderVersion" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">TrackCreateDate</label><div class="col-xs-5"><input type="text" class="form-control input-sm" name="QuickTimeTrackCreateDate" id="QuickTimeTrackCreateDate" disabled=""></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD hh:mm:ss</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">TrackModifyDate</label><div class="col-xs-5"><input type="text" class="form-control input-sm" name="QuickTimeTrackModifyDate" id="QuickTimeTrackModifyDate" disabled=""></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD hh:mm:ss</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">TrackID</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeTrackID" id="QuickTimeTrackID" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">TrackDuration</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeTrackDuration" id="QuickTimeTrackDuration" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">TrackLayer</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeTrackLayer" id="QuickTimeTrackLayer" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">TrackVolume</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeTrackVolume" id="QuickTimeTrackVolume" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MatrixStructure</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeMatrixStructure" id="QuickTimeMatrixStructure" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ImageWidth</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeImageWidth" id="QuickTimeImageWidth" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ImageHeight</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeImageHeight" id="QuickTimeImageHeight" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MediaHeaderVersion</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeMediaHeaderVersion" id="QuickTimeMediaHeaderVersion" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MediaCreateDate</label><div class="col-xs-5"><input type="text" class="form-control input-sm" name="QuickTimeMediaCreateDate" id="QuickTimeMediaCreateDate" disabled=""></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD hh:mm:ss</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MediaModifyDate</label><div class="col-xs-5"><input type="text" class="form-control input-sm" name="QuickTimeMediaModifyDate" id="QuickTimeMediaModifyDate" disabled=""></div><div class="col-xs-3"><pre><code>Format: YYYY:MM:DD hh:mm:ss</code></pre></div><div class="col-xs-3"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MediaTimeScale</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeMediaTimeScale" id="QuickTimeMediaTimeScale" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MediaDuration</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeMediaDuration" id="QuickTimeMediaDuration" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">MediaLanguageCode</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeMediaLanguageCode" id="QuickTimeMediaLanguageCode" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">GraphicsMode</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeGraphicsMode" id="QuickTimeGraphicsMode" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">OpColor</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeOpColor" id="QuickTimeOpColor" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">CompressorID</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeCompressorID" id="QuickTimeCompressorID" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">SourceImageWidth</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeSourceImageWidth" id="QuickTimeSourceImageWidth" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">SourceImageHeight</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeSourceImageHeight" id="QuickTimeSourceImageHeight" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">XResolution</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeXResolution" id="QuickTimeXResolution" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">YResolution</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeYResolution" id="QuickTimeYResolution" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">CompressorName</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeCompressorName" id="QuickTimeCompressorName" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">BitDepth</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeBitDepth" id="QuickTimeBitDepth" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">ColorRepresentation</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeColorRepresentation" id="QuickTimeColorRepresentation" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">PixelAspectRatio</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimePixelAspectRatio" id="QuickTimePixelAspectRatio" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">VideoFrameRate</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeVideoFrameRate" id="QuickTimeVideoFrameRate" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">HandlerType</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeHandlerType" id="QuickTimeHandlerType" disabled=""></div><div class="col-xs-1"></div></div>
											<div class="form-group"><label class="col-xs-3 control-label">Encoder</label><div class="col-xs-8"><input class="form-control input-sm" type="text" name="QuickTimeEncoder" id="QuickTimeEncoder" disabled=""></div><div class="col-xs-1"></div></div>	
										</div>
									</div>											
								</div>
							<input type="hidden" name="targetfiles[]" class="targetfiles" value="uploads/24pqmvudf6apu86jkohc8t7dge/GERINDRA.jpg"></form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" id="submit-exifing">Go.eXifing</button>
						</div>
					</div>
				</div>
				</div>
	  <hr style="clear:both;" class="text-center">
	  <p style="font-size:70%" class="mx-auto px-3 text-center"><b>Tool ini berfungsi untuk file-file bertipe berikut ini</b>: <span title="3FR: Hasselblad RAW format">3FR</span>, <span title="3G2: 3rd Gen. Partnership Project 2 audio/video">3G2</span>, <span title="3GP: 3rd Gen. Partnership Project audio/video">3GP</span>, <span title="3GP2: 3rd Gen. Partnership Project 2 audio/video">3GP2</span>, <span title="3GPP: 3rd Gen. Partnership Project audio/video">3GPP</span>, <span title="A: Static library">A</span>, <span title="AA: Audible Audiobook">AA</span>, <span title="AAE: Apple edit information">AAE</span>, <span title="AAX: Audible Enhanced Audiobook">AAX</span>, <span title="ACFM: Adobe Composite Font Metrics">ACFM</span>, <span title="ACR: American College of Radiology ACR-NEMA">ACR</span>, <span title="AFM: Adobe Font Metrics">AFM</span>, <span title="AI: Adobe Illustrator">AI</span>, <span title="AIF: Audio Interchange File Format">AIF</span>, <span title="AIFC: Audio Interchange File Format Compressed">AIFC</span>, <span title="AIFF: Audio Interchange File Format">AIFF</span>, <span title="AIT: Adobe Illustrator">AIT</span>, <span title="AMFM: Adobe Multiple Master Font Metrics">AMFM</span>, <span title="APE: Monkey's Audio format">APE</span>, <span title="APNG: Animated Portable Network Graphics">APNG</span>, <span title="ARQ: Sony Alpha Pixel-Shift RAW format">ARQ</span>, <span title="ARW: Sony Alpha RAW format">ARW</span>, <span title="ASF: Microsoft Advanced Systems Format">ASF</span>, <span title="AVI: Audio Video Interleaved">AVI</span>, <span title="AZW: Mobipocket electronic book">AZW</span>, <span title="AZW3: Mobipocket electronic book">AZW3</span>, <span title="BMP: Windows Bitmap">BMP</span>, <span title="BPG: Better Portable Graphics">BPG</span>, <span title="BTF: Big Tagged Image File Format">BTF</span>, <span title="CHM: Microsoft Compiled HTML format">CHM</span>, <span title="CIFF: Camera Image File Format">CIFF</span>, <span title="COS: Capture One Settings">COS</span>, <b style="font-size:120%"><span title="CR2: Canon RAW 2 format">CR2</span></b>, <span title="CR3: Canon RAW 3 format">CR3</span>, <span title="CRM: Canon RAW Movie">CRM</span>, <b style="font-size:120%"><span title="CRW: Canon RAW format">CRW</span></b>, <span title="CS1: Sinar CaptureShop 1-Shot RAW">CS1</span>, <span title="DC3: Digital Imaging and Communications in Medicine">DC3</span>, <span title="DCM: Digital Imaging and Communications in Medicine">DCM</span>, <span title="DCP: DNG Camera Profile">DCP</span>, <span title="DCR: Kodak Digital Camera RAW">DCR</span>, <span title="DFONT: Macintosh Data fork Font">DFONT</span>, <span title="DIB: Device Independent Bitmap">DIB</span>, <span title="DIC: Digital Imaging and Communications in Medicine">DIC</span>, <span title="DICM: Digital Imaging and Communications in Medicine">DICM</span>, <span title="DIVX: DivX media format">DIVX</span>, <span title="DJV: DjVu image">DJV</span>, <span title="DJVU: DjVu image">DJVU</span>, <span title="DLL: Windows Dynamic Link Library">DLL</span>, <b style="font-size:120%"><span title="DNG: Digital Negative">DNG</span></b>, <span title="DOC: Microsoft Word Document">DOC</span>, <span title="DOCM: Office Open XML Document Macro-enabled">DOCM</span>, <span title="DOCX: Office Open XML Document">DOCX</span>, <span title="DOT: Microsoft Word Template">DOT</span>, <span title="DOTM: Office Open XML Document Template Macro-enabled">DOTM</span>, <span title="DOTX: Office Open XML Document Template">DOTX</span>, <span title="DPX: Digital Picture Exchange">DPX</span>, <span title="DR4: Canon VRD version 4 Recipe">DR4</span>, <span title="DS2: Digital Speech Standard 2">DS2</span>, <span title="DSS: Digital Speech Standard">DSS</span>, <span title="DV: Digital Video">DV</span>, <span title="DVB: Digital Video Broadcasting">DVB</span>, <span title="DVR-MS: Microsoft Digital Video recording">DVR-MS</span>, <span title="DYLIB: Mach-O Dynamic Link Library">DYLIB</span>, <span title="EIP: Capture One Enhanced Image Package">EIP</span>, <span title="EPS: Encapsulated PostScript Format">EPS</span>, <span title="EPS2: Encapsulated PostScript Format">EPS2</span>, <span title="EPS3: Encapsulated PostScript Format">EPS3</span>, <span title="EPSF: Encapsulated PostScript Format">EPSF</span>, <span title="EPUB: Electronic Publication">EPUB</span>, <span title="ERF: Epson Raw Format">ERF</span>, <span title="EXE: Windows executable file">EXE</span>, <span title="EXIF: Exchangable Image File Metadata">EXIF</span>, <span title="EXR: Open EXR">EXR</span>, <span title="EXV: Exiv2 metadata">EXV</span>, <span title="F4A: Adobe Flash Player 9+ Audio">F4A</span>, <span title="F4B: Adobe Flash Player 9+ audio Book">F4B</span>, <span title="F4P: Adobe Flash Player 9+ Protected">F4P</span>, <span title="F4V: Adobe Flash Player 9+ Video">F4V</span>, <span title="FFF: Hasselblad Flexible File Format">FFF</span>, <span title="FLA: Macromedia/Adobe Flash project">FLA</span>, <span title="FLAC: Free Lossless Audio Codec">FLAC</span>, <span title="FLIF: Free Lossless Image Format">FLIF</span>, <span title="FLIR: FLIR File Format">FLIR</span>, <span title="FLV: Flash Video">FLV</span>, <span title="FPF: FLIR Public image Format">FPF</span>, <span title="FPX: FlashPix">FPX</span>, <span title="GIF: Compuserve Graphics Interchange Format">GIF</span>, <span title="GPR: GoPro RAW">GPR</span>, <span title="GZ: GNU ZIP compressed archive">GZ</span>, <span title="GZIP: GNU ZIP compressed archive">GZIP</span>, <span title="HDP: Windows HD Photo">HDP</span>, <span title="HDR: Radiance RGBE High Dynamic Range">HDR</span>, <span title="HEIC: High Efficiency Image Format still image">HEIC</span>, <span title="HEIF: High Efficiency Image Format">HEIF</span>, <span title="HTM: HyperText Markup Language">HTM</span>, <span title="HTML: HyperText Markup Language">HTML</span>, <span title="ICAL: iCalendar Schedule">ICAL</span>, <span title="ICC: International Color Consortium">ICC</span>, <span title="ICM: International Color Consortium">ICM</span>, <span title="ICS: iCalendar Schedule">ICS</span>, <span title="IDML: Adobe InDesign Markup Language">IDML</span>, <span title="IIQ: Phase One Intelligent Image Quality RAW">IIQ</span>, <span title="IND: Adobe InDesign">IND</span>, <span title="INDD: Adobe InDesign Document">INDD</span>, <span title="INDT: Adobe InDesign Template">INDT</span>, <span title="INX: Adobe InDesign Interchange">INX</span>, <span title="ISO: ISO 9660 disk image">ISO</span>, <span title="ITC: iTunes Cover Flow">ITC</span>, <span title="J2C: JPEG 2000 codestream">J2C</span>, <span title="J2K: JPEG 2000 file">J2K</span>, <span title="JNG: JPG Network Graphics">JNG</span>, <span title="JP2: JPEG 2000 file">JP2</span>, <span title="JPC: JPEG 2000 codestream">JPC</span>, <span title="JPE: Joint Photographic Experts Group">JPE</span>, <span title="JPEG: Joint Photographic Experts Group">JPEG</span>, <span title="JPF: JPEG 2000 file">JPF</span>, <b style="font-size:120%"><span title="JPG: Joint Photographic Experts Group">JPG</span></b>, <span title="JPM: JPEG 2000 compound image">JPM</span>, <span title="JPX: JPEG 2000 with extensions">JPX</span>, <span title="JSON: JavaScript Object Notation">JSON</span>, <span title="JXR: JPEG XR">JXR</span>, <span title="K25: Kodak DC25 RAW">K25</span>, <span title="KDC: Kodak Digital Camera RAW">KDC</span>, <span title="KEY: Apple Keynote presentation">KEY</span>, <span title="KTH: Apple Keynote Theme">KTH</span>, <span title="LA: Lossless Audio">LA</span>, <span title="LFP: Lytro Light Field Picture">LFP</span>, <span title="LFR: Lytro Light Field Picture">LFR</span>, <span title="LNK: Windows shortcut">LNK</span>, <span title="M2T: MPEG-2 Transport Stream">M2T</span>, <span title="M2TS: MPEG-2 Transport Stream">M2TS</span>, <span title="M2V: MPEG-2 Video">M2V</span>, <span title="M4A: MPEG-4 Audio">M4A</span>, <span title="M4B: MPEG-4 audio Book">M4B</span>, <span title="M4P: MPEG-4 Protected">M4P</span>, <span title="M4V: MPEG-4 Video">M4V</span>, <span title="MAX: 3D Studio MAX">MAX</span>, <span title="MEF: Mamiya (RAW) Electronic Format">MEF</span>, <span title="MIE: Meta Information Encapsulation format">MIE</span>, <span title="MIF: Magick Image File Format">MIF</span>, <span title="MIFF: Magick Image File Format">MIFF</span>, <span title="MKA: Matroska Audio">MKA</span>, <span title="MKS: Matroska Subtitle">MKS</span>, <span title="MKV: Matroska Video">MKV</span>, <span title="MNG: Multiple-image Network Graphics">MNG</span>, <span title="MOBI: Mobipocket electronic book">MOBI</span>, <span title="MODD: Sony Picture Motion metadata">MODD</span>, <span title="MOI: MOD Information file">MOI</span>, <span title="MOS: Creo Leaf Mosaic">MOS</span>, <span title="MOV: Apple QuickTime movie">MOV</span>, <span title="MP3: MPEG-1 Layer 3 audio">MP3</span>, <span title="MP4: MPEG-4 video">MP4</span>, <span title="MPC: Musepack Audio">MPC</span>, <span title="MPEG: MPEG-1 or MPEG-2 audio/video">MPEG</span>, <span title="MPG: MPEG-1 or MPEG-2 audio/video">MPG</span>, <span title="MPO: Extended Multi-Picture format">MPO</span>, <span title="MQV: Sony Mobile Quicktime Video">MQV</span>, <span title="MRW: Minolta RAW format">MRW</span>, <span title="MTS: MPEG-2 Transport Stream">MTS</span>, <span title="MXF: Material Exchange Format">MXF</span>, <b style="font-size:120%"><span title="NEF: Nikon (RAW) Electronic Format">NEF</span></b>, <span title="NEWER: Capture One Settings">NEWER</span>, <span title="NMBTEMPLATE: Apple Numbers Template">NMBTEMPLATE</span>, <span title="NRW: Nikon RAW (2)">NRW</span>, <span title="NUMBERS: Apple Numbers spreadsheet">NUMBERS</span>, <span title="O: Relocatable Object">O</span>, <span title="ODB: Open Document Database">ODB</span>, <span title="ODC: Open Document Chart">ODC</span>, <span title="ODF: Open Document Formula">ODF</span>, <span title="ODG: Open Document Graphics">ODG</span>, <span title="ODI: Open Document Image">ODI</span>, <span title="ODP: Open Document Presentation">ODP</span>, <span title="ODS: Open Document Spreadsheet">ODS</span>, <span title="ODT: Open Document Text file">ODT</span>, <span title="OFR: OptimFROG audio">OFR</span>, <span title="OGG: Ogg Vorbis audio file">OGG</span>, <span title="OGV: Ogg Video file">OGV</span>, <span title="OPUS: Ogg Opus audio file">OPUS</span>, <span title="ORF: Olympus RAW format">ORF</span>, <span title="OTF: Open Type Font">OTF</span>, <span title="PAC: Lossless Predictive Audio Compression">PAC</span>, <span title="PAGES: Apple Pages document">PAGES</span>, <span title="PBM: Portable BitMap">PBM</span>, <span title="PCD: Kodak Photo CD Image Pac">PCD</span>, <span title="PCT: Apple PICTure">PCT</span>, <span title="PDB: Palm Database">PDB</span>, <span title="PDF: Adobe Portable Document Format">PDF</span>, <span title="PEF: Pentax (RAW) Electronic Format">PEF</span>, <span title="PFA: PostScript Font ASCII">PFA</span>, <span title="PFB: PostScript Font Binary">PFB</span>, <span title="PFM: Printer Font Metrics">PFM</span>, <span title="PGF: Progressive Graphics File">PGF</span>, <span title="PGM: Portable Gray Map">PGM</span>, <span title="PICT: Apple PICTure">PICT</span>, <span title="PLIST: Apple Property List">PLIST</span>, <span title="PMP: Sony DSC-F1 Cyber-Shot PMP">PMP</span>, <b style="font-size:120%"><span title="PNG: Portable Network Graphics">PNG</span></b>, <span title="POT: Microsoft PowerPoint Template">POT</span>, <span title="POTM: Office Open XML Presentation Template Macro-enabled">POTM</span>, <span title="POTX: Office Open XML Presentation Template">POTX</span>, <span title="PPM: Portable Pixel Map">PPM</span>, <span title="PPS: Microsoft PowerPoint Slideshow">PPS</span>, <span title="PPSM: Office Open XML Presentation Slideshow Macro-enabled">PPSM</span>, <span title="PPSX: Office Open XML Presentation Slideshow">PPSX</span>, <span title="PPT: Microsoft PowerPoint Presentation">PPT</span>, <span title="PPTM: Office Open XML Presentation Macro-enabled">PPTM</span>, <span title="PPTX: Office Open XML Presentation">PPTX</span>, <span title="PRC: Palm Database">PRC</span>, <span title="PS: PostScript">PS</span>, <span title="PS2: PostScript">PS2</span>, <span title="PS3: PostScript">PS3</span>, <span title="PSB: Photoshop Large Document">PSB</span>, <span title="PSD: Photoshop Document">PSD</span>, <span title="PSDT: Photoshop Document Template">PSDT</span>, <span title="PSP: Paint Shop Pro">PSP</span>, <span title="PSPFRAME: Paint Shop Pro">PSPFRAME</span>, <span title="PSPIMAGE: Paint Shop Pro">PSPIMAGE</span>, <span title="PSPSHAPE: Paint Shop Pro">PSPSHAPE</span>, <span title="PSPTUBE: Paint Shop Pro">PSPTUBE</span>, <span title="QIF: QuickTime Image File">QIF</span>, <span title="QT: Apple QuickTime movie">QT</span>, <span title="QTI: QuickTime Image File">QTI</span>, <span title="QTIF: QuickTime Image File">QTIF</span>, <span title="R3D: Redcode RAW Video">R3D</span>, <span title="RA: Real Audio">RA</span>, <span title="RAF: FujiFilm RAW Format">RAF</span>, <span title="RAM: Real Audio Metafile">RAM</span>, <span title="RAR: RAR Archive">RAR</span>, <b style="font-size:120%"><span title="RAW: Kyocera Contax N Digital RAW or Panasonic RAW">RAW</span></b>, <span title="RIF: Resource Interchange File Format">RIF</span>, <span title="RIFF: Resource Interchange File Format">RIFF</span>, <span title="RM: Real Media">RM</span>, <span title="RMVB: Real Media Variable Bitrate">RMVB</span>, <span title="RPM: Real Media Plug-in Metafile">RPM</span>, <span title="RSRC: Mac OS Resource">RSRC</span>, <span title="RTF: Rich Text Format">RTF</span>, <span title="RV: Real Video">RV</span>, <span title="RW2: Panasonic RAW 2">RW2</span>, <span title="RWL: Leica RAW">RWL</span>, <span title="RWZ: Rawzor compressed image">RWZ</span>, <span title="SEQ: FLIR image Sequence">SEQ</span>, <span title="SKETCH: Sketch design file">SKETCH</span>, <span title="SO: Shared Object file">SO</span>, <span title="SR2: Sony RAW Format 2">SR2</span>, <span title="SRF: Sony RAW Format">SRF</span>, <span title="SRW: Samsung RAW format">SRW</span>, <span title="SVG: Scalable Vector Graphics">SVG</span>, <span title="SWF: Shockwave Flash">SWF</span>, <span title="THM: Canon Thumbnail">THM</span>, <span title="THMX: Office Open XML Theme">THMX</span>, <span title="TIF: Tagged Image File Format">TIF</span>, <span title="TIFF: Tagged Image File Format">TIFF</span>, <span title="TORRENT: BitTorrent description file">TORRENT</span>, <span title="TS: MPEG-2 Transport Stream">TS</span>, <span title="TTC: True Type Font Collection">TTC</span>, <span title="TTF: True Type Font">TTF</span>, <span title="TUB: Paint Shop Pro">TUB</span>, <span title="VCARD: Virtual Card">VCARD</span>, <span title="VCF: Virtual Card">VCF</span>, <span title="VOB: Video Object">VOB</span>, <span title="VRD: Canon VRD Recipe Data">VRD</span>, <span title="VSD: Microsoft Visio Drawing">VSD</span>, <span title="WAV: WAVeform (Windows digital audio)">WAV</span>, <span title="WDP: Windows Media Photo">WDP</span>, <span title="WEBM: Google Web Movie">WEBM</span>, <span title="WEBP: Google Web Picture">WEBP</span>, <span title="WMA: Windows Media Audio">WMA</span>, <span title="WMV: Windows Media Video">WMV</span>, <span title="WTV: Windows recorded TV show">WTV</span>, <span title="WV: WavePack lossless audio">WV</span>, <span title="X3F: Sigma RAW format">X3F</span>, <span title="XCF: GIMP native image format">XCF</span>, <span title="XHTML: Extensible HyperText Markup Language">XHTML</span>, <span title="XLA: Microsoft Excel Add-in">XLA</span>, <span title="XLAM: Office Open XML Spreadsheet Add-in Macro-enabled"> XLAM</span>, <span title="XLS: Microsoft Excel Spreadsheet">XLS</span>, <span title="XLSB: Office Open XML Spreadsheet Binary">XLSB</span>, <span title="XLSM: Office Open XML Spreadsheet Macro-enabled">XLSM</span>, <span title="XLSX: Office Open XML Spreadsheet">XLSX</span>, <span title="XLT: Microsoft Excel Template">XLT</span>, <span title="XLTM: Office Open XML Spreadsheet Template Macro-enabled">XLTM</span>, <span title="XLTX: Office Open XML Spreadsheet Template">XLTX</span>, <b style="font-size:120%"><span title="XMP: Extensible Metadata Platform">XMP</span></b>, and <span title="ZIP: ZIP archive">ZIP</span>.<br>Proyek ini telah dimodifikasi secara lebih serius pada bulan ini (Juli 2019) oleh Endi Hariadi.</p>
	    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js"></script>
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.1.8/imagesloaded.min.js"></script>
	    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
	    <script type="text/javascript" src="/exiftool/node_modules/exif-js/assets/js/jquery.datetimepicker.js"></script>
	    <script type="text/javascript" src="/exiftool/node_modules/exif-js/assets/js/sweet-alert.min.js"></script>
	    <script type="text/javascript" src="/exiftool/node_modules/exif-js/assets/js/bootstrap-typeahead.min.js"></script>
	    <script src="/exiftool/node_modules/exif-js/assets/js/Control.Geocoder.js"></script>
	    <script type="text/javascript" src="/exiftool/node_modules/exif-js/thexifer.min.js"></script>
	    
	</body>
	
	</html></div>

---