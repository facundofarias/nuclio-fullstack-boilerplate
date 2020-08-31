CREATE TABLE pin_tag
(
    id          bigint unsigned auto_increment,
    created_at  timestamp           null,
    updated_at  timestamp           null,
    pin_id      bigint unsigned     null,
    tag_id      bigint unsigned     null,
    PRIMARY KEY(id),
    CONSTRAINT pin_tag_pins_id_fk
        FOREIGN KEY (pin_id) REFERENCES pins (id),
    CONSTRAINT pin_tag_tags_id_fk
        FOREIGN KEY (tag_id) REFERENCES tags (id)
);
