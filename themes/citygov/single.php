<?php get_header();  
if (have_posts()) : while (have_posts()) : the_post();
?>

<?php if(has_post_format('quote'))  { ?>
    <div class="container">
    <?php get_template_part('/post-types/post-quote-post' );} else {?>  
    
      
<div itemscope itemtype="http://schema.org/NewsArticle">
<meta itemscope itemprop="mainEntityOfPage"  content=""  itemType="https://schema.org/WebPage" itemid="<?php the_permalink(); ?>"/>

<div class="page-header">

    <?php if ( has_post_thumbnail()){
		
		the_post_thumbnail('citygov_header',array('class' => 'standard grayscale grayscale-fade'));
    
    } else { 
    
    	if(empty($themnific_redux['tmnf-header-image']['url'])) {} else { ?>
            
                <img class="page-header-img" src="<?php echo esc_url($themnific_redux['tmnf-header-image']['url']);?>" alt="<?php the_title_attribute(); ?>"/>
                
        <?php } 
        
    } ?>
    
    <div class="container">

    	<div class="main-breadcrumbs">
        
        	<?php citygov_breadcrumbs()?>
            
        </div>

        <h1 class="entry-title"><span itemprop="name"><?php the_title(); ?></span></h1>
    
    </div>
        
</div>

<div id="core" <?php post_class('container_alt'); ?>>
   
    <div class="postbar">
    
    	<div id="content_start" class="tmnf_anchor"></div>

        <div id="content" class="eightcol first">
            
            <?php get_template_part('/single-content' ); ?>
               
        </div><!-- end #content -->
    
        <?php get_sidebar(); ?>
   
    </div><!-- end .postbar -->
    
</div> 

<?php }?>
        
        <?php endwhile; else: ?>
        
            <p><?php esc_html_e('Sorry, no posts matched your criteria','citygov');?>.</p>
        
        <?php endif; ?>

</div><!-- end NewsArticle -->
   
<?php get_footer(); ?>