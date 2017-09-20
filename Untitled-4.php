<?php $options = get_option('wp-homemaker'.'_theme_options');?>	
<footer style="background:#000 url(<?php echo esc_url(homemaker_set($options, 'footer_image'));?>);">
	<div class="opacity">
	<?php if(!(homemaker_set($options, 'hide_upper_footer'))):?>	
		<div class="top-footer">
			<div class="container">
		   <?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
				<div class="row">
					 <?php dynamic_sidebar( 'footer-sidebar' ); ?>
				</div>
			<?php } ?>	
			</div> <!-- /.conatiner -->
		</div> <!-- /.top-footer -->
	<?php endif;?>	
<?php if(!(homemaker_set($options, 'hide_bottom_footer'))):?>					
		<div class="bottom-footer clear-fix">
			<div class="container">
				<p class="float-left"><?php echo wp_kses_post(homemaker_set($options, 'copy_right'));?></p>
		<?php if(homemaker_set($options, 'show_shocial_icons_footer')):?>
		<?php if($socials = homemaker_set(homemaker_set($options, 'social_media'), 'social_media')):?>
		<ul class="float-right">
				<?php foreach($socials as $key => $value):
		if(homemaker_set($value, 'tocopy')) continue;?>	
				<li><a href="<?php echo esc_url(homemaker_set($value, 'social_link'));?>" class="tran3s round-border icon"><i class="fa <?php echo esc_attr(homemaker_set($value, 'social_icon'));?>" aria-hidden="true"></i></a></li>
		<?php endforeach;?>				
				</ul>
	   <?php endif;?>
       <?php endif;?>			
			</div>
		</div> <!-- /.bottom-footer -->
    <?php endif;?>				
	</div> <!-- /.opacity -->
</footer>
<!-- Scroll Top Button -->
<button class="scroll-top tran3s p-color">
	<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
</button>
<!-- pre loader  -->

</div>
<?php wp_footer(); ?>

<script>
var $ = jQuery;
$('.home #project .esg-filters.esg-singlefilters').prepend('<h2>工程案例</h2>');
$('.home #showcase .esg-filters.esg-singlefilters').prepend('<h2>新品展示</h2>');

// Investor info

$('#a556 .clear-fix').html('<div class="inner-list-wrap"> <ul> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> </ul> </div> <div class="view-more-wrap clear-fix"> <a href="/relation/" class="view-more-btn tran3s request-quote p-color-bg">查看更多</a> </div>')

// Stock info

$('#a543 .clear-fix').html('<img src="http://pifm.eastmoney.com/EM_Finance2014PictureInterface/Index.aspx?id=3005992&imageType=r&token=44c9d251add88e27b65ed86506f6e5da" class="img-responsive stock">')


// Stock structure

$('#a537 .clear-fix').html('<div class="stock-structure-outer"> <img src="/wp-content/uploads/2017/08/C2A00C2CD3F86656EF05CD6FB85DEDD8.jpg"> </div>')

// shareholder interation

$('#a536 .clear-fix').html('<form action="/4-2/#wpcf7-f1036-p666-o1" method="post" class="wpcf7-form" novalidate="novalidate"> <div style="display: none;"> <input type="hidden" name="_wpcf7" value="1036"> <input type="hidden" name="_wpcf7_version" value="4.8"> <input type="hidden" name="_wpcf7_locale" value="zh_CN"> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1036-p666-o1"> <input type="hidden" name="_wpcf7_container_post" value="666"> <input type="hidden" name="_wpcf7_nonce" value="cb9e25902f"> </div> <div class="xiongsu-row clearfix"> <div class="xiongsu-half left"> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="姓名"></span> </div> <div class="xiongsu-half"> <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="电话"></span> </div> </div> <div class="xiongsu-row clearfix"> <div class="xiongsu-half left"> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="邮箱"></span> </div> <div class="xiongsu-half"> <span class="wpcf7-form-control-wrap your-fax"><input type="text" name="your-fax" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="传真"></span> </div> </div> <div class="xiongsu-row clearfix"> <span class="wpcf7-form-control-wrap your-address"><input type="text" name="your-address" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="地址"></span> </div> <div class="xiongsu-row clearfix"> <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="留言内容"></textarea></span> </div> <p><input type="submit" value="提交" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p> <style type="text/css"> @media (min-width: 800px) { .xiongsu-half { display: block; width: 48%; float: left; }</p> <p> .xiongsu-row .xiongsu-half.left { margin-right: 4%!important; }</p> <p> span.wpcf7-form-control-wrap { width: 100%; position: relative!important; display: inline-block; margin-bottom: 3px; } } </style> <div class="wpcf7-response-output wpcf7-display-none"></div></form>')

$('.ficon.fa.fa-bar-chart-o').addClass('fa-line-chart')
$('.ficon.flaticon-wall').removeClass('flaticon-wall').addClass('fa fa-sitemap')
$('.ficon.flaticon-pipe').removeClass('flaticon-pipe').addClass('fa fa-envelope-o')



$('a.control-item').eq(0).click()

// Stock structure



$('.relationship-inner-area .content-wrap .content-detail').eq(1).html('');

$('.relationship-inner-area .content-wrap').eq(1).append('<div class="inner-list-wrap"> <ul> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> </ul> </div> <div class="view-more-wrap clear-fix"> <a href="http://ww.baidu.com" class="view-more-btn tran3s request-quote p-color-bg">查看更多</a> </div><div id="page1"></div>')


$('.relationship-inner-area .content-wrap[data-toggle="investor-reception"] .content-detail').html('');

$('.relationship-inner-area .content-wrap[data-toggle="investor-reception"]').append('<div class="inner-list-wrap"> <ul> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> </ul> </div> <div class="view-more-wrap clear-fix"> <a href="http://ww.baidu.com" class="view-more-btn tran3s request-quote p-color-bg">查看更多</a> </div><div id="page2"></div>')

$('.relationship-inner-area .content-wrap[data-toggle="fair-around-you"] .content-detail').html('');

$('.relationship-inner-area .content-wrap[data-toggle="fair-around-you"]').append('<div class="inner-list-wrap"> <ul> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> </ul> </div> <div class="view-more-wrap clear-fix"> <a href="http://ww.baidu.com" class="view-more-btn tran3s request-quote p-color-bg">查看更多</a> </div><div id="page3"></div>')

$('.relationship-inner-area .content-wrap[data-toggle="investor-protection"] .content-detail').html('');

$('.relationship-inner-area .content-wrap[data-toggle="investor-protection"]').append('<div class="inner-list-wrap"> <ul> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> </ul> </div> <div class="view-more-wrap clear-fix"> <a href="http://ww.baidu.com" class="view-more-btn tran3s request-quote p-color-bg">查看更多</a> </div><div id="page4"></div>')

$('.relationship-inner-area .content-wrap[data-toggle="company-management"] .content-detail').html('');

$('.relationship-inner-area .content-wrap[data-toggle="company-management"]').append('<div class="inner-list-wrap"> <ul> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li> </ul> </div> <div class="view-more-wrap clear-fix"> <a href="http://ww.baidu.com" class="view-more-btn tran3s request-quote p-color-bg">查看更多</a> </div><div id="page5"></div>')


$('.nav.nav-tabs.tabs-left.float-left li a').eq(0).click()
$('#project a.eg-washington-element-1').attr('href','/project-case/')

$('.cool_timeline .timeline-main-title').text('发展历程')


var info_reveal_total;
var investor_reception_total;

if ($('body').hasClass('page-id-9') == true || $('body').hasClass('page-id-1062') == true){
window.setTimeout(function(){
    // Info Reveal
    var $ = jQuery
    $('.relationship-inner-area .view-more-wrap').remove()
    $.ajax({
    url: "/wp-json/wp/v2/info_reveal?per_page=10&page=1",
    success: function(data, textStatus, request){
        console.log(request.getResponseHeader('X-WP-Total'))
        info_reveal_total = request.getResponseHeader('X-WP-Total')

        var info_page = new PagerView('page1')
        info_page.index = 1;
        info_page.size = 10;
        info_page.maxButtons = 3;
        info_page.itemCount = info_reveal_total;
        info_page.onclick = function(newIndex) {
            $.ajax({
                url: "/wp-json/wp/v2/info_reveal?per_page=10&page="+newIndex,
                success: function(data, textStatus, request){
                    if(data.length == 0) {
                        $('.relationship-inner-area .inner-list-wrap').eq(0).find('ul').html('<li><h5 class="article-title">No Data</h5></li>')
                    } else {
                        // Return only five entries on home page
                        var content = '';
                        $('.relationship-inner-area .inner-list-wrap').eq(0).find('ul').html('')
                        for (var i = 0; i < data.length; i++) {
                            var tpl = $('<li> <a href="#" target="_blank" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>')
                            // <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>
                            var currentPost = data[i];
                            tpl.find('a').attr('href',currentPost.acf.file).find('.article-title').text(currentPost.title.rendered)
                            tpl.find('.data-wrap').text(currentPost.date.slice(0,10))
                            $('.relationship-inner-area .inner-list-wrap').eq(0).find('ul').append(tpl)
                            // content =+ '<li> <a href="' + currentPost.acf.file + '" class="article-list-item clear-fix"> <h5 class="article-title">' + currentPost.title.rendered + '</h5> <div class="data-wrap">[' + currentPost.date + ']</div> </a> </li>'
                        }
                    }
                }
            })
        }
        info_page.render()


        if(data.length == 0) {
            $('.relationship-inner-area .inner-list-wrap').eq(0).find('ul').html('<li><h5 class="article-title">No Data</h5></li>')
        } else {
            // Return only five entries on home page
            var content = '';
            $('.relationship-inner-area .inner-list-wrap').eq(0).find('ul').html('')
            for (var i = 0; i < data.length; i++) {
                var tpl = $('<li> <a href="#" target="_blank" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>')
                // <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>
                var currentPost = data[i];
                tpl.find('a').attr('href',currentPost.acf.file).find('.article-title').text(currentPost.title.rendered)
                tpl.find('.data-wrap').text(currentPost.date.slice(0,10))
                $('.relationship-inner-area .inner-list-wrap').eq(0).find('ul').append(tpl)
                // content =+ '<li> <a href="' + currentPost.acf.file + '" class="article-list-item clear-fix"> <h5 class="article-title">' + currentPost.title.rendered + '</h5> <div class="data-wrap">[' + currentPost.date + ']</div> </a> </li>'
            }
            // inject content
            //$('#a556 .inner-list-wrap ul').html(content)
        }
    }
    });
},0)

}

if ($('body').hasClass('page-id-9') == true || $('body').hasClass('page-id-1062') == true){
window.setTimeout(function(){
    // Info Reveal
    var $ = jQuery
    $('.relationship-inner-area .view-more-wrap').remove()
    $.ajax({
    url: "/wp-json/wp/v2/investor_reception?per_page=10&page=1",
    success: function(data, textStatus, request){
        console.log(data)
        investor_reception_total = request.getResponseHeader('X-WP-Total')

        var investor_page = new PagerView('page2')
        investor_page.index = 1;
        investor_page.size = 10;
        investor_page.maxButtons = 3;
        investor_page.itemCount = investor_reception_total;
        investor_page.onclick = function(newIndex) {
            $.ajax({
                url: "/wp-json/wp/v2/investor_reception?per_page=10&page="+newIndex,
                success: function(data, textStatus, request){
                    if(data.length == 0) {
                        $('.relationship-inner-area .content-wrap[data-toggle="investor-reception"]').find('.inner-list-wrap ul').html('<li><h5 class="article-title">No Data</h5></li>')
                    } else {
                        // Return only five entries on home page
                        var content = '';
                        $('.relationship-inner-area .content-wrap[data-toggle="investor-reception"]').find('.inner-list-wrap ul').html('')
                        for (var i = 0; i < data.length; i++) {
                            var tpl = $('<li> <a href="#" target="_blank" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>')
                            // <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>
                            var currentPost = data[i];
                            tpl.find('a').attr('href',currentPost.acf.file).find('.article-title').text(currentPost.title.rendered)
                            tpl.find('.data-wrap').text(currentPost.date.slice(0,10))
                            $('.relationship-inner-area .content-wrap[data-toggle="investor-reception"]').find('.inner-list-wrap ul').append(tpl)
                            // content =+ '<li> <a href="' + currentPost.acf.file + '" class="article-list-item clear-fix"> <h5 class="article-title">' + currentPost.title.rendered + '</h5> <div class="data-wrap">[' + currentPost.date + ']</div> </a> </li>'
                        }
                        // inject content
                        //$('#a556 .inner-list-wrap ul').html(content)
                    }
                }
            })
        }
        investor_page.render()

        if(data.length == 0) {
            $('.relationship-inner-area .content-wrap[data-toggle="investor-reception"]').find('.inner-list-wrap ul').html('<li><h5 class="article-title">No Data</h5></li>')
        } else {
            // Return only five entries on home page
            var content = '';
            $('.relationship-inner-area .content-wrap[data-toggle="investor-reception"]').find('.inner-list-wrap ul').html('')
            for (var i = 0; i < data.length; i++) {
                var tpl = $('<li> <a href="#" target="_blank" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>')
                // <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>
                var currentPost = data[i];
                tpl.find('a').attr('href',currentPost.acf.file).find('.article-title').text(currentPost.title.rendered)
                tpl.find('.data-wrap').text(currentPost.date.slice(0,10))
                $('.relationship-inner-area .content-wrap[data-toggle="investor-reception"]').find('.inner-list-wrap ul').append(tpl)
                // content =+ '<li> <a href="' + currentPost.acf.file + '" class="article-list-item clear-fix"> <h5 class="article-title">' + currentPost.title.rendered + '</h5> <div class="data-wrap">[' + currentPost.date + ']</div> </a> </li>'
            }
            // inject content
            //$('#a556 .inner-list-wrap ul').html(content)
        }
    }
    });
},0)

// 公平在身边
window.setTimeout(function(){
    // Info Reveal
    var $ = jQuery
    $('.relationship-inner-area .view-more-wrap').remove()
    $.ajax({
    url: "/wp-json/wp/v2/fair?per_page=10&page=1", // change this
    success: function(data, textStatus, request){
        console.log(data)
        investor_reception_total = request.getResponseHeader('X-WP-Total')

        var investor_page = new PagerView('page3') // change this
        investor_page.index = 1;
        investor_page.size = 10;
        investor_page.maxButtons = 3;
        investor_page.itemCount = investor_reception_total;
        investor_page.onclick = function(newIndex) {
            $.ajax({
                url: "/wp-json/wp/v2/fair?per_page=10&page="+newIndex,
                success: function(data, textStatus, request){
                    if(data.length == 0) {
                        $('.relationship-inner-area .content-wrap[data-toggle="fair-around-you"]').find('.inner-list-wrap ul').html('<li><h5 class="article-title">No Data</h5></li>')
                    } else {
                        // Return only five entries on home page
                        var content = '';
                        $('.relationship-inner-area .content-wrap[data-toggle="fair-around-you"]').find('.inner-list-wrap ul').html('')
                        for (var i = 0; i < data.length; i++) {
                            var tpl = $('<li> <a href="#" target="_blank" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>')
                            // <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>
                            var currentPost = data[i];
                            tpl.find('a').attr('href',currentPost.acf.file).find('.article-title').text(currentPost.title.rendered)
                            tpl.find('.data-wrap').text(currentPost.date.slice(0,10))
                            $('.relationship-inner-area .content-wrap[data-toggle="fair-around-you"]').find('.inner-list-wrap ul').append(tpl)
                            // content =+ '<li> <a href="' + currentPost.acf.file + '" class="article-list-item clear-fix"> <h5 class="article-title">' + currentPost.title.rendered + '</h5> <div class="data-wrap">[' + currentPost.date + ']</div> </a> </li>'
                        }
                        // inject content
                        //$('#a556 .inner-list-wrap ul').html(content)
                    }
                }
            })
        }
        investor_page.render()

        if(data.length == 0) {
            $('.relationship-inner-area .content-wrap[data-toggle="fair-around-you"]').find('.inner-list-wrap ul').html('<li><h5 class="article-title">No Data</h5></li>')
        } else {
            // Return only five entries on home page
            var content = '';
            $('.relationship-inner-area .content-wrap[data-toggle="fair-around-you"]').find('.inner-list-wrap ul').html('')
            for (var i = 0; i < data.length; i++) {
                var tpl = $('<li> <a href="#" target="_blank" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>')
                // <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>
                var currentPost = data[i];
                tpl.find('a').attr('href',currentPost.acf.file).find('.article-title').text(currentPost.title.rendered)
                tpl.find('.data-wrap').text(currentPost.date.slice(0,10))
                $('.relationship-inner-area .content-wrap[data-toggle="fair-around-you"]').find('.inner-list-wrap ul').append(tpl)
                // content =+ '<li> <a href="' + currentPost.acf.file + '" class="article-list-item clear-fix"> <h5 class="article-title">' + currentPost.title.rendered + '</h5> <div class="data-wrap">[' + currentPost.date + ']</div> </a> </li>'
            }
            // inject content
            //$('#a556 .inner-list-wrap ul').html(content)
        }
    }
    });
},0)


// 投资者保护
window.setTimeout(function(){
    // Info Reveal
    var $ = jQuery
    $('.relationship-inner-area .view-more-wrap').remove()
    $.ajax({
    url: "/wp-json/wp/v2/protection?per_page=10&page=1", // change this
    success: function(data, textStatus, request){
        console.log(data)
        investor_reception_total = request.getResponseHeader('X-WP-Total')

        var investor_page = new PagerView('page4') // change this
        investor_page.index = 1;
        investor_page.size = 10;
        investor_page.maxButtons = 3;
        investor_page.itemCount = investor_reception_total;
        investor_page.onclick = function(newIndex) {
            $.ajax({
                url: "/wp-json/wp/v2/protection?per_page=10&page="+newIndex,
                success: function(data, textStatus, request){
                    if(data.length == 0) {
                        $('.relationship-inner-area .content-wrap[data-toggle="investor-protection"]').find('.inner-list-wrap ul').html('<li><h5 class="article-title">No Data</h5></li>')
                    } else {
                        // Return only five entries on home page
                        var content = '';
                        $('.relationship-inner-area .content-wrap[data-toggle="investor-protection"]').find('.inner-list-wrap ul').html('')
                        for (var i = 0; i < data.length; i++) {
                            var tpl = $('<li> <a href="#" target="_blank" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>')
                            // <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>
                            var currentPost = data[i];
                            tpl.find('a').attr('href',currentPost.acf.file).find('.article-title').text(currentPost.title.rendered)
                            tpl.find('.data-wrap').text(currentPost.date.slice(0,10))
                            $('.relationship-inner-area .content-wrap[data-toggle="investor-protection"]').find('.inner-list-wrap ul').append(tpl)
                            // content =+ '<li> <a href="' + currentPost.acf.file + '" class="article-list-item clear-fix"> <h5 class="article-title">' + currentPost.title.rendered + '</h5> <div class="data-wrap">[' + currentPost.date + ']</div> </a> </li>'
                        }
                        // inject content
                        //$('#a556 .inner-list-wrap ul').html(content)
                    }
                }
            })
        }
        investor_page.render()

        if(data.length == 0) {
            $('.relationship-inner-area .content-wrap[data-toggle="investor-protection"]').find('.inner-list-wrap ul').html('<li><h5 class="article-title">No Data</h5></li>')
        } else {
            // Return only five entries on home page
            var content = '';
            $('.relationship-inner-area .content-wrap[data-toggle="investor-protection"]').find('.inner-list-wrap ul').html('')
            for (var i = 0; i < data.length; i++) {
                var tpl = $('<li> <a href="#" target="_blank" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>')
                // <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>
                var currentPost = data[i];
                tpl.find('a').attr('href',currentPost.acf.file).find('.article-title').text(currentPost.title.rendered)
                tpl.find('.data-wrap').text(currentPost.date.slice(0,10))
                $('.relationship-inner-area .content-wrap[data-toggle="investor-protection"]').find('.inner-list-wrap ul').append(tpl)
                // content =+ '<li> <a href="' + currentPost.acf.file + '" class="article-list-item clear-fix"> <h5 class="article-title">' + currentPost.title.rendered + '</h5> <div class="data-wrap">[' + currentPost.date + ']</div> </a> </li>'
            }
            // inject content
            //$('#a556 .inner-list-wrap ul').html(content)
        }
    }
    });
},0)


// 公司治理
window.setTimeout(function(){
    // Info Reveal
    var $ = jQuery
    $('.relationship-inner-area .view-more-wrap').remove()
    $.ajax({
    url: "/wp-json/wp/v2/cure?per_page=10&page=1", // change this
    success: function(data, textStatus, request){
        console.log(data)
        investor_reception_total = request.getResponseHeader('X-WP-Total')

        var investor_page = new PagerView('page5') // change this
        investor_page.index = 1;
        investor_page.size = 10;
        investor_page.maxButtons = 3;
        investor_page.itemCount = investor_reception_total;
        investor_page.onclick = function(newIndex) {
            $.ajax({
                url: "/wp-json/wp/v2/cure?per_page=10&page="+newIndex,
                success: function(data, textStatus, request){
                    if(data.length == 0) {
                        $('.relationship-inner-area .content-wrap[data-toggle="company-management"]').find('.inner-list-wrap ul').html('<li><h5 class="article-title">No Data</h5></li>')
                    } else {
                        // Return only five entries on home page
                        var content = '';
                        $('.relationship-inner-area .content-wrap[data-toggle="company-management"]').find('.inner-list-wrap ul').html('')
                        for (var i = 0; i < data.length; i++) {
                            var tpl = $('<li> <a href="#" target="_blank" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>')
                            // <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>
                            var currentPost = data[i];
                            tpl.find('a').attr('href',currentPost.acf.file).find('.article-title').text(currentPost.title.rendered)
                            tpl.find('.data-wrap').text(currentPost.date.slice(0,10))
                            $('.relationship-inner-area .content-wrap[data-toggle="company-management"]').find('.inner-list-wrap ul').append(tpl)
                            // content =+ '<li> <a href="' + currentPost.acf.file + '" class="article-list-item clear-fix"> <h5 class="article-title">' + currentPost.title.rendered + '</h5> <div class="data-wrap">[' + currentPost.date + ']</div> </a> </li>'
                        }
                        // inject content
                        //$('#a556 .inner-list-wrap ul').html(content)
                    }
                }
            })
        }
        investor_page.render()

        if(data.length == 0) {
            $('.relationship-inner-area .content-wrap[data-toggle="company-management"]').find('.inner-list-wrap ul').html('<li><h5 class="article-title">No Data</h5></li>')
        } else {
            // Return only five entries on home page
            var content = '';
            $('.relationship-inner-area .content-wrap[data-toggle="company-management"]').find('.inner-list-wrap ul').html('')
            for (var i = 0; i < data.length; i++) {
                var tpl = $('<li> <a href="#" target="_blank" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>')
                // <li> <a href="#" class="article-list-item clear-fix"> <h5 class="article-title">关于为全资子公司上海公元建材发展有限公司提供最高额连带责任保证担保的公告</h5> <div class="data-wrap">[2017/07/13]</div> </a> </li>
                var currentPost = data[i];
                tpl.find('a').attr('href',currentPost.acf.file).find('.article-title').text(currentPost.title.rendered)
                tpl.find('.data-wrap').text(currentPost.date.slice(0,10))
                $('.relationship-inner-area .content-wrap[data-toggle="company-management"]').find('.inner-list-wrap ul').append(tpl)
                // content =+ '<li> <a href="' + currentPost.acf.file + '" class="article-list-item clear-fix"> <h5 class="article-title">' + currentPost.title.rendered + '</h5> <div class="data-wrap">[' + currentPost.date + ']</div> </a> </li>'
            }
            // inject content
            //$('#a556 .inner-list-wrap ul').html(content)
        }
    }
    });
},0)



} // end if



$(document).ready(function(){



window.setTimeout(function(){
$('.vc_grid-item-mini').each(function(index,ele){
	var link= $(ele).find('.vc_gitem-link').attr('href');
	(function(newlink){
		$(ele).find('.vc_gitem-zone .vc_custom_heading h4').on('click',function(){
			window.location=newlink;
		})
	})(link)
})
},1000)

})



</script>

<style>
.PagerView {
    color: #333;
    text-align: center;
    margin: 8px;
}

.PagerView {
    color: #333;
    text-align: center;
    margin: 8px;
}

.PagerView span {
    color: #999;
    margin: 0 1px;
    padding: 3px 6px;
    border: 1px solid #ccc;
}

.PagerView span.on {
    color: #fff;
    font-weight: bold;
    border: 1px solid #333;
    background: #3c526a;
}

.PagerView a {
    color: #00f;
    text-decoration: none;
}

.PagerView a span {
    border: 1px solid #999;
    color: #333;
}

.PagerView a:hover span {
    color: #fff;
    background: #4b7698;
}

.language-choose .wrap {
    max-width: 1170px;
    margin: 0 auto;
}

.language-choose {
    display: block;
    background-color: black;
    text-align: right;
}

.language-choose .wrap a:hover {
    color: #f2ab07;
}
</style>
</body>
</html>