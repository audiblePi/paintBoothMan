//get product id and category_id
SELECT `TABLE 109`.category_name, jos_vm_product.product_sku
FROM `TABLE 109`
INNER JOIN `jos_vm_product` on `TABLE 109`.product_id = jos_vm_product.product_id;

SELECT `TABLE 109`.category_name, jos_vm_product.product_sku
FROM `TABLE 109`
INNER JOIN `jos_vm_product` on `TABLE 109`.product_id = jos_vm_product.product_id;

SELECT jos_vm_product_category_xref.product_id, jos_vm_category_xref.category_parent_id
FROM jos_vm_product_category_xref
INNER JOIN `jos_vm_category_xref` on jos_vm_product_category_xref.category_id = jos_vm_category_xref.category_child_id;

SELECT `TABLE 110`.product_id, jos_vm_category.category_name
FROM `TABLE 110`
INNER JOIN jos_vm_category on `TABLE 110`.category_parent_id = jos_vm_category.category_id;

SELECT `TABLE 109`.category_name, jos_vm_product.product_sku
FROM `TABLE 109`
INNER JOIN `jos_vm_product` on `TABLE 109`.product_id = jos_vm_product.product_id;

SELECT jos_vm_product_category_xref.product_id, jos_vm_category.category_name
FROM jos_vm_product_category_xref
INNER JOIN jos_vm_category on jos_vm_product_category_xref.category_id = jos_vm_category.category_id;