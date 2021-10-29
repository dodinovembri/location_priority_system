# Users
Users table.

```sql
CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NULL,
	email VARCHAR(50) NULL,
    password VARCHAR(50) NULL,
    role_id TINYINT NULL,
	PRIMARY KEY (id)
);
```

## Role
| Code | Name |
| ---- | ---- |
| 0 | Administrator |
| 1 | Kepala Seksi |
| 2 | Staff Dinas Kesehatan |
| 3 | Petugas Puskesmas |
