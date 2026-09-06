---
name: parse-soundstore
description: Go to the link belong to soundstore.com.ua site and go through the each element (product) which contain .catalogGrid class and parse there information about product
---

The user may have supplied a category link or array of links after the `/parse-soundstore` command.

After opening each product page you should find:

 1. title product data from H1 tag
 2. product category or categories which you shoul collect from each .breadcrumbs-i>a>span  element exept the first one and last one
 3. price value without 'грн' which is in .product-price__item.product-price__item--new
 4. description data which exist in .product__group-item class element. Don't use images in description and skip them.
 5. product brand which is in .gallery__produ ct-logo.j-product-logo element in aria-label attribute
 6. get (download) pictures from product galary which are in each .gallery__item.swiper-slide-active>span>img 


 If product is not in store you add it if it has a price

 After you collect all data you should go to the 'woo-product' skill

 Don't ask about pagination, don't use it and parse the only page I will send in skill argument
  