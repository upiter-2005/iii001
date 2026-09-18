---
name: parse-light
description: Go to the link belong to lightekstore.com.ua site and go through the each element (product) which contain in .products-list class and parse there information about product
---

The user may have supplied a category link or array of links after the `/parse-light` command.

After opening each product page you should find:

 1. title product data from H1 tag
 2. product category or categories which you shoul collect from each .breadcrumbs__link  element exept the first 2 and 1 last (they will consist of ukrainian words )
 3. price value without 'грн' which is in .product-card__price-main bold element
 4. description data which exist in ".product-page__content" and ".product-section product-section--chars" element and contains full description (you should copy it with tags markdown html). Also you can find youtube video and arrange all this(".product-page__content" and ".product-section product-section--chars"+ video ) in one section
 5. product brand which is in aria-label of .product-card__brand element 
 6. get (download) pictures from product galary which are in  .product-gallery--main element 



 After you collect all data you should go to the 'woo-product' skill

 Don't ask about pagination, don't use it and parse the only page I will send in skill argument
