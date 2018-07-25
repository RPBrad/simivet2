<?php
/**
* Template Name: Home Page
*
*/
get_header();
$templateDirectory = get_template_directory_uri();
?>
    <script>
      $.fn.visibleHeight = function() {
        var elBottom, elTop, scrollBot, scrollTop, visibleBottom, visibleTop, _ref, _ref1;
        scrollTop = $(window).scrollTop();
        scrollBot = scrollTop + $(window).height();
        elTop = this.offset().top;
        elBottom = elTop + this.outerHeight();
        visibleTop = elTop < scrollTop ? scrollTop : elTop;
        visibleBottom = elBottom > scrollBot ? scrollBot : elBottom;
        return visibleBottom - visibleTop
      }
      $(window).on('scroll resize', function(){
        var currentPix = $("#stick_navbar").visibleHeight();
        console.log(currentPix);
        if (currentPix < 52 ){ 
          $('#stick_navbar').css({'position': 'fixed', 'top': '0px'}); 
        }
      });
    </script>

<section id="intro" class="intro-1 parallax-window" style="background-image: url('<?php echo $templateDirectory; ?>/images/background-1.jpg')">
  <div class="intro-content">
    <h1><span class="big-h1">Hello</span><br>world</h1>
    <p>The greatest trick the devil ever pulled was convincing the world he didn't exist.</p>
  </div>
</section>
<?php
  include('parts/inc_navbar.php');
?>
<div class="container">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mi sit amet mauris commodo. Id neque aliquam vestibulum morbi blandit cursus risus. Lorem sed risus ultricies tristique nulla. Tellus rutrum tellus pellentesque eu tincidunt. Quis auctor elit sed vulputate mi sit amet mauris. Elementum nisi quis eleifend quam adipiscing vitae proin. Malesuada fames ac turpis egestas integer. Mattis aliquam faucibus purus in massa tempor. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Ut etiam sit amet nisl purus in mollis nunc. Eu augue ut lectus arcu bibendum at varius. Mattis rhoncus urna neque viverra justo nec.</p>
  <p>Ut aliquam purus sit amet luctus venenatis. Enim praesent elementum facilisis leo. Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam. Morbi quis commodo odio aenean sed adipiscing. Quis enim lobortis scelerisque fermentum dui faucibus in. Eget sit amet tellus cras adipiscing enim eu turpis. Ipsum suspendisse ultrices gravida dictum fusce ut. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Sem et tortor consequat id. Nam aliquam sem et tortor. A arcu cursus vitae congue mauris. Purus gravida quis blandit turpis cursus. Libero volutpat sed cras ornare arcu dui vivamus. Quis viverra nibh cras pulvinar mattis nunc sed blandit libero.</p>
  <p>Congue mauris rhoncus aenean vel elit. Amet justo donec enim diam vulputate. Iaculis urna id volutpat lacus laoreet non curabitur gravida. Porttitor eget dolor morbi non arcu risus quis varius. Interdum velit laoreet id donec ultrices. Est ultricies integer quis auctor elit. Nec feugiat nisl pretium fusce id velit ut. Cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo. Adipiscing tristique risus nec feugiat in fermentum posuere urna nec. Fusce ut placerat orci nulla pellentesque. Odio aenean sed adipiscing diam donec adipiscing tristique. Libero id faucibus nisl tincidunt eget nullam non nisi. Tortor pretium viverra suspendisse potenti nullam ac tortor vitae purus. Dolor sit amet consectetur adipiscing elit pellentesque. A pellentesque sit amet porttitor eget. Ac placerat vestibulum lectus mauris ultrices.</p>
  <p>Id consectetur purus ut faucibus pulvinar elementum integer enim neque. Suscipit adipiscing bibendum est ultricies integer quis auctor. Amet consectetur adipiscing elit ut aliquam purus. Libero volutpat sed cras ornare arcu dui vivamus. Tempus imperdiet nulla malesuada pellentesque elit. Nunc faucibus a pellentesque sit. At augue eget arcu dictum. Quis ipsum suspendisse ultrices gravida. Aliquam malesuada bibendum arcu vitae elementum curabitur. Mauris nunc congue nisi vitae suscipit. Vitae congue eu consequat ac felis. Scelerisque viverra mauris in aliquam sem fringilla ut. Sit amet facilisis magna etiam tempor orci. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Sed ullamcorper morbi tincidunt ornare massa eget egestas. Dictumst quisque sagittis purus sit amet volutpat consequat. Tortor at auctor urna nunc id cursus metus aliquam. Urna cursus eget nunc scelerisque viverra mauris in. Amet venenatis urna cursus eget nunc scelerisque viverra mauris.</p>
  <p>Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus. Elit ut aliquam purus sit amet. Auctor elit sed vulputate mi sit. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Nulla at volutpat diam ut. Et leo duis ut diam quam. Turpis cursus in hac habitasse platea dictumst quisque sagittis purus. Sit amet nisl purus in. Tortor posuere ac ut consequat. Arcu bibendum at varius vel pharetra vel turpis.</p>
  <p>Ornare arcu dui vivamus arcu felis. Nulla facilisi etiam dignissim diam. Semper eget duis at tellus at urna. A pellentesque sit amet porttitor eget dolor morbi non. Auctor neque vitae tempus quam. Mus mauris vitae ultricies leo integer malesuada nunc vel. Cras semper auctor neque vitae tempus quam. Augue eget arcu dictum varius duis at consectetur lorem donec. Pharetra massa massa ultricies mi. Elit pellentesque habitant morbi tristique.</p>
  <p>Sit amet luctus venenatis lectus magna fringilla urna. Aliquam id diam maecenas ultricies mi eget. Enim facilisis gravida neque convallis a cras. Tristique risus nec feugiat in. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Ac ut consequat semper viverra. Scelerisque in dictum non consectetur a. Sit amet aliquam id diam. Eleifend donec pretium vulputate sapien nec. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Dui id ornare arcu odio ut. Faucibus pulvinar elementum integer enim neque volutpat. Purus sit amet luctus venenatis lectus magna fringilla urna.</p>
  <p>Adipiscing bibendum est ultricies integer quis auctor. Faucibus scelerisque eleifend donec pretium. Tortor vitae purus faucibus ornare suspendisse sed nisi. Tempus imperdiet nulla malesuada pellentesque. Quis risus sed vulputate odio. Tortor at risus viverra adipiscing at in tellus. Egestas diam in arcu cursus euismod quis viverra. Risus quis varius quam quisque id diam. Scelerisque felis imperdiet proin fermentum leo vel orci porta. Commodo viverra maecenas accumsan lacus vel. Ante in nibh mauris cursus mattis molestie. Magna fermentum iaculis eu non diam phasellus. Venenatis cras sed felis eget. Sed adipiscing diam donec adipiscing tristique risus nec feugiat. Sit amet aliquam id diam maecenas ultricies mi. Sagittis nisl rhoncus mattis rhoncus urna neque viverra. Vitae congue eu consequat ac felis donec et odio. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Turpis in eu mi bibendum. Sapien nec sagittis aliquam malesuada bibendum arcu.</p>
  <p>Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Neque ornare aenean euismod elementum nisi quis eleifend. In eu mi bibendum neque. Quis enim lobortis scelerisque fermentum dui faucibus in ornare quam. A pellentesque sit amet porttitor eget dolor morbi non arcu. Quis auctor elit sed vulputate mi sit amet mauris commodo. Nisi est sit amet facilisis magna etiam tempor orci eu. Arcu ac tortor dignissim convallis aenean et tortor. Mattis rhoncus urna neque viverra justo nec ultrices dui sapien. Volutpat commodo sed egestas egestas fringilla phasellus faucibus. Purus faucibus ornare suspendisse sed nisi lacus sed. Viverra accumsan in nisl nisi. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae.</p>
  <p>Vitae tortor condimentum lacinia quis vel eros donec. Morbi non arcu risus quis varius quam quisque id diam. Nullam eget felis eget nunc lobortis mattis aliquam. Eu feugiat pretium nibh ipsum consequat nisl vel pretium lectus. Nec nam aliquam sem et tortor consequat id porta. Aliquet eget sit amet tellus cras adipiscing. Sed libero enim sed faucibus. Quis enim lobortis scelerisque fermentum dui faucibus in ornare quam. Nunc non blandit massa enim nec dui nunc mattis enim. Gravida arcu ac tortor dignissim convallis.</p>
</div>
<?php wp_footer(); ?>
