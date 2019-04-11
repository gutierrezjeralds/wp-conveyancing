<?php
/**
 * Created by PhpStorm.
 * User: Jerald S. Gutierrez
 * Date: 4/10/2019
 * Time: 9:42 AM
 */

get_template_part("template-part/main-html/main", "none");
?>

<nav class="navbar navbar-expand-lg navbar-light white-bg">
    <div class="container">

        <a class="navbar-brand" href="<?php echo esc_url(get_permalink(get_page_by_title('Index'))); ?>">
            <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/TC_Brisbane.png" class="img-fluid header-logo" alt="Logo icon">
        </a>

        <div class="ml-auto phone-nav-info-hlr d-none d-md-block d-lg-block d-xl-block">
            <span class="black-text font-weight-bold d-block mb-2 font-size-14px text-center">FREE 20-minute consultation</span>
            <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/icon-header-phone.png" class="d-inline align-middle" alt="Phone icon">
            <a class="black-text font-weight-bold d-inline font-size-26px align-middle" href="tel:0731282003">(07) 3128 2003</a>
        </div>
    </div>
</nav>

<div class="wrapper-container">