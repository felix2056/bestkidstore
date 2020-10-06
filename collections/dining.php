<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<?php require_once('../products/db/dining_cat.php'); ?>


<?php
    $products = json_decode(getAllDining(), true);
?>

<main class="wrapper main-content" role="main">
    <div id="shopify-section-collection-template" class="shopify-section collection-template-section">
        <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
            <a href="/" title="Back to the frontpage">Home</a>
            <span class="divider" aria-hidden="true">›</span>
            <span>Dining</span>
        </nav>


        <div id="CollectionSection" data-section-id="collection-template" data-section-type="collection-template">
            <div class="grid grid-border">
                <div class="grid-item">
                    <header class="section-header">
                        <h1 class="section-header--title section-header--left h1">Dining</h1>
                        <div class="section-header--right">
                            <div class="form-horizontal">

                                <label for="sortBy" class="small--hide">Sort by</label>
                                <select name="sort_by" aria-describedby="a11y-refresh-page-message" id="sortBy">

                                    <option value="manual">Featured</option>

                                    <option value="best-selling" selected="selected">Best selling</option>

                                    <option value="title-ascending">Alphabetically, A-Z</option>

                                    <option value="title-descending">Alphabetically, Z-A</option>

                                    <option value="price-ascending">Price, low to high</option>

                                    <option value="price-descending">Price, high to low</option>

                                    <option value="created-ascending">Date, old to new</option>

                                    <option value="created-descending">Date, new to old</option>

                                </select>
                            </div>

                            <script>
                                Shopify.queryParams = {};
                                if (location.search.length) {
                                    for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i <
                                        aCouples.length; i++) {
                                        aKeyValue = aCouples[i].split('=');
                                        if (aKeyValue.length > 1) {
                                            Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(
                                                aKeyValue[1]);
                                        }
                                    }
                                }

                                $(function () {
                                    $('#sortBy')
                                        // select the current sort order
                                        .val('best-selling')
                                        .bind('change', function () {
                                            Shopify.queryParams.sort_by = jQuery(this).val();
                                            location.search = jQuery.param(Shopify.queryParams).replace(
                                                /\+/g, '%20');
                                        });
                                });
                            </script>



                            <div class="collection-view">
                                <a title="Grid view" class="change-view collection-view--active" data-view="grid">
                                    <span class="icon icon-collection-view-grid"></span>
                                </a>
                                <a title="List view" class="change-view" data-view="list">
                                    <span class="icon icon-collection-view-list"></span>
                                </a>
                            </div>

                            <script>
                                function replaceUrlParam(url, paramName, paramValue) {
                                    var pattern = new RegExp('(' + paramName + '=).*?(&|$)'),
                                        newUrl = url.replace(pattern, '$1' + paramValue + '$2');
                                    if (newUrl == url) {
                                        newUrl = newUrl + (newUrl.indexOf('?') > 0 ? '&' : '?') + paramName + '=' +
                                            paramValue;
                                    }
                                    return newUrl;
                                }

                                $(function () {
                                    $('.change-view').on('click', function () {
                                        var view = $(this).data('view'),
                                            url = document.URL,
                                            hasParams = url.indexOf('?') > -1;

                                        if (hasParams) {
                                            window.location = replaceUrlParam(url, 'view', view);
                                        } else {
                                            window.location = url + '?view=' + view;
                                        }
                                    });
                                });
                            </script>

                            <button id="toggleFilters" class="btn btn--small right toggle-filters">Filters</button>

                        </div>
                    </header>


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
                                                    data-aspectratio="1.0" data-sizes="auto" alt="<?php echo $product['title'] ?>"
                                                    data-srcset="<?php echo $product['featured_image'] ?> 2048w"
                                                    sizes="227px"
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
        </div>
    </div>
</main>

<?php include_once('../includes/footer.php'); ?>