---
name: parse-link
description: Go to the link belong to aimusic.com.ua site and go through the each element (product) which contain .catalog-grid__item class and parse there information about product
---

The user may have supplied a category link after the `/parse-link` command.

After opening each product page you should find:
 - title product data
 - product category or categories which you shoul collect from each .breadcrumbs-i>a>span element exept the first one (they will consist of ukrainian words )
 - price value without 'грн' which is in .priceCurrency element
 - description data which exist in "product__group-item j-product-block j-product-block__list-item" class element and contains full description with word "Опис" (you should copy it with tags markdown html). So don't pull out short description.

 - product brand which is in .gallery__product-logo j-product-logo element in area-label
 - get (download) pictures from product galary which are in each .gallery-image element for futher upload to woocommerce product page

 After you collect all data you should go to the 'woo-product' skill

 Don't ask about pagination, iwe don't use it and parse the only page I will send in skill argument
