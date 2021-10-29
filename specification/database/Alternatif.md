# Alternatif
Alternatif table.

```sql
CREATE TABLE alternatif (
	id INT NOT NULL AUTO_INCREMENT,
    id_jenis_alternatif INT NOT NULL,
	kode_alternatif VARCHAR(100) NULL,
	nama_alternatif VARCHAR(100) NULL,
   	keterangan TEXT NULL,
	PRIMARY KEY (id)
);
```