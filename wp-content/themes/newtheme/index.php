
<?php
   get_header();
   ?>
<body>
   <?php if( have_rows('post') ): ?>
   <div id="container" class="box">
      <div id="obsah" class="content box">
         <div class="in">
            <div id="new-article">
            </div>
            <?php while( have_rows('post') ): the_row(); 
               $title = get_sub_field('title');
                $image = get_sub_field('image');
                 $description = get_sub_field('description');
                  $link = get_sub_field('link');
               ?>
            <div class="article">
               <h2><?php echo $title;?></h2>
               <div class="f-left article-img">
                  <img src="<?php echo $image['url'];?>" alt="" />
                  <div></div>
               </div>
               <p class="f-left"> <?php echo $description;?>
                  <a href="<?php echo $link;?>" class="more">Read More</a>
               </p>
               <div class="clear"></div>
            </div>
            <?php endwhile; ?>
            <a href="http://all-free-download.com/free-website-templates/" class="older">&laquo; Older articles</a> 
         </div>
      </div>
      <?php endif; ?>
      <div id="panel-right" class="box panel">
         <div id="bottom">
            <div class="in">
               <strong class="title">About me</strong>
               <div class="f-left about-img">
                  <img src="<?php bloginfo('template_directory') ?>/tmp/about.jpg" alt="" />
                  <div></div>
               </div>
               <p class="f-left about-me"> <em>Name Surname</em> "Lorem ipsum dolor sit amet, consectetuer adip iscing elit, sed diam non ummy nibh euismod tincidunt u”</p>
               <div class="clear"></div>
               <br />
               <strong class="title">Categories</strong>
               <ul>
                  <li><a href="http://all-free-download.com/free-website-templates/">Business</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">Art &amp; Photography</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">Communications</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">Fashion</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">Hosting</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">Interior &amp; Furniture</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">Music</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">Real Estate</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">Sport</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">Travel</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">Web design</a></li>
               </ul>
               <strong class="title">Entries by month</strong>
               <ul>
                  <li><a href="http://all-free-download.com/free-website-templates/">August 2008 (38)</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">July 2008 (81)</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">June 2008 (58)</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">May 2008 (60)</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">April 2008 (68)</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">March 2008 (82)</a></li>
                  <li><a href="http://all-free-download.com/free-website-templates/">February 2008 (36)</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   </div>
</body>
<?php
   get_footer();
   ?>