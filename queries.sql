-- Shipping Method

	-- Gratis bezorging
	SELECT COUNT(*)
	FROM wp_woocommerce_order_items
	WHERE order_item_type = "Shipping"
	AND order_item_name = "Gratis bezorging";

	-- Bezorgen
	SELECT COUNT(*)
	FROM wp_woocommerce_order_items
	WHERE order_item_type = "Shipping"
	AND order_item_name = "Bezorgen";

-- Location

	SELECT meta_value
	FROM wp_postmeta
	WHERE meta_key = "_billing_city";