<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<?php if (isset($_GET['product'])) : ?>
    <?php
    $id = (int) $_GET['product'];
    $single = json_decode(find($id), true);
    // echo $_GET['product'];
    ?>
    <div class="page-container drawer-page-content" id="PageContainer">
        <main class="main-content" id="MainContent" role="main">
            <div id="shopify-section-product-template" class="shopify-section">
                <div class="product-template__container page-width" id="ProductSection-product-template" data-section-id="product-template" data-section-type="product" data-enable-history-state="true">
                    <div class="grid product-single">
                        <div class="grid__item product-single__photos medium-up--one-half">
                            <style>
                                @media screen and (min-width: 750px) {
                                    #FeaturedImage-product-template-8429031522402 {
                                        max-width: 530px;
                                        max-height: 530.0px;
                                    }

                                    #FeaturedImageZoom-product-template-8429031522402-wrapper {
                                        max-width: 530px;
                                        max-height: 530.0px;
                                    }
                                }

                                @media screen and (max-width: 749px) {
                                    #FeaturedImage-product-template-8429031522402 {
                                        max-width: 750px;
                                        max-height: 750px;
                                    }

                                    #FeaturedImageZoom-product-template-8429031522402-wrapper {
                                        max-width: 750px;
                                    }
                                }
                            </style>

                            <div id="FeaturedImageZoom-product-template-8429031522402-wrapper" class="product-single__photo-wrapper js">
                                <div id="FeaturedImageZoom-product-template-8429031522402" style="padding-top: 100%; position: relative; overflow: hidden;" class="product-single__photo js-zoom-enabled product-single__photo--has-thumbnails hide" data-image-id="8429031522402" data-zoom="<?php echo $single['featured_image'] ?>">
                                    <img id="FeaturedImage-product-template-8429031522402" class="feature-row__image product-featured-img lazypreload lazyautosizes lazyloaded" src="<?php echo $single['featured_image'] ?>" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="<?php echo $single['title'] ?>" data-srcset="<?php echo $single['featured_image'] ?> 2048w">
                                    <img src="<?php echo $single['featured_image'] ?>" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 800px; border: none; max-width: none; max-height: none;">
                                </div>
                            </div>

                            <style>  
                                @media screen and (min-width: 750px) { 
                                    #FeaturedImage-product-template-8429040828514 {
                                    max-width: 530px;
                                    max-height: 530.0px;
                                    }
                                    #FeaturedImageZoom-product-template-8429040828514-wrapper {
                                    max-width: 530px;
                                    max-height: 530.0px;
                                    }
                                } 
                                   
                                @media screen and (max-width: 749px) {
                                    #FeaturedImage-product-template-8429040828514 {
                                        max-width: 640px;
                                        max-height: 750px;
                                    }
                                    #FeaturedImageZoom-product-template-8429040828514-wrapper {
                                        max-width: 640px;
                                    }
                                }
                            </style>

                            <div id="FeaturedImageZoom-product-template-8429040828514-wrapper" class="product-single__photo-wrapper js">
                                <div id="FeaturedImageZoom-product-template-8429040828514" style="padding-top: 100%; position: relative; overflow: hidden;" class="product-single__photo js-zoom-enabled product-single__photo--has-thumbnails" data-image-id="8429040828514" data-zoom="<?php echo $single['featured_image'] ?>">
                                    <img id="FeaturedImage-product-template-8429040828514" class="feature-row__image product-featured-img lazyautosizes lazyloaded" src="<?php echo $single['featured_image'] ?>" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0" data-sizes="auto" alt="<?php echo $single['title'] ?>" data-srcset="<?php echo $single['featured_image'] ?> 2048w">
                                    <img src="<?php echo $single['featured_image'] ?>" class="zoomImg" style="position: absolute; top: -94.0189px; left: -67.1415px; opacity: 1; width: 640px; height: 640px; border: none; max-width: none; max-height: none;">
                                </div>
                            </div>

                            <div class="thumbnails-wrapper thumbnails-slider--active">
                                <button type="button" class="btn btn--link medium-up--hide thumbnails-slider__btn thumbnails-slider__prev thumbnails-slider__prev--product-template">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-left" viewBox="0 0 284.49 498.98">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #231f20
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-1" d="M437.67 129.51a35 35 0 0 1 24.75 59.75L272.67 379l189.75 189.74a35 35 0 1 1-49.5 49.5L198.43 403.75a35 35 0 0 1 0-49.5l214.49-214.49a34.89 34.89 0 0 1 24.75-10.25z" transform="translate(-188.18 -129.51)"></path>
                                    </svg>
                                    <span class="icon__fallback-text">Previous slide</span>
                                </button>
                                
                                <?php if (count($single['images']) > 0) : ?>
                                <ul class="grid grid--uniform product-single__thumbnails product-single__thumbnails-product-template">
                                    <?php foreach ($single['images'] as $image) : ?>
                                    <li class="grid__item medium-up--one-quarter product-single__thumbnails-item js">
                                        <a href="<?php echo $image ?>">
                                            <img class="product-single__thumbnail-image" src="<?php echo $image ?>" alt="<?php echo $single['title'] ?>">
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>

                                <button type="button" class="btn btn--link medium-up--hide thumbnails-slider__btn thumbnails-slider__next thumbnails-slider__next--product-template">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-chevron-right" viewBox="0 0 284.49 498.98">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #231f20
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-1" d="M223.18 628.49a35 35 0 0 1-24.75-59.75L388.17 379 198.43 189.26a35 35 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L247.93 618.24a34.89 34.89 0 0 1-24.75 10.25z" transform="translate(-188.18 -129.51)"></path>
                                    </svg>
                                    <span class="icon__fallback-text">Next slide</span>
                                </button>

                            </div>

                        </div>

                        <div class="grid__item medium-up--one-half">
                            <div class="product-single__meta">
                                <h1 class="product-single__title"><?php echo $single['title'] ?></h1>
                                <div>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <s id="ComparePrice-product-template"><?php echo $single['price'] ?></s>
                                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template">
                                                <?php echo $single['sale_price'] ?>
                                            </span>
                                            <span class="product-price__sale-label product-price__sale-label-product-template">Sale</span>
                                        </span>
                                    </p>

                                    <form method="post" action="/cart/add" id="product_form_2072538873954" accept-charset="UTF-8" class="product-form product-form-product-template" enctype="multipart/form-data">
                                        <input type="hidden" name="form_type" value="product">
                                        <input type="hidden" name="utf8" value="✓">

                                        <div class="selector-wrapper js product-form__item">
                                            <label for="SingleOptionSelector-0">
                                                Color
                                            </label>
                                            <select class="single-option-selector single-option-selector-product-template product-form__input" id="SingleOptionSelector-0" data-index="option1">
                                                <option value="navy" selected="selected">navy</option>
                                                <option value="Champagne">Champagne</option>
                                                <option value="White">White</option>
                                                <option value="Purple">Purple</option>
                                                <option value="Gray">Gray</option>
                                                <option value="picture">picture</option>
                                                <option value="burgundy">burgundy</option>
                                                <option value="Pink">Pink</option>
                                            </select>
                                        </div>

                                        <div class="selector-wrapper js product-form__item">
                                            <label for="SingleOptionSelector-1">
                                                US Child Size
                                            </label>
                                            <select class="single-option-selector single-option-selector-product-template product-form__input" id="SingleOptionSelector-1" data-index="option2">
                                                <option value="Child-3" selected="selected">Child-3</option>
                                                <option value="Child-4">Child-4</option>
                                                <option value="Child-5">Child-5</option>
                                                <option value="Child-6">Child-6</option>
                                            </select>
                                        </div>


                                        <select name="id" id="ProductSelect-product-template" class="product-form__variants no-js">
                                            <option selected="selected" value="19319457644642">
                                                navy / Child-3
                                            </option>

                                            <option value="19319457742946">
                                                navy / Child-4
                                            </option>

                                            <option value="19319457841250">
                                                navy / Child-5
                                            </option>

                                            <option value="19319457906786">
                                                navy / Child-6
                                            </option>
                                        </select>


                                        <div class="product-form__item product-form__item--submit">
                                            <button type="submit" name="add" id="AddToCart-product-template" class="btn product-form__cart-submit">
                                                <span id="AddToCartText-product-template">
                                                    Add to cart
                                                </span>
                                            </button>

                                            <a href="/products/checkout.php?product=<?php echo $single['id'] ?>"id="AddToCart-product-template" class="btn product-form__cart-submit" style="margin-top: 10px;background: #06e206;">
                                                <span id="AddToCartText-product-template">
                                                    Checkout
                                                </span>
                                            </a>
                                        </div>
                                    </form>
                                </div>

                                <div class="product-single__description rte">
                                    <p>
                                        <?php foreach ($single['meta'] as $key => $value) : ?>
                                        <span>
                                            <strong><?php echo $key; ?>:</strong> <?php echo $value; ?>
                                        </span>
                                        <br>
                                        <?php endforeach; ?>
                                    </p>
                                </div>


                                <!-- /snippets/social-sharing.liquid -->
                                <div class="social-sharing">
                                    <a target="_blank" href="//www.facebook.com/sharer.php?u=https://bestkidstore.myshopify.com/products/navy-blue-petite-lace-flower-girl-dresses" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 20 20">
                                            <path fill="#444" d="M18.05.811q.439 0 .744.305t.305.744v16.637q0 .439-.305.744t-.744.305h-4.732v-7.221h2.415l.342-2.854h-2.757v-1.83q0-.659.293-1t1.073-.342h1.488V3.762q-.976-.098-2.171-.098-1.634 0-2.635.964t-1 2.72V9.47H7.951v2.854h2.415v7.221H1.413q-.439 0-.744-.305t-.305-.744V1.859q0-.439.305-.744T1.413.81H18.05z"></path>
                                        </svg>
                                        <span class="share-title" aria-hidden="true">Share</span>
                                        <span class="visually-hidden">Share on Facebook</span>
                                    </a>

                                    <a target="_blank" href="//twitter.com/share?text=Navy%20Blue%20petite%20Lace%20Flower%20Girl%20Dresses&amp;url=https://bestkidstore.myshopify.com/products/navy-blue-petite-lace-flower-girl-dresses" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 20 20">
                                            <path fill="#444" d="M19.551 4.208q-.815 1.202-1.956 2.038 0 .082.02.255t.02.255q0 1.589-.469 3.179t-1.426 3.036-2.272 2.567-3.158 1.793-3.963.672q-3.301 0-6.031-1.773.571.041.937.041 2.751 0 4.911-1.671-1.284-.02-2.292-.784T2.456 11.85q.346.082.754.082.55 0 1.039-.163-1.365-.285-2.262-1.365T1.09 7.918v-.041q.774.408 1.773.448-.795-.53-1.263-1.396t-.469-1.864q0-1.019.509-1.997 1.487 1.854 3.596 2.924T9.81 7.184q-.143-.509-.143-.897 0-1.63 1.161-2.781t2.832-1.151q.815 0 1.569.326t1.284.917q1.345-.265 2.506-.958-.428 1.386-1.732 2.18 1.243-.163 2.262-.611z"></path>
                                        </svg>
                                        <span class="share-title" aria-hidden="true">Tweet</span>
                                        <span class="visually-hidden">Tweet on Twitter</span>
                                    </a>

                                    <a target="_blank" href="//pinterest.com/pin/create/button/?url=https://bestkidstore.myshopify.com/products/navy-blue-petite-lace-flower-girl-dresses&amp;media=//cdn.shopify.com/s/files/1/0002/8855/5017/products/product-image-793693674_1024x1024.jpg?v=1571332597&amp;description=Navy%20Blue%20petite%20Lace%20Flower%20Girl%20Dresses" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 20 20">
                                            <path fill="#444" d="M9.958.811q1.903 0 3.635.744t2.988 2 2 2.988.744 3.635q0 2.537-1.256 4.696t-3.415 3.415-4.696 1.256q-1.39 0-2.659-.366.707-1.147.951-2.025l.659-2.561q.244.463.903.817t1.39.354q1.464 0 2.622-.842t1.793-2.305.634-3.293q0-2.171-1.671-3.769t-4.257-1.598q-1.586 0-2.903.537T5.298 5.897 4.066 7.775t-.427 2.037q0 1.268.476 2.22t1.427 1.342q.171.073.293.012t.171-.232q.171-.61.195-.756.098-.268-.122-.512-.634-.707-.634-1.83 0-1.854 1.281-3.183t3.354-1.329q1.83 0 2.854 1t1.025 2.61q0 1.342-.366 2.476t-1.049 1.817-1.561.683q-.732 0-1.195-.537t-.293-1.269q.098-.342.256-.878t.268-.915.207-.817.098-.732q0-.61-.317-1t-.927-.39q-.756 0-1.269.695t-.512 1.744q0 .39.061.756t.134.537l.073.171q-1 4.342-1.22 5.098-.195.927-.146 2.171-2.513-1.122-4.062-3.44T.59 10.177q0-3.879 2.744-6.623T9.957.81z"></path>
                                        </svg>
                                        <span class="share-title" aria-hidden="true">Pin it</span>
                                        <span class="visually-hidden">Pin on Pinterest</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="text-center return-link-wrapper">
                    <a href="/" class="btn btn--secondary btn--has-icon-before return-link">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-arrow-left" viewBox="0 0 20 8">
                            <path d="M4.814 7.555C3.95 6.61 3.2 5.893 2.568 5.4 1.937 4.91 1.341 4.544.781 4.303v-.44a9.933 9.933 0 0 0 1.875-1.196c.606-.485 1.328-1.196 2.168-2.134h.752c-.612 1.309-1.253 2.315-1.924 3.018H19.23v.986H3.652c.495.632.84 1.1 1.036 1.406.195.306.485.843.869 1.612h-.743z" fill="#000" fill-rule="evenodd"></path>
                        </svg>
                        Go Back
                    </a>
                </div>
            </div>
        </main>

        <?php include_once('../includes/footer.php'); ?>

    </div>
<?php endif; ?>