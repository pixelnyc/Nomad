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
                	<li class="active"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>img/icons/sidemenu/laptop.png" width="16" height="16" alt="icon"/>Dashboard</a></li>
                    <li><a href="<?php echo base_url();?>manage/articles_list"><img src="<?php echo base_url();?>img/icons/sidemenu/copy.png" width="16" height="16" alt="icon"/>Articles List</a></li>
                    <li><a href="<?php echo base_url();?>pages/view/add_article"><img src="<?php echo base_url();?>img/add.png" width="16" height="16" alt="icon"/>Add Article</a></li>
                    <li><a href="<?php echo base_url();?>manage/drafts_list"><img src="<?php echo base_url();?>img/icons/sidemenu/calendar.png" width="16" height="16" alt="icon"/>Drafts</a></li>

               	  <li><a href="<?php echo base_url();?>manage/sections_list"><img src="<?php echo base_url();?>img/icons/sidemenu/user.png" width="16" height="16" alt="icon"/>Side Menu</a></li>
                    
                    <li><a href="<?php echo base_url();?>pages/view/google_any"><img src="<?php echo base_url();?>img/icons/sidemenu/lock.png" width="16" height="16" alt="icon"/>Google Analytics</a></li>
                     <li ><a href="<?php echo base_url();?>manage/display_options"><img src="<?php echo base_url();?>img/icons/16x16/boxes.png" width="16" height="16" alt="icon"/>Display Options</a></li>
                    <li><a href="<?php echo base_url();?>pages/view/admin_settings"><img src="<?php echo base_url();?>img/icons/16x16/settings.png" width="16" height="16" alt="icon"/>Admin Settings</a></li>
                    <li><a href="<?php echo base_url();?>manage/slideshow_list"><img src="<?php echo base_url();?>img/icons/16x16/video.png" width="16" height="16" alt="icon"/>Slideshow List</a></li>
                    <li><a href="<?php echo base_url();?>author/author_list"><img src="<?php echo base_url();?>img/icons/sidemenu/copy.png" width="16" height="16" alt="icon"/>Author List</a></li>


               	  <!-- start submenu with icon -->
                    <!-- end submenu with icon -->
                    <!-- start submenu without icon -->
                    <!-- end submenu without icon -->
                    
                </ul>
            </div>
            <!-- end sidemenu -->
            
        </div>
        <!-- END SIDEBAR -->