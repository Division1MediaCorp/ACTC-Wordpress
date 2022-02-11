			<?php $themnific_redux = get_option( 'themnific_redux' ); ?>
            <ul class="social-menu tranz">
            
            <?php if (empty($themnific_redux['tmnf-social-rss'])) {} else { ?>
            <li class="sprite-rss"><a title="<?php esc_attr_e('Rss Feed','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-rss']);?>"><i class="fas fa-rss"></i><span><?php esc_html_e('Rss Feed','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-facebook'])) {} else { ?>
            <li class="sprite-facebook"><a class="mk-social-facebook" href="<?php echo esc_url($themnific_redux['tmnf-social-facebook']);?>"><i class="fab fa-facebook"></i><span><?php esc_html_e('Facebook','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-twitter'])) {} else { ?>
            <li class="sprite-twitter"><a class="mk-social-twitter-alt" href="<?php echo esc_url($themnific_redux['tmnf-social-twitter']);?>"><i class="fab fa-twitter"></i><span><?php esc_html_e('Twitter','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-google'])) {} else { ?>
            <li class="sprite-google"><a class="mk-social-googleplus" title="<?php esc_attr_e('Google+','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-google']);?>"><i class="fab fa-google-plus-square"></i><span><?php esc_html_e('Google+','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-flickr'])) {} else { ?>
            <li class="sprite-flickr"><a class="mk-social-flickr" title="<?php esc_attr_e('Flickr','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-flickr']);?>"><i class="fab fa-flickr"></i><span><?php esc_html_e('Flickr','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-500'])) {} else { ?>
            <li class="sprite-px"><a class="differ2" title="<?php esc_attr_e('500px','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-500']);?>"><i class="fab fa-500px"></i><span><?php esc_html_e('500px','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-instagram'])) {} else { ?>
            <li class="sprite-instagram"><a class="mk-social-photobucket" href="<?php echo esc_url($themnific_redux['tmnf-social-instagram']);?>"><i class="fab fa-instagram"></i><span><?php esc_html_e('Instagram','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-pinterest'])) {} else { ?>
            <li class="sprite-pinterest"><a class="mk-social-pinterest" title="<?php esc_attr_e('Pinterest','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-pinterest']);?>"><i class="fab fa-pinterest"></i><span><?php esc_html_e('Pinterest','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-youtube'])) {} else { ?>
            <li class="sprite-youtube"><a class="mk-social-youtube" href="<?php echo esc_url($themnific_redux['tmnf-social-youtube']);?>"><i class="fab fa-youtube"></i><span><?php esc_html_e('YouTube','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-vimeo'])) {} else { ?>
            <li class="sprite-vimeo"><a class="mk-social-vimeo" title="<?php esc_attr_e('Vimeo','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-vimeo']);?>"><i class="fab fa-vimeo-square"></i><span><?php esc_html_e('Vimeo','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-github'])) {} else { ?>
            <li class="sprite-github"><a title="<?php esc_attr_e('GitHub','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-github']);?>"><i class="fab fa-github"></i><span><?php esc_html_e('GitHub','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-linkedin'])) {} else { ?>
            <li class="sprite-linkedin"><a class="mk-social-linkedin" title="<?php esc_attr_e('LinkedIn','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-linkedin']);?>"><i class="fab fa-linkedin-in"></i><span><?php esc_html_e('LinkedIn','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-skype'])) {} else { ?>
            <li class="sprite-skype"><a class="mk-social-skype" title="<?php esc_attr_e('Skype','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-skype']);?>"><i class="fab fa-skype"></i><span><?php esc_html_e('Skype','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-tumblr'])) {} else { ?>
            <li class="sprite-tumblr"><a class="mk-social-tumblr" title="<?php esc_attr_e('Tumblr','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-tumblr']);?>"><i class="fab fa-tumblr"></i><span><?php esc_html_e('Tumblr','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-foursquare'])) {} else { ?>
            <li class="sprite-foursquare"><a href="<?php echo esc_url($themnific_redux['tmnf-social-foursquare']);?>"><i class="fab fa-foursquare"></i><span><?php esc_html_e('Foursquare','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-dribbble'])) {} else { ?>
            <li class="sprite-dribbble"><a class="mk-social-dribbble" title="<?php esc_attr_e('Dribbble','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-dribbble']);?>"><i class="fab fa-dribbble"></i><span><?php esc_html_e('Dribbble','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-stumbleupon'])) {} else { ?>
            <li class="sprite-stumbleupon"><a  title="<?php esc_attr_e('StumbleUpon','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-stumbleupon']);?>"><i class="fab fa-stumbleupon"></i><span><?php esc_html_e('StumbleUpon','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-soundcloud'])) {} else { ?>
            <li><a title="<?php esc_attr_e('SoundCloud','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-soundcloud']);?>"><i class="fab fa-soundcloud"></i><span><?php esc_html_e('SoundCloud','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-spotify'])) {} else { ?>
            <li class="sprite-spotify"><a title="<?php esc_attr_e('Spotify','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-spotify']);?>"><i class="fab fa-spotify"></i><span><?php esc_html_e('Spotify','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-xing'])) {} else { ?>
            <li class="sprite-xing"><a title="<?php esc_attr_e('Xing','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-xing']);?>"><i class="fab fa-xing"></i><span><?php esc_html_e('Xing','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-whatsapp'])) {} else { ?>
            <li class="sprite-whatsapp"><a title="<?php esc_attr_e('WhatsApp','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-whatsapp']);?>"><i class="fab fa-whatsapp"></i><span><?php esc_html_e('WhatsApp','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-vk'])) {} else { ?>
            <li class="sprite-vk"><a title="<?php esc_attr_e('VKontakte','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-vk']);?>"><i class="fab fa-vk"></i><span><?php esc_html_e('VKontakte','citygov');?></span></a></li><?php } ?>
            
            <?php if (empty($themnific_redux['tmnf-social-snapchat'])) {} else { ?>
            <li><a title="<?php esc_attr_e('Snapchat','citygov');?>" href="<?php echo esc_url($themnific_redux['tmnf-social-snapchat']);?>"><i class="fab fa-snapchat-ghost"></i><span><?php esc_html_e('Snapchat','citygov');?></span></a></li><?php } ?>
            
            <li class="search-item">
            
            	<a class="searchOpen" href="<?php esc_url('#'); ?>" aria-label="<?php esc_html_e( 'Open Search Window', 'citygov' ); ?>"><i class="fas fa-search"></i><span class="screen-reader-text"><?php echo _x( 'Open Search Window', 'label', 'citygov' ); ?></span></a></li>
            
            </ul>