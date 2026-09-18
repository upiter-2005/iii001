---
name: parse-muzicr
description: Go to the link belong to muziker.ua site and go through the each element (product) which contain .js-products-wrap class and parse there information about product
---

The user may have supplied a category link or array of links after the `/parse-muzicr` command.

After opening each product page you should find:

 1. title product data from .product-title element
 2. product category or categories which you shoul collect from each .mzkr-breadcrumb__item>a>  element exept the first one. Also user can define appropriate category in addition message
 3. price value without 'грн' which is in .product-price nested elements should be rised by 10%
 4. description data which exist in .product-description-content class element and #product-params. Don't use images in description and skip them. English description in .product-description-content element has to translate to Ukraine language.
 5. product brand which is in .product-brand-link>a element
 6. get (download) pictures from product galary when you are clicking on galary pictures you will be able to find big pictures in .lg-object.lg-image class element


 If product is not in store and has a price you add it 

 Also check product variations that placed in .js-image-product-selector-item buttons, so you can click on them and dive to new product link. Then you have to parse it too and add to muzeconom.com.ua via 'woo-product' skill 

 After you collect all data you should go to the 'woo-product' skill

 Don't ask about pagination, don't use it and parse the only page I will send in skill argument
  