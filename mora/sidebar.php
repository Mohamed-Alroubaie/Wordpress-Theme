<!-- <div class="sidebar_container">
    <div class="sidebar">
        <div class="sidebar_item">
            <h2>New Website</h2>
            <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
        </div>
    </div>
<div class="sidebar">
    <div class="sidebar_item">
        <h2>Latest Update</h2>
        <h3>November 2012</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
    </div>
</div>
<div class="sidebar">
    <div class="sidebar_item">
        <h3>November 2012</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
    </div>
</div>
<div class="sidebar">
    <div class="sidebar_item">
    <h2>Contact</h2>
    <p>Phone: +44 (0)1234 567891</p>
    <p>Email: <a href="mailto:info@youremail.co.uk">info@youremail.co.uk</a></p>
</div>
</div>
</div> -->




<div class="sidebar_container">
<?php
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<ul>
    <li>Sidebar</li>
</ul>	  
<?php endif ?>
</div>