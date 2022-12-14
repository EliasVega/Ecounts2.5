DELIMITER //
CREATE TRIGGER upd_stock_purchase AFTER INSERT ON product_purchases
FOR EACH ROW
BEGIN
    UPDATE products SET stock = stock + NEW.quantity
    WHERE products.id = NEW.product_id;
END
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER tr_upd_price_purchase BEFORE INSERT ON product_purchases
FOR EACH ROW BEGIN
UPDATE products SET price = (stock * price + NEW.quantity * NEW.price) / (stock + NEW.quantity)
WHERE products.id = NEW.product_id;
END
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER tr_upd_stock_ncpurchase AFTER INSERT ON ncpurchase_products
FOR EACH ROW
BEGIN
    UPDATE products SET stock = stock + NEW.quantity
    WHERE products.id = NEW.product_id;
END
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER upd_price_ncpurchase BEFORE INSERT ON ncpurchase_products
FOR EACH ROW BEGIN
UPDATE products SET price = (stock * price + NEW.quantity * NEW.price) / (stock + NEW.quantity)
WHERE products.id = NEW.product_id;
END
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER tr_upd_stock_ndpurchase AFTER INSERT ON ndpurchase_products
FOR EACH ROW
BEGIN
    UPDATE products SET stock = stock - NEW.quantity
    WHERE products.id = NEW.product_id;
END
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER upd_price_ndpurchase BEFORE INSERT ON ndpurchase_products
FOR EACH ROW BEGIN
UPDATE products SET price = (stock * price - NEW.quantity * NEW.price) / (stock - NEW.quantity)
WHERE products.id = NEW.product_id;
END
//
DELIMITER ;



DELIMITER //
CREATE TRIGGER tr_updStockInvoice AFTER INSERT ON invoice_products
FOR EACH ROW BEGIN
UPDATE products SET stock = stock - NEW.quantity
WHERE products.id = NEW.product_id;
END
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER tr_updStock_ncinvoice AFTER INSERT ON ncinvoice_products
FOR EACH ROW BEGIN
UPDATE products SET stock = stock + NEW.quantity
WHERE products.id = NEW.product_id;
END
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER tr_updStock_product AFTER INSERT ON ndinvoice_products
FOR EACH ROW BEGIN
UPDATE products SET stock = stock - NEW.quantity
WHERE products.id = NEW.product_id;
END
//
DELIMITER ;
/*
DELIMITER //
CREATE TRIGGER tr_updStock_BPnc AFTER INSERT ON ncinvoice_products
FOR EACH ROW BEGIN
UPDATE branch_products SET stock = stock + NEW.quantity
WHERE branch_products.branch_id = NEW.product_id;
WHERE branch_products.product_id = NEW.product_id;
END
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER tr_updStock_BPnd AFTER INSERT ON ndinvoice_products
FOR EACH ROW BEGIN
UPDATE branch_products SET stock = stock - NEW.quantity
WHERE branch_products.product_id = NEW.product_id;
END
//
DELIMITER ;*/

DELIMITER //
CREATE TRIGGER tr_updStock_BalanceO AFTER INSERT ON pay_orders
FOR EACH ROW BEGIN
UPDATE orders SET balance = balance - NEW.pay
WHERE orders.id = NEW.order_id;
END
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER tr_updStock_BalanceI AFTER INSERT ON pay_invoices
FOR EACH ROW BEGIN
UPDATE invoices SET balance = balance - NEW.pay
WHERE invoices.id = NEW.invoice_id;
END
//
DELIMITER ;
