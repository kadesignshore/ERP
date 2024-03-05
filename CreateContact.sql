-- SQLite
CREATE TABLE IF NOT EXISTS contacts (
    id INTEGER PRIMARY KEY,
    first_name TEXT NOT NULL,
    last_name TEXT NOT NULL,
    email TEXT,
    phone_number TEXT,
    address TEXT
);

