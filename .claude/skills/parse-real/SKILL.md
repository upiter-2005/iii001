---
name: parse-real
description: Go to the link belong to http://www.realmusic.ua/ site and go through the each tr element (product) which contain table  and parse there information about product
---

The user may have supplied a category link or array of links after the `/parse-real` command.

After opening each product page you should find:

 1. title product data 
 2. product category or categories which you shoul collect from each .read__crumbs-link>a  element exept the first one and 2 last (they will consist of ukrainian words )
 3. price value without 'грн' 
 4. description data with haractiristics
 5. product brand  
 6. get (download) pictures from product galary 



 After you collect all data you should go to the 'woo-product' skill

 Don't ask about pagination, don't use it and parse the only page I will send in skill argument
