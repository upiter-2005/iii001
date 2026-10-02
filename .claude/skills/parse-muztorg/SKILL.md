---
name: parse-muztorg
description: Go to the link belong to muztorg.ua site and go through the each element (product) which contain .products class and parse there information about product
---

The user may have supplied a category link or array of links after the `/parse-muztorg` command.

After opening each product page you should find:

 1. title product data from H1 tag
 2. product category or categories which you shoul collect from each .breadcrumb>a  element exept the first one (they will consist of ukrainian words )
 3. price value without 'грн' which is in .price element
 4. description data which exist in "#tab-specification" "#tab-description" element and contains full description (you should copy it with tags markdown html). Also you can find youtube video and arrange all this("#tab-specification" + "#tab-description" + video ) in one section
 5. product brand which is in  .brand-image>img alt prop element 
 6. get (download) pictures from product galary which are in each .swiper-slide>img element with for futher upload to woocommerce product page. If you find out watermark on pictures  you don't get this image



 After you collect all data you should go to the 'woo-product' skill

 Don't ask about pagination, don't use it and parse the only page I will send in skill argument
