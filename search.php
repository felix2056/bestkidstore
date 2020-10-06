<?php include_once('includes/header.php'); ?>

<?php include_once('includes/nav.php'); ?>

<?php require_once('products/db/products.php'); ?>


<?php
    $products = json_decode(getAllProducts(), true);
?>
<main class="wrapper main-content" role="main">

<?php
$query = "";

if (isset($_GET['q'])) {
    $query = $_GET['q'];

    // $products = json_decode(searchProducts($query), true);
}
?>

    <div id="shopify-section-search-template" class="shopify-section">
        <div class="grid">
            <div class="grid-item">
                <hr class="hr--clear hr--small">
                <?php if ( !empty($query)) { ?>
                <h1 class="h2 text-center">Your search for "<?php echo $query; ?>" revealed the following:</h1>
                <?php } ?>

                <form action="/search.php" method="get" class="search-bar" role="search">
                    <input type="hidden" name="type" value="product">

                    <input type="search" name="q" value="<?php echo $query; ?>" placeholder="Search all products..."
                        aria-label="Search all products...">
                    <button type="submit" class="search-bar--submit icon-fallback-text">
                        <span class="icon icon-search" aria-hidden="true"></span>
                        <span class="fallback-text">Search</span>
                    </button>
                </form>

                <hr class="hr--clear">

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
                                                data-srcset="<?php echo $product['featured_image'] ?> 2048w"
                                                sizes="227px" srcset="<?php echo $product['featured_image'] ?> 2048w">
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


                <div class="text-center">
                    <ul class="pagination-custom">
                        <li class="disabled"><span>←</span></li>
                        <li class="active"><span>1</span></li>

                        <li>
                            <a href="/search?page=2&amp;q=as&amp;type=product" title="">2</a>
                        </li>
                        <li>
                            <a href="/search?page=3&amp;q=as&amp;type=product" title="">3</a>
                        </li>
                        <li>
                            <a href="/search?page=4&amp;q=as&amp;type=product" title="">4</a>
                        </li>
                        <li><a href="/search?page=2&amp;q=as&amp;type=product" title="Next »">→</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once('includes/footer.php'); ?>