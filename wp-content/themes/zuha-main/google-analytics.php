<?php
global $wpdb;

?>
<div class="contact-us-info-wrappaer section-space--pb_100">
    <div class="container">
        <div class="row align-items-center">                        
            <div class="col-lg-8 col-md-6">
                <div class="conact-info-wrap mt-30">
                    <h5 class="heading mb-20">Add Google analytics code</h5>                    
                </div>
            </div>
            <?php
                if(isset($_POST['save_google_analytics'])){
                    echo '<pre>';
                   // add_option( 'google_analytics_code', htmlentities($_POST['google_analytics_code']), 'yes' );
                   // update_option( 'google_analytics_code',   stripslashes(wp_filter_post_kses(addslashes($_POST['google_analytics_code']))) );

                    update_option('google_analytics_code', htmlentities(stripslashes($_REQUEST['google_analytics_code'])));
                }

                $gCode = get_option( 'google_analytics_code' );
            ?>
            <form method="POST" action="">
                <textarea class="form-control" cols="20" rows="8" style="width:50%" name="google_analytics_code" >
                <?php
                    echo isset($gCode) && !empty($gCode) ? $gCode : 'Please paste google analytics code here.';
                ?></textarea>
                <div class="form-group">
                    <input type="submit" name="save_google_analytics" class="btn button" value="Save">  
                </div>
            </form>            
     </div>
</div>