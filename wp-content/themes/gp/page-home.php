<?php get_header()?>

<div class="wrap">
    <main>
        <div class="section home">
            <h1>Strictly Maintenance & Repairs</h1>
            <h2>Domestic & Commercial</h2>
            <div class="content-container">
                <?php 
                if ( have_posts() ) {
                    while ( 
                        have_posts() ) {
                        the_post(); 
                        get_template_part('partials/content','index');
                    } 
                } 
                ?>
            </div>
            <img src="<?php echo get_template_directory_uri()?>./assets/img/tools.jpg" width="320px">
            <h3>Auckland Wide - City and Suburbs</h3>
        </div>

        <div class="section services">
            <h1 class="title">Services</h1>
            <p class="summary">Require one of our services? Whether you’re desperate or curious, simply need routine maintenance on your home or business’ plumbing systems, Gemini Plumbers are just a phone call away!</p>
            <div class="services-wrap">
            <?php
                $args = array('post_type' => 'service');
                // The Query
                $the_query = new WP_Query($args);

                // The Loop
                while ( $the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('partials/content', 'service');
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
            </div>
        </div>
        <div class="section pricing">
            <h1 class="title">Pricing</h1>
            <p class="summary">Below are our pricing rates regardless of the service you require! Payments are made on the job via credit. Our contract rates vary company to company to be discussed.</p>
            <div class="pricing-wrap">
            <?php
                $args = array('post_type' => 'price');
                // The Query
                $the_query = new WP_Query($args);

                // The Loop
                while ( $the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('partials/content', 'price');
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
            </div>
        </div>

        <div class="section testimonials">
            <h1 class="title">What they say</h1>
            <p class="summary">Here's what some of our customers have said about their service</p>
            <div class="testimonials-wrap">
            <?php
                $args = array('post_type' => 'testimonial');
                // The Query
                $the_query = new WP_Query($args);

                // The Loop
                while ( $the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('partials/content', 'testimonial');
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
            </div>
        </div>

        <div class="section gallery">
            <h1 class="title">Gallery</h1>
            <p class="summary">Here's some of the major projects we've done in recent years</p>
            <div class="year-wrap">
                <button type="button" class="gallery-year all">All</button> 
                <?php 
                    $terms = get_terms('year', array('hide_empty' => false));
                    foreach($terms as $term){
                        echo '<button type="button" class="gallery-year" data-filter=".'.$term->slug.'">'.$term->name.'</button>';
                    }       
                ?>    
            </div>
            <div class="portfolio-wrap">
                <?php
                    $args = array('post_type' => 'gallery');
                    // The Query
                    $the_query = new WP_Query($args);

                    // The Loop
                    while ( $the_query->have_posts()) {
                        $the_query->the_post();
                        get_template_part('partials/content', 'gallery');
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                ?><br>
            </div>
        </div>

        <div class="section contact">
            <h1 class="title">Contact Us</h1>
            <p class="summary">We can be contacted at any time to accompany your plumbing and water needs</p>
            <div class="contact-wrap">
                <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="3c5013f" title="GPs CONTACT"]')?>
                    <!-- <form>
                        <h1>Contact Form</h1>
                        <label>Please let us know your query</label>
                        <div class="form-group 1">
                            <label>Name</label>
                            <input type="input" class="name-input" placeholder="Your full name">
                        </div>
                        <div class="form-group 2">
                            <label>Email</label>
                            <input type="input" class="email-input" placeholder="Your full name">
                        </div>
                        <div class="form-group 3">
                            <label>How did you find us?</label>
                            <select name="select" id="select">
                                <option value="google">Google</option>
                                <option value="socialmedia">Social Media</option>
                                <option value="word">Word of mouth</option>
                                <option value="github">Github</option>
                                <option value="advertisement">Other Advertisement</option>
                            </select>
                        </div>
                        <div class="form-group 4">
                            <label>Message</label>
                            <textarea class="message" placeholder="Enter your message here"></textarea>         
                        </div>
                        <button type="submit" class="submit-btn">Submit Form</button>
                    </form> -->
                </div>
    
                <div class="contact-info">
                    <p>Do you require a plumber, services, information or a quote? Whatever it is simply write to us in the form provided and we'll get back to you hopefully within 24 hours!</p>
                    <p>Plumbing Maintenance & Repairs only for regional businesses and homes</p>
                    <h2>• Phone Main Office. Working Hours: 6:00am - 5:30pm Mon - Fri</2>
                    <h2>• Callout rates & service included in weekends</h2>
                    <img src="<?php echo get_template_directory_uri()?>./assets/img/sitesafe.jpeg" alt="Work Certified" width="200px">
                    <p><i class="fa fa-envelope"></i>Email us at gpheadoffice@xtra.co.nz</p>
                    <div class="socials">
                        <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

<?php get_footer()?>