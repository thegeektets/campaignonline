<body>
   <?php
    $this->load->helper('url');
    ?>
<div class="wrapper row1">
  <header id="header" class="clear">
    <hgroup>
   <h1><a href="#">V<span>ote</span> <?php echo $leader[0]['name']?>
    <br/><span><?php echo $leader[0]['school']?><br/>
  </span><?php echo $leader[0]['vyingpost'] ?></a></h1>
      <h2><?php echo $leader[0]['tagline'] ?></h2>
     </hgroup>
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Search Our Website&hellip;" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;">
        <input type="image" src="<?php echo base_url('/assests/images/search.gif')?>" id="search" alt="Search">
      </fieldset>
    </form>
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
    <li class="first "><a href="../../welcome">Home</a></li>
      <li class="active"><a href="../../campaign">Campus Elections</a></li>
      <li ><a href="../../about">About us</a></li>
    
    </ul>
  </nav>
</div>
<!-- content -->
<div class="wrapper row3">
  <div id="container" class="clear">
    <!-- content body -->
    <div id="content">
      <section>
        <h1>My message to you :</h1>
        <figure class="imgr">
<img src="<?php echo 'http://www.equiplexdevelopers.com/campaigns/assests/images/demo/'.$lcampaign[0]['photo_1'] ?>" alt="" width="125" height="125"></figure>
        <p><?php echo $lcampaign[0]['message'] ?></p>
        <h1>Why you should vote for me :</h1>
        <figure class="imgl"><img src="<?php echo 'http://www.equiplexdevelopers.com/campaigns/assests/images/demo/'.$lcampaign[0]['photo_2'] ?>" alt="" width="125" height="125"></figure>
        <p><?php echo $lcampaign[0]['manifesto'] ?></p><h1>About Me :</h1>
        <figure class="imgl"><img src="<?php echo 'http://www.equiplexdevelopers.com/campaigns/assests/images/demo/'.$lcampaign[0]['photo_3'] ?>" alt="" width="125" height="125"></figure>
        <p><?php echo $lcampaign[0]['about'] ?></p>
      </section>
      <section id="comments">

        <ul>
      <!--    <li class="comment_odd">
            <article>
              <header>
                <figure><img src="<?php echo base_url("/assests/images/demo/avatar.gif") ?>" width="32" height="32" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2000-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2000 @08:15:00</time>
              </header>
              <section>
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </section>
            </article>
          </li> -->
        </ul>
<!--        
<h2>Write A Comment</h2>
        <form action="#" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22">
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22">
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
            <label for="comment" class="hidden"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form">
            &nbsp;
            <input name="reset" type="reset" id="reset" value="Reset Form">
          </p>
        </form>
-->
      </section>
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
    </div>
    <!-- right column -->
    <aside id="right_column">
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      
      <h2>Ask your friends to vote for me ?</h2>
      <nav>
          <ul>
            <li><a href="http://twitter.com/share?text=vote%20for%20 me%20on%20the%20upcoming%20campus%20elections%20Link&url=<?php echo current_url();?>">Twitter</a></li>
          <li><a href="http://www.facebook.com/sharer.php?u=<?php echo current_url();?>">Facebook</a></li>
        
        </ul></nav>
      <!-- /nav -->
      <section>
        <h2>Get In Contact</h2>
        <address>
        <?php echo $leader[0]['name']; ?><br>
        <?php echo "Line 1 :". $leader[0]['phone_1']; ?><br>
        <?php echo "Line 2 :". $leader[0]['phone_2']; ?><br>
        
        <br>
        Email: <a href="#"><?php echo $leader[0]['email']?></a><br>
        </address>
      </section>
      <!-- /section -->
       <!-- /section -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
    </aside>
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
            <div class="imgl"><img src="<?php echo base_url("/assests/images/logo.png") ?>"alt=""></div>
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