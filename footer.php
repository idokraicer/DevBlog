

	    <footer class="footer text-center py-2 theme-bg-dark ">
		   
           <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
               <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by Ido Kraicer for study purposes.</small>
                  
       </footer>
   
   </div><!--//main-wrapper-->
   
   
   
   
   <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
   <div id="config-panel" class="config-panel d-none d-lg-block dark-mode">
       <div class="panel-inner">
           <a id="config-trigger" class="config-trigger config-panel-hide text-center " href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
           <h5 class="panel-title">Choose Colour</h5>
           <ul id="color-options" class="list-inline mb-0">
               <li class="theme-1  list-inline-item <?php echo (isset($_COOKIE['color']) && $_COOKIE['color'] == 1 ) ? 'active' : '' ?>"><a data-style="assets/css/theme-1.css" href="#" onclick="changeTheme(1)"></a></li>
               <li class="theme-2  list-inline-item <?php echo (isset($_COOKIE['color']) && $_COOKIE['color'] == 2 ) ? 'active' : '' ?>"><a data-style="assets/css/theme-2.css"  href="#" onclick="changeTheme(2)"></a></li>
               <li class="theme-3  list-inline-item <?php echo (isset($_COOKIE['color']) && $_COOKIE['color'] == 3 ) ? 'active' : '' ?>"><a data-style="assets/css/theme-3.css"  href="#" onclick="changeTheme(3)"></a></li>
               <li class="theme-4  list-inline-item <?php echo (isset($_COOKIE['color']) && $_COOKIE['color'] == 4 ) ? 'active' : '' ?>"><a data-style="assets/css/theme-4.css"  href="#" onclick="changeTheme(4)"></a></li>
               <li class="theme-5  list-inline-item <?php echo (isset($_COOKIE['color']) && $_COOKIE['color'] == 5 ) ? 'active' : '' ?>"><a data-style="assets/css/theme-5.css"  href="#" onclick="changeTheme(5)"></a></li>
               <li class="theme-6  list-inline-item <?php echo (isset($_COOKIE['color']) && $_COOKIE['color'] == 6 ) ? 'active' : '' ?>"><a data-style="assets/css/theme-6.css"  href="#" onclick="changeTheme(6)"></a></li>
               <li class="theme-7  list-inline-item <?php echo (isset($_COOKIE['color']) && $_COOKIE['color'] == 7 ) ? 'active' : '' ?>"><a data-style="assets/css/theme-7.css"  href="#" onclick="changeTheme(7)"></a></li>
               <li class="theme-8  list-inline-item <?php echo (isset($_COOKIE['color']) && $_COOKIE['color'] == 8 ) ? 'active' : '' ?>"><a data-style="assets/css/theme-8.css"  href="#" onclick="changeTheme(8)"></a></li>
           </ul>
           <div class="nav-link">

          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="darkSwitch">
            <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
          </div>
          
          <script src="./assets/js/dark-mode-switch.js"></script>

        </div>
           <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
       </div><!--//panel-inner-->
   </div><!--//configure-panel-->

   
      
 
   
</body>
</html> 
