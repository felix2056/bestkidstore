<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<?php require_once('../products/db/baby-girls_cat.php'); ?>


<?php
    $products = json_decode(getAllBabyGirls(), true);
?>

<div class="page-container drawer-page-content" id="PageContainer">
  <main class="main-content" id="MainContent" role="main">
    <div id="shopify-section-collection-template" class="shopify-section">
      <div data-section-id="collection-template" data-section-type="collection-template">
        <header class="collection-header">
          <div class="page-width">
            <div class="section-header text-center">
              <h1>Baby Girl</h1>
            </div>
          </div>

          <div class="filters-toolbar-wrapper">
            <div class="page-width">
              <div class="filters-toolbar">
                <div class="filters-toolbar__item">
                  <label for="SortTags" class="label--hidden">Filter</label>
                  <select class="filters-toolbar__input filters-toolbar__input--filter" name="SortTags" id="SortTags"
                    style="width: 98px;">
                    <option value="">Filter</option>
                    <option value="/collections/baby-girl/bgirl">bgirl</option>
                  </select>
                </div>


                <div class="filters-toolbar__item filters-toolbar__item--count">
                  <span class="filters-toolbar__product-count">14 products</span>
                </div>


                <div class="filters-toolbar__item text-right"><label for="SortBy" class="label--hidden">Sort</label>
                  <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort"
                    style="width: 90px;">

                    <option value="title-ascending" selected="selected">Sort</option>

                    <option value="manual">Featured</option>



                    <option value="title-ascending">Alphabetically, A-Z</option>


                    <option value="title-descending">Alphabetically, Z-A</option>


                    <option value="price-ascending">Price, low to high</option>


                    <option value="price-descending">Price, high to low</option>


                    <option value="created-descending">Date, new to old</option>


                    <option value="created-ascending">Date, old to new</option>


                  </select>
                  <input id="DefaultSortBy" type="hidden" value="best-selling">
                </div>

              </div>
            </div>
          </div>

        </header>

        <?php if (count($products) > 0) : ?>
        <div class="page-width" id="Collection">
          <div class="grid grid--uniform grid--view-items">
            <?php foreach ($products as $product) : ?>
            <div class="grid__item grid__item--collection-template small--one-half medium-up--one-quarter">
              <div class="grid-view-item">
                <a class="grid-view-item__link grid-view-item__image-container"
                  href="/products/single.php?product=<?php echo $product['id'] ?>">

                  <div id="ProductCardImageWrapper-collection-template-2072545001570"
                    class="grid-view-item__image-wrapper js">
                    <div style="padding-top:125.0877193%;">
                      <img id="ProductCardImage-collection-template-2072545001570"
                        class="grid-view-item__image lazyautosizes lazyloaded"
                        src="<?php echo $product['featured_image'] ?>"
                        data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                        data-aspectratio="0.7994389901823282" data-sizes="auto" alt="<?php echo $product['title'] ?>"
                        data-srcset="<?php echo $product['featured_image'] ?> 2048w" sizes="200px"
                        srcset="<?php echo $product['featured_image'] ?> 2048w">
                    </div>
                  </div>

                  <noscript>

                    <img class="grid-view-item__image" src="<?php echo $product['featured_image'] ?>"
                      alt="<?php echo $product['title'] ?>" style="max-width: 199.85974754558205px;">
                  </noscript>

                  <div class="h4 grid-view-item__title"><?php echo $product['title'] ?></div>

                  <div class="grid-view-item__meta">
                    <!-- snippet/product-price.liquid -->
                    <span class="visually-hidden">Regular price</span>
                    <s class="product-price__price"><?php echo $product['price'] ?></s>
                    <span class="product-price__price product-price__sale">
                      <?php echo $product['sale_price'] ?>
                      <span class="product-price__sale-label">Sale</span>
                    </span>
                  </div>
                </a>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </main>

  <?php include_once('../includes/footer.php'); ?>
</div>