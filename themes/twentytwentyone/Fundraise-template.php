<?php /*Template Name:Fundraise */?>
<?php get_header();?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/jquery-3.5.1.min.js"></script>
<style>
.btContentWrap.btClear {padding: 0 !important;}
div#content-load-more-btn {
text-align: center;
margin-bottom: 40px;
}
button#load_more_btn {
padding: 10px 50px;
border: 1px solid #24CAE2;
background-color: #24CAE2;
border-radius: 40px;
color: #fff;
cursor:pointer;
}
.boldRow.col-md-6 {
    padding: 0px 20px;
}
.head-line{
		background-color: lightgrey;
color: #fff;
margin: 30px 2px 10px;
border-radius: 22px;
font-size: 20px;
text-align: center;
padding: 20px;
}

.mian-01 {
	max-width: 1100px;
	margin: 0 auto;
}

.col-sm-3 {
/* 	max-width: 33%; */
	display: inline-block;
	vertical-align: middle;
	padding: 10px;
}

.col-sm-9 {
	max-width: 74%;
	display: inline-block;
	vertical-align: middle;
	padding: 10px;
}
.col-sm-9 h3 {
    font-size: 26px;
    margin: 0;
}
.paragraph,h3{text-align:center;padding:0 0 15px 0;}

.para-01 {
    border-bottom: 2px solid #eee;
    margin-bottom: 40px;
}
	
<!-- css of card wrapper -->
a.card-box-link {
    color: #f5f5f5;
    text-decoration: none;
}
a.card-box-link:hover {
    text-decoration: none;
}
.card_wrapper {
    width: calc(33.33% - 30px);
    margin: 0 15px 40px;
    display: flex;
/*     background-image: url(https://www.avendus.com/crypted_storage_img/img_612e218b80fff_thumbnail.jpg); */
    background-repeat: no-repeat;
    text-align: center;
    position: relative;
    transition: all .5s ease-out;
    background-size: cover;
}
.card_wrapper:hover {
    box-shadow: 0 20px 20px #191919;
    margin-top: -10px;
    transition: all .5s ease-out;
}
ul.image_list {
    list-style: none;
	display: flex;
	height: 100%;
	align-items: center;
}
.image_box {
    position: relative;
}
.image_box .images-show {
    min-width: 30%;
    max-width: 100%;
}
.date_wrapper {
  text-align: center;
    width: 120px;
    background: black;
	color: #f5f5f5;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 600;
    padding: 5px;
    margin: -35px auto 0;
    position: relative;
    top: -15px;
	left:89%;
}
.card_box {
    padding: 15px 30px;
}
.card_content_wrapper h3 {
    font-size: 16px;
   color: #FFFFFF!important;
    text-transform: uppercase;
    text-align: center;
    margin-top: 40px;
    margin-bottom: 20px;
    letter-spacing: 1px;
}
	
.card_content_wrapper h4 {
    color: #FFFFFF;
}	
	
.card_content_wrapper p {
    font-size: 16px;
    color: #f5f5f5;
    padding: 20px 0;
    border-top: 1px solid #fff;
    letter-spacing: 1px;
    line-height: 1.2;
}
.image_box {
    width: 250px;
    height: 120px;
    background: #fff;
    margin: auto;
    position: relative;
    top: -40px;
}
.images-show img{width:100%;}
	.new_wrapper_card {
    display: flex;
    margin: 40px -15px;
	flex-wrap: wrap;
}
	
</style>

<script>
    var now=2; // when click start in page 2

    jQuery(document).on('click', '#load_more_btn', function () {
          jQuery('#load_more_btn').html('Loading....');
        jQuery.ajax({
            
            type: "POST",
            url: "<?php echo get_site_url(); ?>/wp-admin/admin-ajax.php",
            data: {
                action: 'my_load_more_function_3', // the name of the function in functions.php
                paged: now, // set the page to get the ajax request
                posts_per_page: 4  //number of post to get (use 1 for testing)
              
            },
           
            success: function (data) {
            
            jQuery('#load_more_btn').html('Load More');
            if(data!=0){
                jQuery("#ajax").append(data);  // put the content into ajax container
                now=now+1; // add 1 to next page
            }else{
                jQuery("#load_more_btn").hide();
                jQuery("#content-load-more-btn").html("<h4>No more results</h4>");
            }
            },
            error: function (errorThrown) {
                alert(errorThrown); // only for debuggin
            }
        });
    });
</script>

<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
      
			<?php the_content() ?>
       
	<?php endwhile;
 
else :
	echo '<p>There are no pages!</p>';
endif;
?>

<div class="btContentWrap btClear">
    <div class="btContentHolder">
        <div class="btContent">
            <div class="bt_bb_wrapper">
                <!--<div class="bt_bb_fe_wrap">
                    <section id="bt_section5f4cdf756101b"
                        class="boldSection topSmallSpaced bottomSmallSpaced btDarkSkin btAccentColorBackground gutter light wBackground cover team-section-1"
                        style="background-image:url('http://oxeenit.tech/loestro/wp-content/uploads/2021/09/Fundraise-header-01-1.png');height: 600px; background-position: center; background-size: cover;margin-top:90px;">
                        <div class="port">
							
							<div class="row">
												
							
                            <div class="boldCell col-md-6">
                                <div class="boldCellInner">
                                    <div class="boldRow ">
                                        <div class="boldRowInner">
                                            <div class="rowItem col-md-12 col-ms-12  btTextCenter animate animate-fadein inherit"
                                                data-width="12">
                                                <div class="rowItemContent">
                                                    <div class="btClear btSeparator topSmallSpaced bottomSemiSpaced noBorder">
                                                        
                                                    </div>
                                                    <header class="header btClear extralarge" style="color:white;">
                                                        
                                                    </header>
                                                    <div
                                                        class="btClear btSeparator topSmallSpaced bottomSemiSpaced noBorder">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</div>
                    </section>
                    
                    
<!--                     <section id="bt_section5f4cdf756101b"
                        class="boldSection topSmallSpaced bottomSmallSpaced btDarkSkin btAccentColorBackground gutter light wBackground cover fund-header"
                        style="background-image:url('https://loestro.com/wp-content/uploads/2020/09/Fundraise-with-text-01.png');height: 600px; background-position: center; background-size: cover;margin-top:90px;">
                        <div class="port">
							
							<div class="row">
												
							
                            <div class="boldCell col-md-6">
                                <div class="boldCellInner">
                                    <div class="boldRow ">
                                        <div class="boldRowInner">
                                            <div class="rowItem col-md-12 col-ms-12  btTextCenter animate animate-fadein inherit"
                                                data-width="12">
                                                <div class="rowItemContent">
                                                    <div class="btClear btSeparator topSmallSpaced bottomSemiSpaced noBorder">
                                                        <hr>
                                                    </div>
                                                    <header class="header btClear extralarge" style="color:white;">
                                                      
                                                    </header>
                                                    <div class="btClear btSeparator topSmallSpaced bottomSemiSpaced noBorder">
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</div>
                    </section> 
                </div>  -->
<!--                 <div class="head-line">
				<h3>Our fund raising offerings help clients with their capital needs keeping in mind their unique business
                    requirements. Our wide range of experience help clients identify the best structure, source and optimize on
                    cost of capital. We also assist in thorough commercial due-diligence enabling investors take informed
                    decisions.</h3>
	</div>  -->
    
   
    
   <div class="mian-01">
<!-- 			<div class="para-01">
			
			
			<section>
				<div class="info">
					<div class="col-sm-12">
						<div class="col-sm-3">
							<div class="img-icon">
								<img src="http://oxeenit.tech/loestro/wp-content/uploads/2021/09/1-1.jpg" alt="#"/>
							</div>
						</div>
						<div class="col-sm-9">
							<h3>Plain & Structured debt:</h3>
							<p>There is an entire spectrum of investors and products
                                when it comes to debt. We help clients to find the right
                                product which is best suited to create value for them</p>
						</div>						
					</div>	
					
					<div class="col-sm-12">						
						<div class="col-sm-9">
							<h3>Equity:</h3>
							<p>We assist clients in creating a right equity raise plan and
                                help them find partners who can be part of their journey by
                                investing in them. We take care of the entire equity raise
                                process end to end</p>
						</div>
						<div class="col-sm-3">
							<div class="img-icon">
								<img src="http://oxeenit.tech/loestro/wp-content/uploads/2021/09/2-1.jpg" alt="#"/>
							</div>
						</div>						
					</div>
					
					<div class="col-sm-12">						
					
							<div class="col-sm-3">
							<div class="img-icon">
								<img src="http://oxeenit.tech/loestro/wp-content/uploads/2021/09/3-1.jpg" alt="#"/>
							</div>
						</div>
						<div class="col-sm-9">
							<h3>Asset monetization:</h3>
							<p>Debt or Equity are not the only way to raise capital for
                                growth. We help our clients to find the right capital source
                                including asset monetization</p>
						</div>
					
						
					</div>						
				</div>
			
			</section>
		</div> -->
<!-- 	<div class="paragraph">
            <h3>Learn how we’ve produced results and impacted the bottom line for our clients.</h3>
        </div>	 -->
    <div class="new_wrapper_card">
<?php

$cat_id = get_cat_ID('fund-raise'); //the categories name
$the_query=array(
  'cat' => $cat_id,
  'post_type' => 'experience',
  'post_status' => 'publish',
  'order' => 'ASC',
  'orderby' => 'date',
  'posts_per_page' => 4,
  'caller_get_posts'=> 1
);
$new = new WP_Query($the_query);

if ($new->have_posts()) {

        while ($new->have_posts()) {
            $new->the_post(); ?>
<!-- 				<div class="rowItem col-md-4 col-ms-12 btTextLeft btHighlight inherit case-column" data-width="4">
    <div class="rowItemContent">
        <div class="btClear btSeparator bottomSmallSpaced noBorder" style="padding: 10px;">
            <hr>
        </div> -->
		
		<!--- card html start-->
	<div class = "card_wrapper" style="background-image: url(<?php echo the_field('background-image'); ?>);">
		<a href = "#" class = "card-box-link">
			<div class = "card_box">
				<div class = "image_box">
					<ul class = "image_list">
						<li class = "images-show">
							<img src = "<?php echo the_field('image_1');?>" alt = "take a coffee"/>
						</li>
						<li class = "images-show">
							<img src = "<?php echo the_field('image_2');?>" alt = "take a coffee"/>
						</li>
						<li class = "images-show">
							<img src = "<?php echo the_field('image_3');?>" alt = "take a coffee"/>
						</li>
					</ul>
				</div>
				<h4 class = "date_wrapper"><?php echo the_field('date');?></h4>
				<div class = "card_content_wrapper">
					<?php $value = get_field('deal_value'); 
					 if(!empty($value)){
					?><h3> Deal Value: <?php echo $value;?></h3>
					 <?php } ?>
					<h4> Engagement Type : <?php  $category = get_the_category( $post->ID ); echo $category[0]->cat_name;?></h4>
					<h4> Industry : <?php echo the_field('industry');?></h4>
					<?php echo the_excerpt();?>
				</div>
			</div>
		</a>
	</div>

		
<!--- card html End -->	
		
        
   <?php }
}
?>
</div>
<div class="new_wrapper_card" id="ajax">
</div>
<div id="content-load-more-btn">
<button id="load_more_btn">Load More</button><!-- button out of ajax container for load content and button displayed at the bottom -->
</div>
</div>

</div>
</div>
</div>


<?php get_footer();?>