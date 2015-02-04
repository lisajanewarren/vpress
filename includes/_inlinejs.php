<script type="text/javascript">
   CHARACTERLIMIT = 16;
   
   $("#menu-hide").click(function(e)
   {
    e.preventDefault();
    $("#wrapper").toggleClass('toggled');
    $('.menu-open').fadeOut(150, function()
    {
     $('.menu-close').fadeIn(150);
    });
   });

   $("#menu-show").click(function(e)
   {
    e.preventDefault();
    $("#wrapper").toggleClass('toggled');
    $('.menu-close').fadeOut(150, function()
    {
     $('.menu-open').fadeIn(150);
    });
   });

   $('.fader').on('mouseenter', function()
   {
    $('.fader').not($(this)).stop().animate(
    {
     opacity: 0.9
    }, 150);
   });

   $('.fader').on('mouseleave', function()
   {
    $('.fader').stop().animate(
    {
     opacity: 1
    }, 150);
   });


   $('.dropdown-toggle').on('click', function()
   {
    $(this).next().slideToggle(150);
   });

   $('#catalogues').on('click', function()
   {
    $('#catalogue-selection').fadeToggle();
   });

   $(document).ready(function()
   {
    tmp = '<div class="col-lg-2 finder">\n';
    $('#catalogue-structure > li > a').each(function()
    {
     if ($(this).attr('data-category'))
     {
      tmp += ' <a class="submenu" data-category="' + $(this).attr('data-category') + '" href="#">';
      tmp += $(this).html().substr(0, CHARACTERLIMIT);
      tmp += ($(this).html().length > CHARACTERLIMIT ? '...' : '');
      tmp += '</a>';
      tmp += '&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right pull-right"></span>';
      tmp += '<span class="label label-default pull-right pointer" style="margin-right:10px;">VIEW</span>';
      tmp += '<br />\n';
     }
    });
    tmp += "</div>\n\n";
    $('#catalogue-selection').append(tmp);
   });

   $('#catalogue-selection').on('click', '.submenu', function()
   {
    $(this).parent().nextAll().remove();

    tmp = '<div class="hidden-xs hidden-sm col-md-2 col-lg-2 finder">\n';
    $('#catalogue-structure [data-category=' + $(this).attr('data-category') + ']').parent().find('> ul > li > a').each(function()
    {
     if ($(this).attr('data-category'))
     {
      tmp += ' <a class="submenu" data-category="' + $(this).attr('data-category') + '" href="#">';
      tmp += $(this).html().substr(0, CHARACTERLIMIT);
      tmp += ($(this).html().length > CHARACTERLIMIT ? '...' : '');
      tmp += '</a>';
      tmp += '<span class="glyphicon glyphicon-chevron-right pull-right"></span>';
      tmp += '<span class="label label-default pull-right pointer" style="margin-right:10px;">VIEW</span>&nbsp;&nbsp;&nbsp;';
      tmp += '<br />\n';
     }
    });
    tmp += "</div>\n\n";
    $('#catalogue-selection').append(tmp);
   });
  </script>