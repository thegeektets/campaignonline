<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <hgroup>
      <h1><a href="#">E<span>quiplex Campus</span> S<span>olutions</span></a></h1>
      <h2>Digitilizing your campus election campaigns</h2>
    </hgroup>
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Search Our Website&hellip;" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value;">
        <input type="image" src="<?php
    $this->load->helper('url');
    echo base_url("/assests/images/search.gif"); ?>" id="search" alt="Search">
      </fieldset>
    </form>
    <?php
    $this->load->helper('url');
    ?>
    <ul id="social">
      <li><a href="#"><img src="<?php 
      echo base_url("/assests/images/demo/social/1.gif");?>" alt=""></a></li>
      <li><a href="#"><img src="<?php 
      echo base_url("/assests/images/demo/social/1.gif");?>" alt=""></a></li>
      <li><a href="#"><img src="<?php 
      echo base_url("/assests/images/demo/social/1.gif");?>" alt=""></a></li>
      <li><a href="#"><img src="<?php 
      echo base_url("/assests/images/demo/social/1.gif");?>" alt=""></a></li>
      <li><a href="#"><img src="<?php 
      echo base_url("/assests/images/demo/social/1.gif");?>" alt=""></a></li>
    </ul>
  </header>
</div>
<div class="wrapper row2">
  <nav id="topnav">
    <ul class="clear">
      <li class="first "><a href="welcome">Home</a></li>
      <li ><a href="campaign">Campus Elections</a></li>
      <li class="active"><a href="about">About us</a></li>
    </ul>
  </nav>
</div>
<!-- content -->
<div class="wrapper row3">
  <div id="container" class="clear">
    <!-- content body -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
 
    <div class="wrapper row3">
    <p>Equiplex Campus Solutions is an initiave by <a href="www.equiplexdevelopers.com"> Equiplex Business Solutions</a> to help out
      campus students by providing solutions to most commonly faced problems.Campus election was noted as one of those
      challenges that face students and that is why this website is here.</p>
    <p>Who is Equiplex Developers ?
    </p>
    <ul>
      <li>Griffin Muteti |Computer Science|Equiplex Business Solutions|Project Manager|Software Developer</li>
      <li>Eva Watiri |Computer Science|Equiplex Business Solutions|Software Developer</li>
      <li>Dennis Simiyu|Computer Science|Equiplex Business Solutions|Marketing Manager|Software Developer</li>
      <li>Ann Kandie |Computer Science|Equiplex Business Solutions|Database Manager|Software Developer</li>
      <li>James Kamau |Computer Science|Equiplex Business Solutions|Project Manager|Software Developer</li>
      <li>Paul Namajanja |Computer Science|Equiplex Business Solutions|Software Developer</li>
 
    </ul>
    <p>Listed above is a group of software developers that make up the team equiplexdevelopers.They are 
    responsible for this initiative and many software products you might see around your campus.Please get in touch 
    with us :)</p>
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- / content body -->
  </div>
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row4">
  <div id="footer" class="clear">
    <!-- Section One -->
   <section class="two_quarter first">
      <h2 class="title">Meet The Team</h2>
      <ul>
       
        <li class="last">
          <figure class="clear">
            <div class="imgl"><img src="<?php echo base_url("/assests/images/logo.png");?>" alt=""></div>
            <figcaption>
              <p><strong><a href="#">Equiplex Developers</a></strong></p>
              <p>Equiplex Developers is a group of developers who run a developing company
               <a href="#">Equiplex Business Solutions</a> based in kenya</p>
               <p>Our company is filled with passionate, young, fun, and brilliant experts. 
                We are engineers, programmers, designers, and professionals ready to help you succeed in 
                digitilizing all your business processes.</p>
                <p>Our dream is to see a digital kenya in a digital world :).</p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- Section Three -->
    <section class="one_quarter">
      <h2 class="title">Win in your elections</h2>
      <article>
        <header><strong><a href="#">Let us campaign for you</a></strong>
         </header>
        <p>your probably wondering how your friends got their names posted on this website,well its simple just contact us we will get back to you and you will have your link here within no time.call me on 0702990800&hellip;</p>
      </article>
    </section>
    <!-- Section Four -->
    <section class="one_quarter">
      <h2 class="title">Contact Us</h2>
      <form method="post" action="#">
        <fieldset>
          <legend>Contact Form:</legend>
          <label for="cf_name">Name:</label>
          <input type="text" name="cf_name" id="cf_name" value="">
          <label for="cf_email">Email:</label>
          <input type="text" name="cf_email" id="cf_email" value="">
          <label for="cf_message">Message:</label>
          <textarea name="cf_message" id="cf_message" cols="45" rows="10"></textarea>
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </section>
    <!-- / Section -->
  
    <!-- / Section -->
  </div>
</div>
<!-- Copyright -->
<div class="wrapper">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy;  2013 - All Rights Reserved - <a href="http://www.equiplexdevelopers.com"> Equiplex Business Solutions</a></p>
    </footer>
</div>
<script>
$(document).ready(function () {
    $("#cf_name, #cf_email, #cf_message").defaultvalue("Name", "Email", "Message");
});
</script>
</body>
</html>