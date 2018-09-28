<?php 

?>

<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li class="active">Consent Form</li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
					<span class="input-icon">
						<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
						<i class="ace-icon fa fa-search nav-search-icon"></i>
					</span>
				</form>
			</div><!-- /.nav-search -->
		</div>

		<div class="page-content">
			<div class="ace-settings-container" id="ace-settings-container">
				<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
					<i class="ace-icon fa fa-cog bigger-130"></i>
				</div>

				<div class="ace-settings-box clearfix" id="ace-settings-box">
					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="no-skin" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div><!-- /.pull-left -->

					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
							<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
							<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
							<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
						</div>
					</div><!-- /.pull-left -->
				</div><!-- /.ace-settings-box -->
			</div><!-- /.ace-settings-container -->

			<div class="page-header">
				<h1>
					Home
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Consent Form
						<i class="ace-icon fa fa-angle-double-right"></i>
						Add
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<div class="row">
						<div class="vspace-12-sm"></div>
						<form class="form-horizontal" method="post">
							
							<div class="form-group">
								<div class="col-sm-4"></div>
								<div class="col-sm-4">
									<select class="form-control aura_multiple_select"  name="consent_form_type" id="consent_form_type">
										<option value="">Consent Form Type</option>
										<?php 
											$emailTempTypes = $tpl['result'];
											foreach($emailTempTypes as $emailTempType){
										?>
										<option value="<?php echo $emailTempType['id']; ?>" <?php if(!empty($_POST['consent_form_type']) and $emailTempType['id'] == $_POST['consent_form_type']){echo "selected";} ?>><?php echo $emailTempType['consent_form_name'] ?></option>
										
										<?php 
											}
										?>
									</select>
									<?php if(!empty($tpl['errorMsg']['consent_form_type'])) {?>
										<label class="errMsg"><?php echo $tpl['errorMsg']['consent_form_type']; ?></label>
									<?php } ?>
									<?php if(!empty($tpl['templateError'])) {?>
										<label class="errMsg"><?php echo $tpl['templateError']; ?></label>
									<?php } ?>
								</div>
								<div class="col-sm-4"></div>
							</div>
							<div class="form-group">
								<div class="col-sm-2"></div>
								<div class="col-sm-8">
									<textarea   name ="content" id ="description"><?php if(!empty($_POST['content'])){echo $_POST['content'];} ?></textarea>
									<?php if(!empty($tpl['errorMsg']['content'])) {?>
										<label class="errMsg"><?php echo $tpl['errorMsg']['content']; ?></label>
									<?php } ?>
								</div>
								<div class="col-sm-2"></div>
							</div>
							
							<?php if(!empty($_SESSION["USER_TYPE"]) And $_SESSION["USER_TYPE"] == 1){ ?>
							<div class="form-group">
								<div class="col-sm-2"></div>
								<div class="col-sm-8">
									<button style = "margin-bottom: 4px;float: right;"type="submit" class="btn btn-info btn-sm">
										<i class="ace-icon fa fa-plus bigger-110"></i>Save
									</button>
								</div>
								<div class="col-sm-2"></div>
							</div>
							<?php } ?>
						</form>
					</div>
					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->
<script src="assets/js/jquery-2.1.4.min.js"></script>

<script>
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'description' );
	
$("#consent_form_type").change(function(){
	var consent_form_type = $(this).val();
	// alert(consent_form_type);
	// $("#description").val("hhhhhhhhhhh");
    $.ajax({
		type: 'POST',
		dataType: 'json',
		url: '?controller=ConsentForm&action=getConsentForm',
		data: {consent_form_type:consent_form_type},
		success: function( data ) {
			if(data.success == 1){
				CKEDITOR.instances['description'].setData(data.content);
			}
		},
		error: function(xhr, status, error) {
			alert(status);
		},
	});
});
</script>