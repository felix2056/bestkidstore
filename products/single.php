<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<?php if ( isset($_GET['product'])) : ?>
<?php
    $id = (int) $_GET['product'];
    $single = json_decode(find($id), true);
    // echo $_GET['product'];
?>

<main class="wrapper main-content" role="main">
    <div id="shopify-section-product-template" class="shopify-section product-template-section">
        <div id="ProductSection" data-section-id="product-template" data-section-type="product-template"
            data-zoom-toggle="zoom-in" data-zoom-enabled="true" data-related-enabled="" data-social-sharing=""
            data-show-compare-at-price="true" data-stock="false" data-incoming-transfer="false"
            data-ajax-cart-method="modal">
            <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                <a href="/" title="Back to the frontpage">Home</a>

                <span class="divider" aria-hidden="true">›</span>
                <span class="breadcrumb--truncate"><?php echo $single['title'] ?></span>
            </nav>

            <style>
                .selector-wrapper select,
                .product-variants select {
                    margin-bottom: 13px;
                }
            </style>


            <div class="grid" itemscope="" itemtype="http://schema.org/Product">
                <meta itemprop="url"
                    content="https://homedecor-1604.myshopify.com/products/beautiful-yellow-faery-resin">
                <meta itemprop="image"
                    content="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-539540110_grande.jpg?v=1575446689">

                <div class="grid-item large--two-fifths">
                    <div class="grid">
                        <div class="grid-item large--eleven-twelfths text-center">
                            <div class="product-photo-container" id="productPhotoContainer-product-template">
                                <div id="productPhotoWrapper-product-template-5009510072364"
                                    class="lazyload__image-wrapper" data-image-id="5009510072364"
                                    style="max-width: 700px">
                                    <div class="no-js product__image-wrapper image-zoom"
                                        style="padding-top: 100%; position: relative; overflow: hidden;">
                                        <img id="" src="<?php echo $single['featured_image'] ?>"
                                            class="no-js lazypreload lazyautosizes lazyloaded"
                                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                            data-aspectratio="1.0" data-sizes="auto" alt="Beautiful Yellow faery resin"
                                            data-zoom="<?php echo $single['featured_image']; ?>"
                                            data-srcset="<?php echo $single['featured_image']; ?> 2048w" sizes="348px"
                                            srcset="<?php echo $single['featured_image']; ?> 2048w"
                                            style="display: block;">
                                        <img src="<?php echo $single['featured_image']; ?>"
                                            class="zoomImg"
                                            style="position: absolute; top: -60.069px; left: -388.716px; opacity: 0; width: 750px; height: 750px; border: none; max-width: none; max-height: none;">
                                    </div>
                                </div>

                                <noscript>
                                    <img src="<?php echo $single['featured_image']; ?>"
                                        srcset="<?php echo $single['featured_image']; ?> 1x, //cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-539540110_580x@2x.jpg?v=1575446689 2x"
                                        alt="<?php echo $single['title']; ?>" style="opacity:1;">
                                </noscript>
                            </div>

                            <?php if ( count($single['images']) > 0) : ?>
                            <ul class="product-photo-thumbs grid-uniform" id="productThumbs-product-template">
                                <?php foreach ($single['images'] as $image) : ?>
                                <li class="grid-item medium-down--one-quarter large--one-quarter">
                                    <a href="//cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-704883138_1024x1024@2x.jpg?v=1575446690"
                                        class="product-photo-thumb product-photo-thumb-product-template"
                                        data-image-id="5026912731180">
                                        <img src="<?php echo $image ?>" alt="<?php echo $single['title'] ?>">
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="grid-item large--three-fifths">
                    <h1 class="h2" itemprop="name"><?php echo $single['title'] ?></h1>
                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                        <meta itemprop="priceCurrency" content="USD">
                        <meta itemprop="price" content="59.7">

                        <ul class="inline-list product-meta">
                            <li>
                                <span id="productPrice-product-template" class="h1">
                                    <span aria-hidden="true"><?php echo $single['price'] ?></span>
                                    <span aria-hidden="true"><s><?php echo $single['sale_price'] ?></s></span>

                                    <span class="visually-hidden">
                                        <span class="visually-hidden">Regular price</span>
                                        <?php echo $single['price'] ?>
                                    </span>

                                    <span class="visually-hidden">
                                        <span class="visually-hidden">Sale price</span>
                                        <?php echo $single['sale_price'] ?>
                                    </span>
                                </span>
                            </li>

                            <li>
                                <span id="comparePrice-product-template" class="sale-tag large">Save $19.90</span>
                            </li>


                        </ul>
                        <hr id="variantBreak" class="hr--clear hr--small">

                        <link itemprop="availability" href="http://schema.org/InStock">


                        <form method="post" action="/cart/add" id="addToCartForm-product-template"
                            accept-charset="UTF-8" class="addToCartForm addToCartForm--payment-button"
                            enctype="multipart/form-data">
                            <input type="hidden" name="form_type" value="product">
                            <input type="hidden" name="utf8" value="✓">
                            <div class="selector-wrapper">
                                <label for="productSelect-product-template-option-0">Color</label>
                                <select class="single-option-selector" data-option="option1"
                                    id="productSelect-product-template-option-0">
                                    <option value="White">White</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Pink">Pink</option>
                                    <option value="Purple">Purple</option>
                                    <option value="Purple Red">Purple Red</option>
                                    <option value="Orange">Orange</option>
                                </select>
                            </div>
                            <select name="id" id="productSelect-product-template"
                                class="product-variants product-variants-product-template">
                                <option selected="selected" data-sku="17114392-white" value="13182599725100">White -
                                    $5.10 USD</option>
                                <option data-sku="17114392-yellow" value="13182599757868">Yellow - $5.10 USD</option>
                                <option data-sku="17114392-pink" value="13182599790636">Pink - $5.10 USD</option>
                                <option data-sku="17114392-purple" value="13182599823404">Purple - $5.10 USD</option>
                                <option data-sku="17114392-purple-red" value="13182599856172">Purple Red - $5.10 USD
                                </option>
                                <option data-sku="17114392-orange" value="13182599888940">Orange - $5.10 USD</option>
                            </select>

                            <div class="payment-buttons payment-buttons--small">
                                <div data-shopify="payment-button" class="shopify-payment-button">
                                    <div>
                                        <button type="submit" name="add" id="addToCart-product-template"
                                            class="btn btn--add-to-cart btn--secondary-accent">
                                            <span class="icon icon-cart"></span>
                                            <span id="addToCartText-product-template">Add to Cart</span>
                                        </button>
                                    </div>
                                    <div>
                                        <a href="checkout.php?product=<?php echo $single['id'] ?>"
                                            class="shopify-payment-button__button shopify-payment-button__button--unbranded _2ogcW-Q9I-rgsSkNbRiJzA _2EiMjnumZ6FVtlC7RViKtj _2-dUletcCZ2ZL1aaH0GXxT"
                                            data-testid="Checkout-button">Buy it now</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <hr class="product-template-hr">
                    </div>

                    <div class="product-description rte" itemprop="description">
                        <div>
                            <p>
                            <?php foreach ($single['meta'] as $key => $value) : ?>
                                <span>
                                    <strong><?php echo $key; ?>:</strong> <?php echo $value; ?>
                                </span>
                                <br>
                            <?php endforeach; ?>
                            </p>
                        </div>
                    </div>


                    <div class="social-sharing is-normal"
                        data-permalink="https://homedecor-1604.myshopify.com/products/beautiful-yellow-faery-resin">

                        <a target="_blank"
                            href="//www.facebook.com/sharer.php?u=https://homedecor-1604.myshopify.com/products/beautiful-yellow-faery-resin"
                            class="share-facebook" title="Share on Facebook">
                            <span class="icon icon-facebook" aria-hidden="true"></span>
                            <span class="share-title" aria-hidden="true">Share</span>
                            <span class="visually-hidden">Share on Facebook</span>
                        </a>

                        <a target="_blank"
                            href="//twitter.com/share?text=Beautiful%20Yellow%20faery%20resin&amp;url=https://homedecor-1604.myshopify.com/products/beautiful-yellow-faery-resin&amp;source=webclient"
                            class="share-twitter" title="Tweet on Twitter">
                            <span class="icon icon-twitter" aria-hidden="true"></span>
                            <span class="share-title" aria-hidden="true">Tweet</span>
                            <span class="visually-hidden">Tweet on Twitter</span>
                        </a>

                        <a target="_blank"
                            href="//pinterest.com/pin/create/button/?url=https://homedecor-1604.myshopify.com/products/beautiful-yellow-faery-resin&amp;media=http://cdn.shopify.com/s/files/1/0022/8684/5996/products/product-image-539540110_1024x1024.jpg?v=1575446689&amp;description=Beautiful%20Yellow%20faery%20resin"
                            class="share-pinterest" title="Pin on Pinterest">
                            <span class="icon icon-pinterest" aria-hidden="true"></span>
                            <span class="share-title" aria-hidden="true">Pin it</span>
                            <span class="visually-hidden">Pin on Pinterest</span>
                        </a>
                    </div>
                </div>
            </div>

            <hr>

            <?php
                $products = json_decode(getTopProducts(8), true);
            ?>
            
            <h2 class="h1">We Also Recommend</h2>
            <?php if (count($products) > 0) : ?>
            <div class="grid-uniform">
                <?php foreach ($products as $product) : ?>
                <div class="grid-item small--one-half medium--one-quarter large--one-quarter on-sale">
                    <a href="/products/single.php?product=<?php echo $product['id'] ?>" class="product-grid-item">
                        <div class="product-grid-image" style="height: 227px;">
                            <div class="product-grid-image--centered">
                                <div class="lazyload__image-wrapper no-js" style="max-width: 250px">
                                    <div style="padding-top:100.0%;">
                                        <img class="no-js lazyautosizes lazyloaded"
                                            data-widths="[125, 180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                            data-aspectratio="1.0" data-sizes="auto"
                                            alt="<?php echo $product['title'] ?>"
                                            data-srcset="<?php echo $product['featured_image'] ?> 2048w" sizes="227px"
                                            srcset="<?php echo $product['featured_image'] ?> 2048w">
                                    </div>
                                </div>
                                <noscript>
                                    <img src="<?php echo $product['featured_image'] ?>"
                                        srcset="<?php echo $product['featured_image'] ?> 2x"
                                        alt="<?php echo $product['title'] ?>" style="opacity:1;">
                                </noscript>
                            </div>
                        </div>

                        <p><?php echo $product['title'] ?></p>

                        <div class="product-item--price">
                            <span class="h1 medium--left">
                                <span class="visually-hidden">Sale price</span>
                                <small aria-hidden="true"><?php echo $product['price'] ?></small>
                                <span class="visually-hidden">$22.62</span>
                            </span>


                            <span class="sale-tag medium--right">
                                Save $<?php echo $product['sale_price'] ?>
                            </span>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php endif; ?>

<?php include_once('../includes/footer.php'); ?>