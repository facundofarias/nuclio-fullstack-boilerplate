CREATE TABLE tags
(
    id          bigint unsigned auto_increment,
    tag         varchar(255)        not null,
    created_at  timestamp           null,
    updated_at  timestamp           null,
    pin_id      bigint unsigned     null,
    PRIMARY KEY(id),
    CONSTRAINT tags_pins_id_fk
        FOREIGN KEY (pin_id) REFERENCES pins (id)
);
