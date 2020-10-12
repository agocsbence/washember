<?php get_header(); the_post(); ?>


<div id="singleBlogPost" class="bg--white">
    <div class="container">
        <div class="blog-post-content">
            <p class="date"><?php echo get_the_date(); ?></p>
            <h2><?php the_title(); ?></h2>
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <div class="description">
                <?php the_content();?>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Scelerisque eu ultrices vitae auctor. Scelerisque felis imperdiet proin fermentum. Id leo in vitae turpis massa sed. A iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Sed elementum tempus egestas sed sed risus pretium quam. Tellus elementum sagittis vitae et leo. Sem viverra aliquet eget sit amet tellus cras. Amet nisl purus in mollis nunc. Turpis egestas integer eget aliquet nibh praesent tristique magna. Magna fringilla urna porttitor rhoncus dolor purus non. Orci a scelerisque purus semper. Pharetra diam sit amet nisl suscipit. Sed arcu non odio euismod lacinia.</p>
                <p>Est lorem ipsum dolor sit amet consectetur adipiscing. Faucibus ornare suspendisse sed nisi lacus. Sed risus ultricies tristique nulla. Eget magna fermentum iaculis eu non diam phasellus. Vitae congue eu consequat ac felis. Iaculis nunc sed augue lacus viverra. Justo nec ultrices dui sapien eget mi proin sed. Bibendum arcu vitae elementum curabitur vitae nunc. Tellus integer feugiat scelerisque varius morbi. Cras fermentum odio eu feugiat pretium nibh ipsum consequat. In cursus turpis massa tincidunt dui. Mus mauris vitae ultricies leo integer malesuada nunc vel risus. Faucibus ornare suspendisse sed nisi lacus sed.</p>
                <p>Risus at ultrices mi tempus imperdiet. Ultrices dui sapien eget mi proin sed libero enim sed. Est ultricies integer quis auctor elit. Tincidunt eget nullam non nisi. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Diam maecenas ultricies mi eget. At tellus at urna condimentum. Proin nibh nisl condimentum id venenatis. In ornare quam viverra orci sagittis eu volutpat. Cursus risus at ultrices mi tempus imperdiet nulla. Diam vel quam elementum pulvinar etiam non quam. Velit ut tortor pretium viverra suspendisse potenti. Risus sed vulputate odio ut enim. Vestibulum morbi blandit cursus risus at ultrices mi.</p>
            </div>
            <div class="grid grid-2">
                <?php previous_post_link( '%link', __('Előző', 'washember'), true ); ?> 
                <?php next_post_link( '%link', __('Következő', 'washember'), true ); ?> 
            </div>
        </div>
    </div>
</div>

<?php get_footer();
