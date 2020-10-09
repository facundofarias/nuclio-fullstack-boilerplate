CREATE TABLE IF NOT EXISTS pins
(
    id          bigint unsigned auto_increment,
    note        varchar(255)        not null,
    color       varchar(255)        null,
    media_url   varchar(999)        null,
    created_at  timestamp           null,
    updated_at  timestamp           null,
    board_id    bigint unsigned     null,
    PRIMARY KEY(id),
    CONSTRAINT pins_boards_id_fk
        FOREIGN KEY (board_id) REFERENCES boards (id)
);
