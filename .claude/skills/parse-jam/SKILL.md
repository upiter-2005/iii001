---
name: parse-jam
description: Go to the link belong to jam.ua site and go through the each element (product) which contain .catalog_section class and parse there information about product
---

The user may have supplied a category link or array of links after the `/parse-jam` command.

After opening each product page you should find:

 1. title product data from H1 tag
 2. product category or categories which you shoul collect from each .read__crumbs-link>a  element exept the first one and 2 last (they will consist of ukrainian words )
 3. price value without 'грн' which is in .product-main-price element
 4. description data which exist in "#description" "#characteristics" element and contains full description (you should copy it with tags markdown html). Also you can find youtube video and arrange all this("#description" + "#characteristics" + video ) in one section
 5. product brand which is in last but one .read__crumbs-link>a element 
 6. get (download) pictures from product galary which are in each .product-slider-img__wrap>a element with data-fancybox="gallery1" for futher upload to woocommerce product page. If you find out watermark on pictures with JAM symbols you don't get this image



 After you collect all data you should go to the 'woo-product' skill

 Don't ask about pagination, don't use it and parse the only page I will send in skill argument
