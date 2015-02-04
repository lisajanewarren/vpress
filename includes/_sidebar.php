<!-- Sidebar -->

<div id="sidebar-wrapper">
    <ul class="sidebar-nav">

        <!-- desktop arrow to open the side menu -->
        <li class="menu-close">
            <a class="menu-toggle" href="#" id="menu-show"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </li>
      
        <!-- search icon - when menu is closed -->
        <li class="menu-close" style="margin-top:30px;">
          <a href="#"><span class="glyphicon glyphicon-search"></span></a>
        </li>
      
        <li class="menu-close" style="margin-top:30px;">
            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
        </li>
      
        <!-- desktop cross to close the side menu -->
        <li class="menu-open" style="padding:2px 0 30px 0;">
            <a class="menu-toggle" id="menu-hide" href="#"><span class="glyphicon glyphicon-remove"></span></a>
        </li>
        
        <!-- search box - when menu is open -->
        <li class="menu-open" id="menu-search" style="text-indent:0;">
            <form action="#" method="post" style="margin:0; padding:0;">
                <input id="menu-search-field" type="text" style="padding-left:10px; padding-top:10px; width:175px;"/>
                <button type="submit" style="background:none; border:none; font-size:2em;"><span class="glyphicon glyphicon-search"></span></button>
            </form>
        </li>

        <!-- text menu links-->
        <li class="dropdown menu-open">
            <a href="#" class="dropdown-toggle">Dashboard <span class="glyphicon glyphicon-chevron-right pull-right"></span></a>
            <ul class="sub-menu" style="padding-left:10px; width:200px;">
               <li><a href="#">Some Buyer Info</a></li>
               <li><a href="#">Some More Info</a></li>
            </ul>
        </li>
        <li class="menu-open">
            <a href="#" id="catalogues">Catalogues<span class="glyphicon glyphicon-chevron-right pull-right"></span></a>
        </li>
        <li class="menu-open">
            <a href="#" class="dropdown-toggle">Reports <span class="glyphicon glyphicon-chevron-right pull-right"></span></a>
            <ul class="sub-menu" style="padding-left:10px; width:200px;">
                <li><a href="#" class="dropdown-toggle">A - Reports <span class="glyphicon glyphicon-chevron-right pull-right" style="margin-right:15px;"></span></a>
                    <ul class="sub-menu" style="padding-left:10px; width:190px;">
                        <li><a href="#">1 - Report</a></li>
                        <li><a href="#">2 - Report</a></li>
                    </ul>
                </li>
                <li><a href="#">B - Reports</a></li>
            </ul>
        </li>
        <li class="menu-open">
            <a href="#">File Manager</a>
        </li>
        <li class="menu-open basket row-buffer-top">
            <a href="#">2 item(s)<span class="glyphicon glyphicon-shopping-cart pull-right" style="font-size:2em; margin-top:-5px;"></span></a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->
