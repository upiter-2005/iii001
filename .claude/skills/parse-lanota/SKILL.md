---
name: parse-lanota
description: Go to the link belong to lanota.com.ua site and go through the each element (product) which contain .catalogGrid class and parse there information about product
---

The user may have supplied a category link or array of links after the `/parse-lanota` command.

After opening each product page you should find:

 1. title product data from H1 tag
 2. product category or categories which you shoul collect from each .breadcrumbs-i>span  element exept the first two items and 1 last (they will consist of ukrainian words )
 3. price value without 'грн' which is in .product-price__item--new element
 4. description data which exist in ".product-description"  element and contains full description (you should copy it with tags markdown html). Also you can find youtube video and arrange all in one section
 5. product brand which is in last but one .gallery__product-logo element in area-label
 6. get (download) pictures from product galary which are in .tmGallery-frame-wrap element. If images have a watermark lanota you will skip this producy for adding.



 After you collect all data you should go to the 'woo-product' skill

 Don't ask about pagination, don't use it and parse the only page I will send in skill argument
