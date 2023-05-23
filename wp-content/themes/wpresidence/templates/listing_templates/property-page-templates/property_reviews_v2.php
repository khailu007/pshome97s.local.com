<style type="text/css">
	.card {
		position: relative;
		display: flex;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 1px solid rgba(0,0,0,.125);
		border-radius: .25rem;
	}
	.card.bg-light, .card.bg-white 
	{
		background-color: #fff !important;
		border: 0.1rem solid #ebebeb;
	}
	.card-header {
		position: relative;
		padding: 0;
		border: none;
		font-weight: 700;
		line-height: 1.5;
		background-color: transparent;
		margin: 0;
	}
	.card-header:first-child {
		border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
	}
	.card-body {
		padding: 0.4rem 4rem 0.4rem 1.5rem;
		border: none;
		border-radius: 0;
		flex: 1 1 auto;
	}
	.mb-15 {
		margin-bottom: 15px !important;
	}
	.mr-10 {
		margin-right: 10px !important;
	}
	.text-dark {
		color: #333 !important;
	}
	.rounded {
		border-radius: .25rem !important;
	}
	.mb-3 {
		margin-bottom: 1rem !important;
	}
	.shadow-sm {
		box-shadow: 0 .125rem .25rem rgba(0,0,0,.075) !important;
	}
	.pl-15 {
		padding-left: 15px !important;
	}
	.pb-15 {
		padding-bottom: 15px !important;
	}
	.pt-15 {
		padding-top: 15px !important;
	}
	.fw-bold {
		font-weight: 700 !important;
	}
	.small-rating {
		font-size: 13px;
		font-weight: 400;
		display: inline-block;
		line-height: 16px;
	}
	.row-float-right {
		float: right;
	}
	.row-float-left {
		float: left;
	}
	.small-rating i {
		color: #e3c01c;
		margin-right: 4px;
	}
	.we-wpcf7-note {
		color: #cf2e2e;
	}	
</style>
<?php
    global $post;
    $slug = str_replace(home_url(),'',get_permalink());
    $reviewTitle = 'Lượt đánh giá';
    $reviewLabel = 'Lượt';
    switch ($we_lang) {
    	case 'en':
    		$reviewTitle = 'Reviews';
    		$reviewLabel = 'Turns';
    		break;
    	
    	default:
    		break;
    }

    $contactFormVi = 
    '
		<form action="'.$slug.'#wpcf7-21059-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
		<div style="display: none;">
			<input type="hidden" name="_wpcf7" value="21059">
			<input type="hidden" name="_wpcf7_version" value="5.7.6">
			<input type="hidden" name="_wpcf7_locale" value="en_US">
			<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f21059-o2">
			<input type="hidden" name="_wpcf7_container_post" value="0">
			<input type="hidden" name="_wpcf7_posted_data_hash" value="">
		</div>
		<div class="row pb-15">
			<div class="col-md-12">
				<div target_pos="star_rating-527" max_size="5" class="star_rating_class" cancel-btn="1" style="cursor: pointer;">
					<input name="score" type="hidden">
				</div>
				<span class="wpcf7-form-control-wrap star_rating-527">
					<input type="hidden" name="star_rating-527" class="custom_radio_class star_rating-527" value="">
				</span>
			</div>
			<br>
		</div>
		<div class="row">
			<div class="col-md-4">
				<p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contact_form_name_21059" autocomplete="name" aria-required="true" aria-invalid="false" placeholder="Họ và tên" value="" type="text" name="your-name"></span>
				</p>
			</div>
			<div class="col-md-4">
				<p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="contact_form_email_21059" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="your-email"></span>
				</p>
                <p>
                	<span class="we-wpcf7-note">Email Example: text@domain.com</span>
                </p>				
			</div>
			<div class="col-md-4">
				<p><span class="wpcf7-form-control-wrap" data-name="your-phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" id="contact_form_phone_21059" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" value="" type="tel" name="your-phone"></span>
				</p>
                <p>
                	<span class="we-wpcf7-note">Mobile Example: 0888888888</span>
                </p> 				
			</div>
			<div class="col-md-12">
				<p>
				<span class="wpcf7-form-control-wrap" data-name="your-review">
					<textarea rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="contact_form_review_21059" autocomplete="review" aria-required="true" aria-invalid="false" placeholder="Đánh giá" name="your-review" style="width: 100%;"></textarea>
				</span>
				</p>
			</div>
		</div>
        <div class="row">
            <div class="col-md-4">
                '.do_shortcode( '[cf7sr-simple-recaptcha]' ).'
            </div>
        </div>
        <div class="row">
			<div class="col-md-12">
            	<br>
				<p><input class="wpcf7-form-control has-spinner wpcf7-submit" id="contact_form_message_21059" type="submit" value="Đánh giá phòng"><span class="wpcf7-spinner"></span>
				</p>
			</div>
		</div>
		<div class="wpcf7-response-output" aria-hidden="true"></div>
		</form>
    ';

    $contactFormEn = 
    '
		<form action="/en/'.$slug.'#wpcf7-21061-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
		<div style="display: none;">
			<input type="hidden" name="_wpcf7" value="21061">
			<input type="hidden" name="_wpcf7_version" value="5.7.6">
			<input type="hidden" name="_wpcf7_locale" value="en_US">
			<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f21061-o2">
			<input type="hidden" name="_wpcf7_container_post" value="0">
			<input type="hidden" name="_wpcf7_posted_data_hash" value="">
		</div>
		<div class="row pb-15">
			<div class="col-md-12">
				<div target_pos="star_rating-8" max_size="5" class="star_rating_class" cancel-btn="1" style="cursor: pointer;">
					<input name="score" type="hidden">
				</div>
				<span class="wpcf7-form-control-wrap star_rating-8">
					<input type="hidden" name="star_rating-8" class="custom_radio_class star_rating-8" value="">
				</span>
			</div>
			<br>
		</div>
		<div class="row">
			<div class="col-md-4">
				<p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contact_form_name_21061" autocomplete="name" aria-required="true" aria-invalid="false" placeholder="Your name" value="" type="text" name="your-name"></span>
				</p>
			</div>
			<div class="col-md-4">
				<p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="contact_form_email_21061" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="Your email" value="" type="email" name="your-email"></span>
				</p>
                <p>
                	<span class="we-wpcf7-note">Email Example: text@domain.com</span>
                </p>				
			</div>
			<div class="col-md-4">
				<p><span class="wpcf7-form-control-wrap" data-name="your-phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" id="contact_form_phone_21061" aria-required="true" aria-invalid="false" placeholder="Your phone" value="" type="tel" name="your-phone"></span>
				</p>
                <p>
                	<span class="we-wpcf7-note">Mobile Example: 0888888888</span>
                </p>				
			</div>
			<div class="col-md-12">
				<p>
				<span class="wpcf7-form-control-wrap" data-name="your-review">
					<textarea rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="contact_form_review_21061" autocomplete="review" aria-required="true" aria-invalid="false" placeholder="Your review" name="your-review" style="width: 100%;"></textarea>
				</span>
				</p>
			</div>
		</div>
        <div class="row">
            <div class="col-md-4">
                '.do_shortcode( '[cf7sr-simple-recaptcha]' ).'
            </div>
        </div>
        <div class="row">
			<div class="col-md-12">
	            <br>
				<p><input class="wpcf7-form-control has-spinner wpcf7-submit" id="contact_form_message_21061" type="submit" value="Review property"><span class="wpcf7-spinner"></span>
				</p>
			</div>
		</div>
		<div class="wpcf7-response-output" aria-hidden="true"></div>
		</form>
    ';

    switch ($we_lang) {
        case 'en':
            $weForm = $contactFormEn;
            break;
        
        default:
            $weForm = $contactFormVi;
            break;
    }

    $result = '<div role="tabpanel" class="tab-pane active" id="tab_property_description">';

	$reviewArr = [
		'0' => [
			'cusreview_name' => 'Nguyễn Như Ngọc',
			'cusreview_role' => 'Sinh viên',
			'cusreview_star' => '5',
			'date' => '22/03/2023',
			'cusreview_description' => 'Phòng rất tuyệt ạ',
		],
		'1' => [
			'cusreview_name' => 'Huỳnh Thu Thủy',
			'cusreview_role' => 'Sinh viên',
			'cusreview_star' => '5',
			'date' => '22/03/2023',
			'cusreview_description' => 'Phòng rất tuyệt',
		],
		'2' => [
			'cusreview_name' => 'Trần Cẩm Linh',
			'cusreview_role' => 'Sinh viên',
			'cusreview_star' => '4',
			'date' => '22/03/2023',
			'cusreview_description' => 'Mình là sinh viên mới. Thật vui khi chọn được phòng như ý',
		],
		'3' => [
			'cusreview_name' => 'Phan Nguyễn Hoàng Anh',
			'cusreview_role' => 'Sinh viên',
			'cusreview_star' => '4',
			'date' => '22/03/2023',
			'cusreview_description' => 'Phòng rất tuyệt hỗ trợ đầy đủ. Chủ nhà nhiệt tình',
		],
		'4' => [
			'cusreview_name' => 'Hoàng Cẩm Tú',
			'cusreview_role' => 'Sinh viên',
			'cusreview_star' => '5',
			'date' => '22/03/2023',
			'cusreview_description' => 'Phòng rất tuyệt',
		]
	];

    $cusReviews = array_map(function ($value) {
        return (object)$value;
    }, $reviewArr);



	$rating = '';
	$rating .= '<div class="row pt-15 pb-15">';
	$rating .= '<div class="col-md-12">';
	$rating .= '<span class="fw-bold">'.$reviewTitle.'</span> ';
    $rating .= '<div class="small-rating row-float-left mr-10">';
    $star = 1;
	while($star <= 4.5)
	{
		$star += 1;
		$rating .= '<img alt="we-review-property" src="'.SRFFCF7_PLUGIN_DIR.'/asset/jquery.rating/images/star-on.png"> ';
	}
    while($star <= 5)
    {
    	$star += 1;
        $rating .= '<img alt="we-review-property" src="'.SRFFCF7_PLUGIN_DIR.'/asset/jquery.rating/images/star-off.png"> ';
    }
    $rating .= '</div>';
    $rating .= '<span class="fw-bold">'.random_int(10, 50).'K'.'</span> ';
	$rating .= '</div>';
	$rating .= '</div>';

	$rating .= '<div class="row">';
	$rating .= '<div class="col-md-12">';
	$rating .= '<div class="tab-content">';
    foreach($cusReviews as $review_key => $review_item) 
    {
        $rating .= '<div class="card text-dark bg-light mb-3 shadow-sm mb-15 bg-body rounded">';
        $rating .= '<div class="card-header pt-15 pb-15 pl-15">';
        $rating .= '<span class="fw-bold"><i class="far fa-user"></i> '.$review_item->cusreview_name.' | ';
        $rating .= '<i class="fas fa-user-tag"></i> '.$review_item->cusreview_role;
        $rating .= '</span>';
        $rating .= '<div class="small-rating row-float-right mr-10">';
        $star = 1;
		while($star <= $review_item->cusreview_star)
		{
			$star += 1;
			$rating .= '<img alt="we-review-property" src="'.SRFFCF7_PLUGIN_DIR.'/asset/jquery.rating/images/star-on.png"> ';
		}
        while($star <= 5)
        {
        	$star += 1;
            $rating .= '<img alt="we-review-property" src="'.SRFFCF7_PLUGIN_DIR.'/asset/jquery.rating/images/star-off.png"> ';
        }
        $rating .= '</div>';
        $rating .= '</div>';
        $rating .= '<div class="card-body">';
        $rating .= '<p class="card-text">'.$review_item->cusreview_description.'</p>';
        $rating .= '</div>';
        $rating .= '</div>';
    }
	$rating .= '</div>';
	$rating .= '</div>';
	$rating .= '</div>';

	//
    $result .= $weForm;
	$result .= $rating;
    $result .= '</div>';

    print $result;