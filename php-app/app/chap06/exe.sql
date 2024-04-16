-- docker exec -it php-apache bash -c "mysql -u root -p < /php-app/app/chap06/exe.sql"で動かしたい

CREATE TABLE IF NOT EXISTS products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    category_id INT NOT NULL
);

CREATE TABLE IF NOT EXISTS category (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(255) NOT NULL
);


-- 商品 'Jeans' のカテゴリIDを更新
UPDATE products
SET category_id = 4
WHERE product_name = 'Jeans';

select * from products where product_id = 4  for share;
-- 排他ロックも行の読み取りは可能、FOR UPDATE,FOR SHARE付きのステートメントは実行できない
UPDATE category
RIGHT JOIN products ON products.category_id = category.category_id
SET products.category_id = 3
WHERE products.product_name = 'T-shirt';

-- ロックはproductsテーブルに対して欠けているが、↓はタイムアウトになる
UPDATE category JOIN products ON products.category_id = category.category_id
SET category.category_name = 'T-shirt'
WHERE products.product_name = 'T-shirt';