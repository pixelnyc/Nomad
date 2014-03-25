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
<?php /*?><link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"><?php */?>

<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="<?php echo base_url();?>file-uploader/css/jquery.fileupload.css">
<link rel="stylesheet" href="<?php echo base_url();?>file-uploader/css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="<?php echo base_url();?>file-uploader/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="<?php echo base_url();?>file-uploader/css/jquery.fileupload-ui-noscript.css"></noscript>



    
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

    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="http://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>

    
</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
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




<?php /*?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script><?php */?>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url();?>file-uploader/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<?php /*?><!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script><?php */?>
<!-- blueimp Gallery script -->
<!--<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>-->
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
<!-- The File Upload user interface plugin -->
<script src="<?php echo base_url();?>file-uploader/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="<?php echo base_url();?>file-uploader/js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="<?php echo base_url();?>file-uploader/js/cors/jquery.xdr-transport.js"></script>
<![endif]-->




</body>
</html>