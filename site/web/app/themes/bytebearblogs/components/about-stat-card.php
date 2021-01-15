<?php
/**
 * Template part for displaying about page card
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Byte_Bear_Blogss
 */
$author_img = 'http://bytebearblogs.test/wp-content/uploads/2020/11/118962907_5161042360587585_5990214996673660285_n.jpg';


?>
<div class="about-container container about-stat-card">
    <div class="row">
        <div class="col-md-5 about-img-container">
        <img src="<?php echo $author_img; ?>" alt="" class="about-img" />
        </div>
        <!--ABOUT CONTENT--->
        <div class="col-md-7 about-stat-container">
            <div class="about-stat-content">
                <h3 class="about-title">Bryanna</h3>
                <h5 class="about-sub-title">AKA ByteBearBree<br>
                    <span class="about-sub-title-styled">Front-End Developer & UI Designer</span>
                </h5>
            </div>
            <div class="about-stat-icons">
            <!--FIRST ROW HERE-->
                <div class="about-stat-icon-container row">
                    <div class="col-3">
                        <a href="#" class="stat-icon"><i class="fab fa-js-square"></i></a>
                    </div>
                    <div class="col-3">
                    <a href="#" class="stat-icon"><i class="fab fa-html5"></i></a>

                    </div>
                    <div class="col-3">
                    <a href="#" class="stat-icon"><i class="fab fa-css3-alt"></i></a>

                    </div>
                    <div class="col-3">
                    <a href="#" class="stat-icon"><i class="fab fa-wordpress"></i></a>

                    </div>
                </div>
            <!--SECOND ROW HERE-->
                <div class="about-stat-icon-container offset row">
                    <div class="col-3">
                    <a href="#" class="stat-icon"><i class="fab fa-bootstrap"></i></a>

                    </div>
                    <div class="col-3">
                    <a href="#" class="stat-icon"><i class="fab fa-sass"></i></a>

                    </div>
                    <div class="col-3">
                    <a href="#" class="stat-icon"><i class="fab fa-node"></i></a>
                    </div>
                    <div class="col-3">
                    <a href="#" class="stat-icon"><i class="fab fa-react"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>