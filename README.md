


CREATE TABLE clients (
    id serial PRIMARY KEY,
    name varchar(100) NOT NULL UNIQUE
);

CREATE TABLE categories (
    id serial PRIMARY KEY,
    name varchar(100) NOT NULL,
    client_id INT REFERENCES clients(id),
    rate INT 
);

CREATE TABLE activities (
    id serial PRIMARY KEY,
    clock_in INT NOT NULL,
    clock_out INT,
    comment text
    init_date TIMESTAMP DEFAULT now(),
);

CREATE TABLE activity_category (
    activity_id INT REFERENCES activities(id),
    category_id INT REFERENCES categories(id),
    init_date TIMESTAMP DEFAULT now(),
    last_update TIMESTAMP DEFAULT now()
);