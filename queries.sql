-- Products

	SELECT post_title, meta_value
	FROM wp_postmeta, wp_posts
	WHERE wp_posts.ID = wp_postmeta.post_id
	AND post_status = 'publish'
	AND post_type = 'product'
	AND meta_key = '_price'
	ORDER BY post_title;

	SELECT post_title, meta_value
	FROM wp_postmeta, wp_posts
	WHERE wp_posts.ID = wp_postmeta.post_id
	AND post_status = 'publish'
	AND post_type = 'product'
	AND meta_key = '_price'
	ORDER BY post_title;

-- Shipping Method

	-- Gratis bezorging
	SELECT COUNT(*) as Aantal
	FROM wp_woocommerce_order_items
	WHERE order_item_type = 'Shipping'
	AND order_item_name = 'Gratis bezorging';

	-- Bezorgen
	SELECT COUNT(*) as Aantal
	FROM wp_woocommerce_order_items
	WHERE order_item_type = 'Shipping'
	AND order_item_name = 'Bezorgen';

-- Location

	SELECT DISTINCT meta_value
	FROM wp_postmeta
	WHERE meta_key = '_billing_city';

	SELECT meta_value, COUNT(*) as Aantal
	FROM wp_postmeta
	WHERE meta_key = '_billing_city'
	GROUP BY meta_value
	ORDER BY Aantal DESC;