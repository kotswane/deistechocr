<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Deis Technologies</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/LkCentrix.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/skins/skin-blue.min.css">
    <link rel="icon" href="<?php echo base_url();?>dist/img/lk-Logo.png">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
	
	<!-- ./wrapper -->

	<!-- REQUIRED JS SCRIPTS -->
	<!-- jQuery 3 -->
	<script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url();?>dist/js/lkcentrix.min.js"></script>
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!--<div layout:fragment="style" th:remove="tag"></div>-->
</head>
<body class="sidebar-collapse">
<div class="wrapper">

    <header class="main-header">
     <div><?php $this->load->view("fragments/header2");?></div>
    </header>
    <!-- Left side column. contains the logo and sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

		<section class="content">
		<div class="box">
		<div class="box-header with-border">
					<h3 class="box-title">Optical Character Recognition :: OCR</h3>
		</div>
		<style type="text/css">
		body { width: 100% !important; }
		body { background-color: #ffffff; margin: 0!important; padding: 0 !important; }
		body, td { font-family: Arial, sans-serif; }
		br, b, em { line-height:100%; }
		br { font-size: 15px !important; line-height: 15px !important;}
		font { letter-spacing:0px !important;}

		body, table, td, a { -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; }
		table, td { mso-table-lspace:0pt; mso-table-rspace:0pt; }
		table td, table tr { border-collapse: collapse; }
		img { -ms-interpolation-mode:bicubic;outline: none; text-decoration: none; display: block; }

		img.g-img + div {display:none;}

		#outlook a { padding: 0; }
		.ReadMsgBody { width: 100%; }
		.ExternalClass { width: 100%; display:block !important; }
		.yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span { color: black; text-decoration: none !important; border-bottom: none !important; background: none !important; }

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: none !important;
			font-size: inherit !important;
			font-family: inherit !important;
			font-weight: inherit !important;
			line-height: inherit !important;
		}

		[data-ogsc] .darkmode
		{
			display:block !important;
		}
		[data-ogsc] .lightmode
		{
			display:none;
		}

		:root
		{
			color-scheme: light dark;
			supported-color-schemes: light dark;
		}
		.hr{
			border:none;
			height:2px;
			background-color:00FF00;
			width:150px;
		}
		.button {
					display:inline-block;
					padding: 10px 20px;
					background-color:#546eff;
					color:white;
					text-align:center;
					font-size:16px;
					border:none;
					border-radius:4px;
					cursor:pointer;
				}
			.button:hover {
							background-color:#808080;
						}
						
			.checkbox-label {
			  display: inline-block;
			  margin-right: 10px;
			  }
			  .table-container {
				  max-height: 300px; /* Set the maximum height of the container */
				  overflow-y: auto; /* Enable vertical scrolling */
				}
				
			@media only screen and (max-width: 600px) {
			.w0 { width: 0 !important; }
			.w1 { width: 1% !important; }
			.w4 { width:4% !important; }
			.w5 { width:5% !important; }
			.w10 { width:10% !important; }
			.w19 { width:19% !important; }
			.w80 { width:80% !important; }
			.w90 { width:90% !important; }
			.w95 { width:95% !important; max-width:95% !important; }
			.w100 { width:100% !important; min-width:100% !important }

			.hideMe { display:none !important; }
			.centerMe { margin: 0 auto !important; text-align: center !important}
			.bgmobile { background-color: #5850e9 !important}
			.height0 { height:0px !important; line-height:10px !important;}
			.height10 { height:10px !important; line-height:10px !important;}
			.height20 { height:20px !important; line-height:20px !important;}
			.pad15 { padding:15px !important}
		}


		/* Dark mode feature */
		@media (prefers-color-scheme: light)
		{
			.darkLogoDefault, .lightLogo
			{
				display: none !important;
			}

			.darkLogoWrapper, .darkLogo
			{
				display: block !important;
			}
		}

		@media (prefers-color-scheme: dark)
		{
			.darkLogoDefault, .darkLogo
			{
				display: none !important;
			}
			.lightLogoWrapper, .lightLogo
			{
				display: block !important;
			}
			.fontDark {color: rgb(255, 255, 255) !important;-webkit-text-fill-color: rgb(255, 255, 255) !important;}
		}

		/*-Reverse Stacking*/
		@media only screen and (max-width: 600px) {
			.table320 {width:320px !important;}
			.td1 {display:block !important;	width:320px !important;	max-width: 320px !important;}
		}

	</style>
	
	<body style="margin:0;padding:0;min-width:100%;background-color:#ffffff;">

	<!-- QaTest::MarketingSolutions -->
        <div style="font-size: 0px;color: #fafdfe;line-height: 1px;mso-line-height-rule:exactly;display: none;max-width: 0px;max-height: 0px;opacity: 0;overflow: hidden;mso-hide:all;">
                       
        </div>
	<table width="1000" align="center" class="w100" cellpadding="0" cellspacing="0" border="0" style="min-width: 1000px;" role="presentation">
		<tr>
			<td bgcolor="#ffffff" height="25" style="font-size: 1px; line-height: 25px; mso-line-height-rule: exactly;">&nbsp;</td>
		</tr>
	</table>
	<table width="1000" align="center" class="w100" cellpadding="0" cellspacing="0" border="0" style="min-width: 1000px;border:2px solid #4470c5;padding-top:20px;padding-bottom:10px;" role="presentation">
		<tr>
			<td align="center" bgcolor="#ffffff">
				<table class="w100" width="850" style="width: 850px;" align="center" cellpadding="0" cellspacing="0" border="0" role="presentation">
					<tr>
						<td width="26" bgcolor="#ffffff" height="20" style="font-size: 1px; line-height: 20px; mso-line-height-rule: exactly;"><img src="<?php echo base_url();?>dist/img/green_tick.jpg" border="0" width="26"></td>
						<td><hr></td>
						<td width="26" bgcolor="#ffffff" height="20" style="font-size: 1px; line-height: 20px; mso-line-height-rule: exactly;"><img src="<?php echo base_url();?>dist/img/green_tick.jpg" border="0" width="26"></td>
						<td><hr></td>
						<td width="26" bgcolor="#ffffff" height="20" style="font-size: 1px; line-height: 20px; mso-line-height-rule: exactly;"><img src="<?php echo base_url();?>dist/img/green_tick.jpg" border="0" width="26"></td>
						<td><hr></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="center">
				<table class="w100" width="950" style="width: 950px;" align="center" cellpadding="0" cellspacing="0" border="0" role="presentation">
					<tr>
						<td bgcolor="#4470c5" width="140" valign="top" align="center" height="60" style="border: 1px solid #000000;padding-top:25px" id="upload">
							<font style="font:14px Calibri,Arial; mso-ansi-font-size:10.5pt; color:#ffffff; line-height: 13px; letter-spacing:100% !important;">
								<b>Upload</b>
							</font>
						</td>
						<td width="10">&nbsp;</td>
						<td bgcolor="#4470c5" width="140" valign="top" align="center" height="60"  style="border: 1px solid #000000;padding-top:25px" id="process">
							<font style="font:14px Calibri,Arial; mso-ansi-font-size:10.5pt; color:#ffffff; line-height: 13px; letter-spacing:100% !important;">
								<b>Process</b>
							</font>
						</td>
						<td width="10">&nbsp;</td>
						<td bgcolor="#4470c5" width="140" valign="top" align="center" height="60"  style="border: 1px solid #000000;padding-top:25px" id="output">
							<font style="font:14px Calibri,Arial; mso-ansi-font-size:10.5pt; color:#ffffff; line-height: 13px; letter-spacing:100% !important;">
								<b>Output</b>
							</font>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff" height="15" style="font-size: 1px; line-height: 15px; mso-line-height-rule: exactly;">&nbsp;</td>
		</tr>
	</table>
	<table class="w100" width="1000" style="width: 1000px;" align="center" cellpadding="0" cellspacing="0" border="0" role="presentation">
		<tr>
			<td bgcolor="#ffffff" height="15" style="font-size: 1px; line-height: 15px; mso-line-height-rule: exactly;">&nbsp;</td>
		</tr>
	</table>
	<table class="w100" width="1000" style="width: 1000px;" align="center" cellpadding="0" cellspacing="0" border="0" role="presentation">
		<tr>
			<td align="center">
				<table class="w100" width="950" style="width: 950px;" align="center" cellpadding="0" cellspacing="0" border="0" role="presentation">
					<tr>
						<td align="center">
							<table class="w100" width="250" style="width: 280px;" align="left" cellpadding="0" cellspacing="0" border="0" role="presentation">
								<form id="form" method="post" enctype="multipart/form-data">
									<tr id="drop-area">
										<td align="center" ><input id="uploadImage" name="uploadImage" type="file" /></td>
									</tr>
									<tr>
										<td bgcolor="#ffffff" height="15" style="font-size: 1px; line-height: 15px; mso-line-height-rule: exactly;">&nbsp;</td>
									</tr>
									<!--<tr>
										<td align="center"><font style="font:14px Calibri,Arial; mso-ansi-font-size:10.5pt; color:#000000; line-height: 13px; letter-spacing:100% !important;"><b>Drag and drop file here or click to upload.</b></font></td>
									</tr> -->
									<tr>
										<td align="center"><font style="font:10px Calibri,Arial; mso-ansi-font-size:7.5pt; color:#000000; line-height: 13px; letter-spacing:100% !important;">We support png, jpeg, pdf formats. (Max 30MB)</font></td>
									</tr>
									<tr>
										<td bgcolor="#ffffff" height="15" style="font-size: 1px; line-height: 15px; mso-line-height-rule: exactly;">&nbsp;</td>
									</tr>
									<tr>
										<td align="center"><button class="btn btn-large btn-primary" id="">Upload image or PDF</button></td>
									</tr>
								</form>
							</table>
							<!--[if gte mso 12]></td><td><![endif]-->
							<table class="w100" width="30" style="width: 30px;" align="left" cellpadding="0" cellspacing="0" border="0" role="presentation">
								<tr>
									<td>&nbsp;</td>
								</tr>
							</table>
							<!--[if gte mso 12]></td><td><![endif]-->
							<table class="w100" width="2" style="width: 2px;" align="left" cellpadding="0" cellspacing="0" border="0" role="presentation">
								<tr>
									<td bgcolor="#808080" height="150"></td>
								</tr>
							</table>
							<!--[if gte mso 12]></td><td><![endif]-->
							<table class="w100" width="20" style="width: 20px;" align="left" cellpadding="0" cellspacing="0" border="0" role="presentation">
								<tr>
									<td>&nbsp;</td>
								</tr>
							</table>
							<!--[if gte mso 12]></td><td><![endif]-->
							<table class="w100" width="219" style="width: 305px;" align="left" cellpadding="0" cellspacing="0" border="0" role="presentation">
								<tr>
									<td width="250">
									<font style="font:14px Calibri,Arial; mso-ansi-font-size:10.5pt; color:#00FF00; line-height: 13px; letter-spacing:100% !important;">OCR <label class="checkbox-label">
										</label></font>
									</td>
									<td align="left">
									<input type="checkbox" name="checkbox1" value="value1" checked>
									</td>
								</tr>
								<tr>
									<td width="250">
										<font style="font:14px Calibri,Arial; mso-ansi-font-size:10.5pt; color:#ff0000; line-height: 13px; letter-spacing:100% !important;">Analytics <label class="checkbox-label">
										</label></font>
									</td>
									<td align="left">
									<input type="checkbox" name="checkbox1" value="value1" disabled="disabled">
									</td>
								</tr>
								<tr>
									<td width="250">
										<font style="font:14px Calibri,Arial; mso-ansi-font-size:10.5pt; color:#ff0000; line-height: 13px; letter-spacing:100% !important;">Categorisation <label class="checkbox-label">
										</label></font>
									</td>
									<td align="left">
										<input type="checkbox" name="checkbox1" value="value1" disabled="disabled">
									</td>
								</tr>
								<tr>
									<td width="250">
										<font style="font:14px Calibri,Arial; mso-ansi-font-size:10.5pt; color:#ff0000; line-height: 13px; letter-spacing:100% !important;">Template check <label class="checkbox-label">
										</label></font>
									</td>
									<td align="left">
										<input type="checkbox" name="checkbox1" value="value1" disabled="disabled">
									</td>
								</tr>
                                <tr>
                                    <td height="20">&nbsp;</td>
                                    <td height="20">&nbsp;</td>
                                </tr>
                                <tr>
									
									<td  width="350" colspan="2">
										<center><button class="btn btn-large btn-danger" id="extract">&nbsp;&nbsp;&nbsp;&nbsp;Extract text&nbsp;&nbsp;&nbsp;&nbsp;</button></center>
									</td>
								</tr>
							</table>
							<!--[if gte mso 12]></td><td><![endif]-->
							<table class="w100" width="3" style="width: 3px;" align="left" cellpadding="0" cellspacing="0" border="0" role="presentation">
								<tr>
									<td bgcolor="#808080" height="150"></td>
								</tr>
							</table>
							<!--[if gte mso 12]></td><td><![endif]-->
							<table class="w100" width="446" style="width: 446px;" align="left" cellpadding="0" cellspacing="0" border="0" role="presentation">
								<tr>
									<td>&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<table class="w100" width="1000" style="width: 1000x;" align="center" cellpadding="0" cellspacing="0" border="0" role="presentation">
					<tr>
						<td bgcolor="#ffffff" height="25" style="font-size: 1px; line-height: 25px; mso-line-height-rule: exactly;">&nbsp;</td>
					</tr>
				</table>
				<div class="table-container" id="div-table-container" style="display:none;">
				<table class="w100" width="1000" style="width: 1000px;" align="center" cellpadding="0" cellspacing="0" border="0" role="presentation">
					<tr>
						<td align="center">
							
							<table class="table-container" width="1000px" style="width: 1000px;border:3px solid #dddddd;" align="left" cellpadding="0" cellspacing="0" border="3" role="presentation">
								<tr>
									<td style="width: 500px;" valign="top" >
										<table  class="table-container" width="500px">
											<tr valign="top" >
												<td id="extracted_data"  valign="top" style="width: 500px;">	
												</td>
											</tr>
										</table>
									</td>
									<td style="width: 500px;" valign="top" >
										<table  class="table-container" width="490px">
											<tr valign="top" >
												<td id="image_data"  valign="top" style="width: 490px;">	
												</td>
											</tr>
										</table>
									</td>
								</tr>

							</table>
						</td>
					</tr>
				</table>
				</div>
			</td>
		</tr>
	</table>
</body>
</div>
</section>		        
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Copyright &copy; 2023 Deis Tech Technologies.</strong>
</footer>

</div>
	<div class="modal fade" id="loadMe" tabindex="-1" role="dialog" aria-labelledby="loadMeLabel">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-body text-center">
			<div class="loader"></div>
			<div clas="loader-txt">
			  <p>Please wait while loading</small></p>
			</div>
		  </div>
		</div>
	  </div>
	</div>

</body>
<style>
	.loader-txt {
	  p {
		font-size: 13px;
		color: #666;
		small {
		  font-size: 11.5px;
		  color: #999;
		}
	  }
	}

	/** MODAL STYLING **/

	.modal-content {
	  border-radius: 0px;
	  box-shadow: 0 0 20px 8px rgba(0, 0, 0, 0.7);
	}

	.modal-backdrop.show {
	  opacity: 0.75;
	}

	.loader {
	  position: relative;
	  text-align: center;
	  margin: 15px auto 35px auto;
	  z-index: 9999;
	  display: block;
	  width: 80px;
	  height: 80px;
	  border: 10px solid rgba(0, 0, 0, .3);
	  border-radius: 50%;
	  border-top-color: #000;
	  animation: spin 1s ease-in-out infinite;
	  -webkit-animation: spin 1s ease-in-out infinite;
	}
	
	/** SPINNER CREATION **/

.loader {
  position: relative;
  text-align: center;
  margin: 15px auto 35px auto;
  z-index: 9999;
  display: block;
  width: 80px;
  height: 80px;
  border: 10px solid rgba(0, 0, 0, .3);
  border-radius: 50%;
  border-top-color: #000;
  animation: spin 1s ease-in-out infinite;
  -webkit-animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}

@-webkit-keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}

</style>
<script>
$(document).ready(function (e) {
	
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
   url: "<?php echo site_url()?>/disclaimer/upload",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
   cache: false,
   processData:false,
   success: function(data)
    {
		
		if(data=='success')
		{
			 $("#upload").css("background-color","green");
			 $("#image_data").html("<?php echo $_SESSION['image_upload'];?>");
		}
		else
		{
			alert(data);
			$("#form")[0].reset(); 
		}
     },
     error: function(e) 
      {
         alert(e)
      }          
    });
 }));
 
 $("#extract").on('click',(function(e) {
	
  e.preventDefault();
  
	$("#loadMe").modal({
	  backdrop: "static", //remove ability to close modal with click
	  keyboard: false, //remove option to close with keyboard
	  show: true //Display loader!
	});
		
  $.ajax({
   url: "<?php echo site_url()?>/disclaimer/process",
   type: "POST",
   contentType: false,
   cache: false,
   success: function(data)
    {
		
		if(data!='error')
		{
			 $("#loadMe").modal('toggle');
			 $("#process").css("background-color","green");
			 $("#upload").css("background-color","green");
			 //$("#extract").css("background-color","green");
			 $("#output").css("background-color","green");
			 $("#extracted_data").html("<br><br><br>"+data);
			 $("#div-table-container").show();
		}
		else
		{
			$("#loadMe").modal('toggle');
			 $("#process").css("background-color","#4470c5");
			 $("#upload").css("background-color","#4470c5");
			// $("#extract").css("background-color","#dd4b39");
			 $("#output").css("background-color","#4470c5");
			alert(data); 
		}
     },
     error: function(e) 
      {
         alert(e)
      }          
    });	
	 
 }))
 
});


</script>
</html>
