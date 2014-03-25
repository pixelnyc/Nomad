<?php include("templates/header.php");?>
       
    
    <!-- START MAIN -->
    <div id="main">
    
		
        
        
        
<?php include("templates/side_bar.php");?>

        
        <!-- START PAGE -->
        <div id="page">
        	
<?php include("templates/article_count_summary.php");?> 
            	
                
                <!-- start page title -->
                <div class="page-title">
                	<div class="in">
                    		<div class="titlebar">	<h2>DASHBOARD</h2>	<p>Quickly create Articles, Videos, Galleries and Other stuff! </p></div>
  
                            <div class="clear"></div>
                    </div>
                </div>
                <!-- end page title -->
                
                
                
                
                
                
                
                	<!-- START CONTENT -->
                    <div class="content">
                    
                    <a href="<?php echo base_url();?>pages/view/add_article" class="addarticle">ADD ARTICLE</a>
                    
                    
                    
                    
                    	<!-- start simple tips --><!-- start dashbutton -->
                      <div class="grid740">
                        	<a href="<?php echo base_url();?>pages/view/add_article" class="dashbutton">	<img src="<?php echo base_url();?>img/icons/dashbutton/article.png" width="32" height="32" alt="icon" />	<b>Create Aritcle</b>	Manage Aritcle with Editor</a>
                        	<a href="<?php echo base_url();?>manage/articles_list" class="dashbutton">	<img src="<?php echo base_url();?>img/icons/dashbutton/list.png" width="48" height="30" alt="icon" />	<b>Article List</b>	View All Articles</a>
                        	<a href="<?php echo base_url();?>pages/view/side_menu" class="dashbutton">	<img src="<?php echo base_url();?>img/icons/dashbutton/menu.png" width="32" height="32" alt="icon" />	<b>Side Menu</b>	Add, Edit Delete Side Menu</a>
                        	<a href="<?php echo base_url();?>manage/gallery_list" class="dashbutton">	<img src="<?php echo base_url();?>img/icons/dashbutton/image.png" width="44" height="32" alt="icon" />	<b>Gallery</b>	View Gallery List</a>
                        	<a href="<?php echo base_url();?>manage/drafts_list" class="dashbutton">	<img src="<?php echo base_url();?>img/icons/dashbutton/personal-folder.png" width="44" height="32" alt="icon" />	<b>Drafts</b>Schedule Posts</a>
                        	<a href="#" class="dashbutton">	<img src="<?php echo base_url();?>img/icons/dashbutton/featured.png" width="35" height="34" alt="icon" /><b>Featured Article</b>	View Featured Articles</a>
                        	<a href="<?php echo base_url();?>pages/view/display_options" class="dashbutton">	<img src="<?php echo base_url();?>img/icons/dashbutton/frames.png" width="41" height="32" alt="icon" /><b>Display Options</b>	Change Aritcle Patterns</a>
                        	<a href="<?php echo base_url();?>pages/view/admin_settings" class="dashbutton">	<img src="<?php echo base_url();?>img/icons/dashbutton/users.png" width="41" height="32" alt="icon" />	<b>Admin Settings</b>Admin login Settings</a>
                        	<a href="<?php echo base_url();?>pages/view/google_any" class="dashbutton">	<img src="<?php echo base_url();?>img/icons/dashbutton/graph.png" width="44" height="32" alt="icon" /><b>Statistics</b>	Google Analytics Statistics</a>
                        	<a href="<?php echo base_url();?>pages/view/ad_management" class="dashbutton"><img src="<?php echo base_url();?>img/icons/dashbutton/play.png" width="50" height="34" /><b>Ad Management</b>	Manage Ads for Categories</a>
           	              <div class="clear"></div>
                      </div>

                        <!-- START CHART -->
                        <div class="simplebox grid740">
                        
                        	<div class="titleh">
                            <h3>Daily Views Activity</h3>
                            <div class="shortcuts-icons">
                            	<a class="shortcut tips" href="#" title="Info About This Widget"><img src="<?php echo base_url();?>img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Add New Item"><img src="<?php echo base_url();?>img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Search"><img src="<?php echo base_url();?>img/icons/shortcut/search.png" width="25" height="25" alt="icon" /></a>
                                <a class="shortcut tips" href="#" title="Refresh Data"><img src="<?php echo base_url();?>img/icons/shortcut/refresh.png" width="25" height="25" alt="icon" /></a>
                            </div>
                            </div>
                            
                            <div class="body">
                            	
                                
                                
                                <!-- start chart -->
                                
        						<div class="chart">
                                <table id="data">
                                	<tfoot>
                                    	<tr>
                                        	<th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>13</th>
                                            <th>14</th>
                                            <th>15</th>
                                            <th>16</th>
                                            <th>17</th>
                                            <th>18</th>
                                            <th>19</th>
                                            <th>19</th>
                                            <th>20</th>
                                            <th>22</th>
                                            <th>23</th>
                                            <th>24</th>
                                            <th>25</th>
                                            <th>26</th>
                                            <th>27</th>
                                            <th>28</th>
                                            <th>29</th>
                                            <th>30</th>
                                            <th>31</th>
                                    	</tr>
                                	</tfoot>
                                    
                                    <tbody>
                                    	<tr>
                                        	<td>8</td>
                                            <td>25</td>
                                            <td>27</td>
                                            <td>25</td>
                                            <td>54</td>
                                            <td>59</td>
                                            <td>79</td>
                                            <td>47</td>
                                            <td>27</td>
                                            <td>44</td>
                                            <td>44</td>
                                            <td>51</td>
                                            <td>56</td>
                                            <td>83</td>
                                            <td>12</td>
                                            <td>91</td>
                                            <td>52</td>
                                            <td>12</td>
                                            <td>40</td>
                                            <td>8</td>
                                            <td>60</td>
                                            <td>29</td>
                                            <td>7</td>
                                            <td>33</td>
                                            <td>56</td>
                                            <td>25</td>
                                            <td>1</td>
                                            <td>78</td>
                                            <td>70</td>
                                            <td>68</td>
                                            <td>2</td>
                                    	</tr>
                                    </tbody>
                                </table>
                                <div id="holder"></div>
                                </div>
                                
                                <!-- end chart -->
                            
                            
                            </div>
                            
                        </div>
                        <!-- END CHART -->

                        <!-- START PIE CHART --><!-- END PIE CHART -->

                        <!-- START COMBO CHART --><!-- END COMBO CHART -->

                      <div class="clear"></div>

                        



                        <!-- start simplebox with shortcuts --><!-- end simplebox with shortcuts -->

                        <!-- START TABLE --><!-- END TABLE -->

                        <!-- start statistics --><!-- end statistics -->

                        <!-- start tabs --><!-- end tabs -->

                            		<!-- start alert boxes codes --><!-- end alert boxes codes -->
                        
                        
                        
                        
                            		<!-- start alert boxes codes --><!-- end alert boxes codes -->

                      <div class="clear"></div>

                        <!-- start simplebox -->
                        <div class="simplebox grid740">
                        
                        	<div class="titleh">
                        	  <h3>Notes for Admin</h3>
<div class="shortcuts-icons">	<a class="shortcut tips" href="#" title="This is simple box"><img src="<?php echo base_url();?>img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>	</div>
                            </div>
                            
                            <div class="body padding20">
                            	<h2 class="h4-tag">Admin Features will go here if need one!</h2>
                            </div>
                            
                        </div>
                        <!-- end simplebox -->
                    
                    
                    
                    </div>
                    <!-- END CONTENT -->
                
            
            
            
            
            
            
        </div>
        <!-- END PAGE -->

    <div class="clear"></div>
    </div>
    <!-- END MAIN -->

    
<?php include("templates/footer.php");?>