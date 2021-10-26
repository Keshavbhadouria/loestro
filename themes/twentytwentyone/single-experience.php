<?php get_header()?>

<style>
.col-md-4.card {
	height: fit-content;
	padding: 30px;
    box-shadow: 0 3px 19px rgb(0 0 0 / 73%), 0 -6px 40px 0 #1a1818;
    border-radius: 0 !important;
    color: #fff;
	    background: #262626;
}
.card div#icon-bar {
    display: none;
}
div#icon-bar {
    position: fixed;
    top: 50%;
    left: 25px;
}
.col-md-6.pdf-section h6 {
    display: inline-block;
    padding: 0 10px;
}
div#icon-bar a {
    display: block;
    padding: 5px 0;
    color: #646564;
    font-size: 22px;
	transition: all .25s ease-in-out;
}
div#icon-bar a:hover {
    color: #fff;
}

.col-md-5.no-padd {
    background: #fff;
	margin-top: -125px;
}
.content {
    padding: 50px 0;
}
.col-md-7.col-md-offset-1.nri-blog {
    color: #fff;
    padding: 40px 40px;
}
section#transaction-inside {
    background: #262626;
}
button.sim-button.button-black {
    border: none;
    background: #3e3e3e;
    color: #f5f5f5;
    padding: 10px 20px;
    border-radius: 35px;
    margin: 0 5px;
    min-width: 140px;
}
.col-md-8.button-section {
    float: right;
    margin: 15px;
    margin-right: -90px;
}
.col-md-8.button-section a:hover {
    color: transparent;
}
.col-md-6.pdf-section > a:hover {
    color: transparent;
}
.col-md-7.col-md-offset-1.nri-blog p > a {
    color: red;
    padding: 0 8px;
}
.scf-box-text h1 {
    font-size: 28px !important;
    color: #333;
    margin: 20px 0px;
    line-height: 1.2;
    font-weight: 400;
}
.transaction-inside .col-md-12 {
    min-height: 0 !important;
}
</style>
<div class="single-blogs">

	<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
	<div class="single-newpost">
		
	
<section class = "transaction-action-banner" style="background-image: url(<?php echo the_field('background-image'); ?>); background-repeat: no-repeat;background-size: cover;height: 525px;position: relative; width: 100%;">

</section>
<section id="transaction-inside" class="transaction-inside">

        <div class="container-fluid transaction-inside-bann" style="background-image: url('https://www.avendus.com/crypted_storage_img/img_6114e0ae29954_eruditus-deal-banner.jpg')">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
        </div>

        <div class="bann-box-div">
            <div class="container ">
                <div class="row">
                    <div class="col-md-5 no-padd">
                        <div class="scf-box-text">
                            <img src="<?php echo the_field('image_1');?>" class="img-responsive">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="icon-bar wow fadeIn hidden-xs hidden-sm" data-wow-delay="1s" data-wow-duration="2s" id="icon-bar" style="visibility: visible; animation-duration: 2s; animation-delay: 1s; animation-name: fadeIn;">
            <a class="share">
                <img src="https://www.avendus.com/dist/img/newsroom-inside/share.png" alt="">
            </a>
            <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;" class="facebook">
                
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="http://twitter.com/share?text=Avendus+Capital+advises+Eruditus+on+its+Series+E+fund+raise+of+USD+650+million+led+by+Accel+%26+SoftBank+Vision+Fund+2.&amp;url=https%3A%2F%2Fwww.avendus.com%2Findia%2Ftransaction%2Favendus-capital-advises-eruditus-on-its-series-e-fund-raise-of-usd-650-million-led-by-accel-and-softbank-vision-fund-2" class="twitter" target="_blank">
            <!-- <img src="https://www.avendus.com/dist/img/newsroom-inside/twitter.png" alt=""> -->
                <i class="fab fa-twitter"></i>
            </a>
            
            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.avendus.com/india/transaction/avendus-capital-advises-eruditus-on-its-series-e-fund-raise-of-usd-650-million-led-by-accel-and-softbank-vision-fund-2&amp;title=Avendus+Capital+advises+Eruditus+on+its+Series+E+fund+raise+of+USD+650+million+led+by+Accel+%26+SoftBank+Vision+Fund+2" class="linkedin" target="_blank">
            <!-- <img src="https://www.avendus.com/dist/img/newsroom-inside/linkedin.png" alt=""> -->
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 card">
                        <div class="red-left">
                            <h5>Service</h5>
                            <p><?php echo the_field('service');?></p>
                        </div>
                            <h5>Sector</h5>
                            <p><?php echo the_field('sector');?></p>
                                                <h5>Date </h5>
                        <p><?php echo the_field('date');?></p>
                        <h5>Deal Value </h5>
                        <p><?php echo the_field('deal_value');?> </p>
                    <!-- <h5>Media Enquiries </h5>
                        <p>Sunita Pendse 

+91 77009 22394</p> -->
                        <div class="col-md-6 pdf-section">
                                                            <a href="https://www.avendus.com/crypted_pdf_path/img_61151a36e4edc_avendus-eruditus-deal-release-v6-final.pdf" target="_blank">
                                    <img src="https://www.avendus.com/dist/img/transaction-inside/download-white.png" class="img-responsive">
                                    <!-- <span class="download"></span> -->
                                </a>
                                <h6>pdf</h6>
                            

                        </div>
                        <div class="icon-bar wow fadeIn visible-xs visible-sm animated" data-wow-delay="1s" data-wow-duration="2s" id="icon-bar" style="visibility: visible; animation-duration: 2s; animation-delay: 1s; animation-name: fadeIn;">
                            <a class="share">
                                <img src="https://www.avendus.com/dist/img/newsroom-inside/share.png" alt="">
                            </a>
                            <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;" class="facebook">
                                
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="http://twitter.com/share?text=Avendus Capital advises Eruditus on its Series E fund raise of USD 650 million led by Accel &amp; SoftBank Vision Fund 2.&amp;url=https%3A%2F%2Fwww.avendus.com%2Findia%2Ftransaction%2Favendus-capital-advises-eruditus-on-its-series-e-fund-raise-of-usd-650-million-led-by-accel-and-softbank-vision-fund-2" class="twitter" target="_blank">
                            <!-- <img src="https://www.avendus.com/dist/img/newsroom-inside/twitter.png" alt=""> -->
                                <i class="fab fa-twitter"></i>
                            </a>
                            
                            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.avendus.com/india/transaction/avendus-capital-advises-eruditus-on-its-series-e-fund-raise-of-usd-650-million-led-by-accel-and-softbank-vision-fund-2&amp;title=Avendus Capital advises Eruditus on its Series E fund raise of USD 650 million led by Accel &amp; SoftBank Vision Fund 2" class="linkedin" target="_blank">
                            <!-- <img src="https://www.avendus.com/dist/img/newsroom-inside/linkedin.png" alt=""> -->
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-1 nri-blog">
                    <p><?php the_content();?></p>
                    <!-- <div class="col-md-6 pdf-section">
                            <a href="#"><img src="https://www.avendus.com/dist/img/newsroom-inside/report-dwnld.png" class="img-responsive"></a>
                            <h6>pdf</h6>
                        </div> -->
                        <div class="col-md-8 button-section">
                                                            <a href="https://www.avendus.com/india/transaction/avendus-capital-advises-verse-innovation-on-its-usd-450-million-raise-led-by-siguler-guff-baillie-gifford-and-carlyle-asia-partners-taking-the-total-raise-to-usd-650-million-in-2021">
                                    <button class="sim-button button-black"><span>PREVIOUS</span></button>
                                </a>
                                                                                        <a href="https://www.avendus.com/india/transaction/avendus-capital-advises-prosus-as-it-inks-an-agreement-to-acquire-billdesk-for-usd-4-7-billion">
                                    <button class="sim-button button-black"><span>NEXT</span></button>
                                </a>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>


        <!--<div class="transaction-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="tran-heading">Other Transactions</h2>
                    </div>
                </div>
                <div class="row tran-blog-row">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                            <a href="https://www.avendus.com/india/transaction/avendus-capital-advises-prosus-as-it-inks-an-agreement-to-acquire-billdesk-for-usd-4-7-billion">
                                <div class="transtn-block-bg" style="background-image: url('https://www.avendus.com/crypted_storage_img/img_612e218b80fff_thumbnail.jpg');">
                                    <img src="https://www.avendus.com/crypted_storage_img/img_612e218b813f4_outside-logo.jpg" alt="" class="img-responsive tran-client-img">
                                    <h6>August 2021</h6>
                                    <p class="tran-value">Value : USD 4.7 billion</p>
                                    <p class="tran-desc">Avendus Capital acts as joint advisor to Prosus as it inks an agreement to acquire BillDesk for USD 4.7 billion</p>
                                    <img src="https://www.avendus.com/dist/img/eye-inside/rm-block-arrow.png" alt="" class="img-responsive tran-arr-img">
                                </div>
                            </a>
                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                            <a href="https://www.avendus.com/india/transaction/avendus-capital-advises-verse-innovation-on-its-usd-450-million-raise-led-by-siguler-guff-baillie-gifford-and-carlyle-asia-partners-taking-the-total-raise-to-usd-650-million-in-2021">
                                <div class="transtn-block-bg" style="background-image: url('https://www.avendus.com/crypted_storage_img/img_6114ced523a7c_thumbnail-5.jpg');">
                                    <img src="https://www.avendus.com/crypted_storage_img/img_6114d8e2da81f_outside-logo-7.jpg" alt="" class="img-responsive tran-client-img">
                                    <h6>August 2021</h6>
                                    <p class="tran-value">Value : USD 450 million+</p>
                                    <p class="tran-desc">Avendus Capital advises VerSe innovation on its USD 450 million+ raise led by Siguler Guff, Baillie Gifford and Carlyle Asia Partners, taking the total raise to USD 650 million+ in 2021</p>
                                    <img src="https://www.avendus.com/dist/img/eye-inside/rm-block-arrow.png" alt="" class="img-responsive tran-arr-img">
                                </div>
                            </a>
                        </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                            <a href="https://www.avendus.com/india/transaction/avendus-advises-sapphire-foods-and-its-shareholders-on-its-inr-1-150-crore-investment-round-from-creador-newquest-capital-and-tr-capital">
                                <div class="transtn-block-bg" style="background-image: url('https://www.avendus.com/crypted_storage_img/img_61110546195ef_thumbnail-4.jpg');">
                                    <img src="https://www.avendus.com/crypted_storage_img/img_6111054619aa4_outside-logo-5.jpg" alt="" class="img-responsive tran-client-img">
                                    <h6>August 2021</h6>
                                    <p class="tran-value">Value : INR 1,150 crore</p>
                                    <p class="tran-desc">Avendus advises Sapphire Foods and its shareholders on its INR 1,150 crore investment round from Creador, NewQuest Capital and TR Capital</p>
                                    <img src="https://www.avendus.com/dist/img/eye-inside/rm-block-arrow.png" alt="" class="img-responsive tran-arr-img">
                                </div>
                            </a>
                        </div>
                    
                </div>
                <div class="row">
                    <div class="button-section">
                        <a href="https://www.avendus.com/india/transaction">
                            <button class="sim-button button-black"><span>View all</span></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>-->
	
	

    </section>
		</div>
	<?php endwhile;
 
else :
	echo '<p>something missing!</p>';
endif;
?>
</div>
<?php get_footer();?>