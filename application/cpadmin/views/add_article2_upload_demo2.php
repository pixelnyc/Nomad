<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOMAD MAG ADMINISTRATION</title>
	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/reset.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/root.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/grid.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/typography.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/jquery-plugin-base.css" />
    
    <!--[if IE 7]>	  <link rel="stylesheet" type="text/css" href="style/ie7-style.css" />	<![endif]-->
    
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.11.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-settings.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/toogle.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.tipsy.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/raphael.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/analytics.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/popup.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/fullcalendar.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.slider.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.tabs.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.accordion.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.dataTables.js"></script>
      <style>#stats{display:block;}</style>         














<!-- Bootstrap styles -->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="<?php echo base_url();?>file-uploader/css/style.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="<?php echo base_url();?>file-uploader/css/jquery.fileupload.css">

    
</head>
<body>
<div class="wrapper">




	<!-- START HEADER -->
    <div id="header">
    
    
    	<!-- logo -->
    	<div class="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>img/logo.png" width="112" height="43" /></a></div>
        
        
        <!-- notifications -->
        <div id="notifications"></div>
        
        
        <!-- quick menu -->
        <div id="quickmenu">
        	<a href="#" class="qbutton-left tips" title="Add a new post"><img src="<?php echo base_url();?>img/icons/header/newpost.png" width="18" height="14" alt="new post" /></a>
        	<a id="open-stats" href="#" class="qbutton-right tips" title="Statistics"><img src="<?php echo base_url();?>img/icons/header/graph.png" width="17" height="15" alt="graph" /></a>
            <div class="clear"></div>
        </div>
        
        
        <!-- profile box -->
        <div id="profilebox">
        	<a href="#" class="display">
            	<img src="<?php echo base_url();?>img/simple-profile-img.jpg" width="33" height="33" alt="profile"/>	<b>Logged in as</b>	<span>Administrator</span>
            </a>
            
            <div class="profilemenu">
            	<ul>
                	<li><a href="#">Account Settings</a></li>
                	<li><a href="<?php echo base_url() ?>login/logout_user">Logout</a></li>
                </ul>
            </div>
            
        </div>
        
        
        <div class="clear"></div>
    </div>
    <!-- END HEADER -->
    
    
    
    
    
    
    
    
    
    <!-- START MAIN -->
    <div id="main">
    
		
        
        
        
        <!-- START SIDEBAR -->
        <div id="sidebar">
        	
            <!-- start searchbox -->
            <div id="searchbox">
            	<div class="in">
               	  <form id="form1" name="form1" method="post" action="">
                  	<input name="textfield" type="text" class="input" id="textfield" onfocus="$(this).attr('class','input-hover')" onblur="$(this).attr('class','input')"  />
               	  </form>
            	</div>
            </div>
            <!-- end searchbox -->
            
            <!-- start sidemenu -->
            <div id="sidemenu">
            	<ul>
                	<li><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>img/icons/sidemenu/laptop.png" width="16" height="16" alt="icon"/>Dashboard</a></li>
                    <li><a href="<?php echo base_url();?>article/archive"><img src="<?php echo base_url();?>img/icons/sidemenu/copy.png" width="16" height="16" alt="icon"/>Articles List</a></li>
                    <li class="active"><a href="<?php echo base_url();?>pages/view/add_article"><img src="<?php echo base_url();?>img/add.png" width="16" height="16" alt="icon"/>Add Article</a></li>
                    <li><a href="<?php echo base_url();?>pages/view/drafts"><img src="<?php echo base_url();?>img/icons/sidemenu/calendar.png" width="16" height="16" alt="icon"/>Drafts</a></li>

               	  <li><a href="<?php echo base_url();?>pages/view/side_menu"><img src="<?php echo base_url();?>img/icons/sidemenu/user.png" width="16" height="16" alt="icon"/>Side Menu</a></li>
                    
                    <li><a href="<?php echo base_url();?>pages/view/google_any"><img src="<?php echo base_url();?>img/icons/sidemenu/lock.png" width="16" height="16" alt="icon"/>Google Analytics</a></li>
                     <li ><a href="<?php echo base_url();?>pages/view/display_options"><img src="<?php echo base_url();?>img/icons/16x16/boxes.png" width="16" height="16" alt="icon"/>Display Options</a></li>
                    <li><a href="<?php echo base_url();?>pages/view/admin_settings"><img src="<?php echo base_url();?>img/icons/16x16/settings.png" width="16" height="16" alt="icon"/>Admin Settings</a></li>
                    <li><a href="<?php echo base_url();?>pages/view/ad_management"><img src="<?php echo base_url();?>img/icons/16x16/video.png" width="16" height="16" alt="icon"/>Ad Management</a></li>


               	  <!-- start submenu with icon -->
                    <!-- end submenu with icon -->
                    <!-- start submenu without icon -->
                    <!-- end submenu without icon -->
                    
                </ul>
            </div>
            <!-- end sidemenu -->
            
        </div>
        <!-- END SIDEBAR -->

        
        <!-- START PAGE -->
        <div id="page">
        	
            	<!-- start stats -->
                <div id="stats">
                    <!-- use it up/down on <b> tag for different colors -->
                	<div class="column">	<b>458</b>Published Articles</div>
                	<div class="column">	<b>12</b>	Drafts</div>
                	<div class="column">	<b>554</b>	Featured Articles</div>
               	  <div class="column">	<b class="down">85</b>Image	Galleries</div>
                <!-- this is last column --><a href="#" title="Close Stats" class="close tips">close</a></div>
                <!-- end stats -->
            	
                
                <!-- start page title -->
                <div class="page-title">
                	<div class="in">
                    		<div class="titlebar">	<h2>ADD ARTICLE</h2>	<p>Create New Article, Image gallery, Videos Do what ever you want :)</p></div>
                            
                            <div class="shortcuts-icons">
                            	<a class="shortcut tips" href="#" title="Refresh"><img src="<?php echo base_url();?>img/icons/shortcut/refresh.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Dashboard"><img src="<?php echo base_url();?>img/icons/shortcut/dashboard.png" width="25" height="25" alt="icon" /></a>
                           	<a class="shortcut tips" href="#" title="Add New Item"><img src="<?php echo base_url();?>img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a></div>
                            
                            <div class="clear"></div>
                    </div>
                </div>
                <!-- end page title -->
                
                
                
                
                
                
                
                	<!-- START CONTENT -->
                    <div class="content">
                    
                    
                    
       
                               <!-- START SIMPLE FORM -->
                        	<div class="simplebox grid740">
                            	<div class="titleh">
                                	<h3>Step 2</h3>
                                    <div class="shortcuts-icons">	<a class="shortcut tips" href="#" title="This is Simple Form"><img src="<?php echo base_url();?>img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>	</div>
                                </div>
                                <div class="body">
                                
                                 <?php /*?> <form id="article_form" name="article_form" method="post" action="" enctype="multipart/form-data"><?php */?>
                                 <?php echo form_open_multipart('article/submit_art_step2'); ?>
                                  

                                    
                                    
                                    
                                    
                                    <div class="st-form-line" style="z-index: 620;">	
                                    	<span class="st-labeltext">Cover Type</span>	
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" name="cover_type" class="uniform" value="image" style="opacity: 0;" checked="checked"></span></div> Image</label> 
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" name="cover_type" class="uniform" value="video" style="opacity: 0;"></span></div> Video</label>
                                  		<div class="clear" style="z-index: 610;"></div> 
                                    </div>
                                    
                                    
                                    
                                    
                                                                                                            

                                    
                                    <!-- This is uniform upload input -->
                                  	<div class="st-form-line">	
                                    	<span class="st-labeltext">Upload Cover File</span>	
                                        <input type="file" class="uniform" name="cover_file"/>
                                  		<div class="clear"></div> 
                                    </div>

                                    

                                    


                                    
                                    <div class="button-box">
                                   	  <input type="submit" name="button" id="button" value="Save and Continue" class="st-button"/>
                                   	  <input type="reset" name="button" id="button2" value="Reset" class="st-clear"/>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                  </form>
                                
  
                                </div>
                            </div>
                        <!-- END SIMPLE FORM -->                      
                    
                    
                    <div class="clear"></div>











                               <!-- START SIMPLE FORM -->
                        	<div class="simplebox grid740">
                            	<div class="titleh">
                                	<h3>File Upload</h3>
                                </div>
                                <div class="body">







<div class="container">
    
    <br>
    <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Add files...</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]">
    </span>
    <br>
    <br>
    <!-- The global progress bar -->
    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    <!-- The container for the uploaded files -->
    <div id="files" class="files"></div>

    
</div>
<?php /*?><script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><?php */?>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url();?>file-uploader/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo base_url();?>file-uploader/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url();?>file-uploader/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo base_url();?>file-uploader/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo base_url();?>file-uploader/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo base_url();?>file-uploader/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo base_url();?>file-uploader/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo base_url();?>file-uploader/js/jquery.fileupload-validate.js"></script>
<script>
/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : '<?php echo base_url();?>file-uploader/server/php/',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
    $('#fileupload').fileupload({
		formData: {p_id: '<?php echo $id;?>'},
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png|mp4)$/i,
        maxFileSize: 5000000, // 5 MB
		maxNumberOfFiles: 1,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
					//alert($(data.context.children()[index]));
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index, file) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>

















                                </div>
                            </div>







                        <!-- start simplebox --><!-- end simplebox -->
                    
                    
                    
                    </div>
                    <!-- END CONTENT -->
                
            
            
            
            
            
            
        </div>
        <!-- END PAGE -->

    <div class="clear"></div>
    </div>
    <!-- END MAIN -->

    
    <!-- START FOOTER -->
    <div id="footer">
    	<div class="left-column">&copy; Copyright 2013 - All rights reserved.</div>

    </div>
    <!-- END FOOTER -->

</div>

</body>
</html>