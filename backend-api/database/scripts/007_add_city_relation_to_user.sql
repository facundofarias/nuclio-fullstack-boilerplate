ALTER TABLE users
    ADD city_id bigint unsigned null,
    ADD CONSTRAINT users_cities_id_fk
    FOREIGN KEY (city_id) REFERENCES cities (id);

# UPDATE users SET created_at = NOW()
# WHERE created_at IS NULL;
