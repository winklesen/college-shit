CREATE TABLE ecashier.vendor_contact(
    `id` INT NOT NULL AUTO_INCREMENT, 
    fullname CHAR(104) NULL DEFAULT NULL, 
    email VARCHAR(104) NULL DEFAULT NULL, 
    phone VARCHAR(15) NULL DEFAULT NULL, 
    descriptions TEXT NULL DEFAULT NULL, 
    PRIMARY KEY (`id`)
    )