CREATE TABLE produkty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazov VARCHAR(255) NOT NULL,
    cena DECIMAL(10,2) NOT NULL,
    mnozstvo INT NOT NULL,
    popis TEXT
);
