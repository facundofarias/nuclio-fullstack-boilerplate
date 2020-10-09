ALTER TABLE users
    ADD COLUMN city_id bigint unsigned null;
    -- ADD CONSTRAINT users_cities_id_fk FOREIGN KEY (city_id) REFERENCES cities (id);
