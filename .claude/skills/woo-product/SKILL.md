---
name: woo-product
description: Adding a product to muzeconom.com.ua site via rest api 

---

After you have collected a product data which consist of title, description (html markdown), brand attribute, categories and images

- you need to upload product and product image one by one forming a post request via rest api
- every brand you can check for the id and find it in './structures/brand.json' file which should be equal to "name" prop in json file and if you can't find brand you can add new brand 
- every category should be equal and added according   './structures/categories.json' file which should be equal to "name" prop in json file, then you can fin its id and assert to product (we can have multiple amount of categories)
- aslo you insert values to the description title and price field
- price field should be lower by 4%

- if you encounter with not exist brand you can add it automaticaly to attributes => brands
- before create product check is product exist or nor and you shouldn't create product if it exists

Product object instance you can see on './structures/product.json' file