CREATE TABLE IF NOT EXISTS tags
(
    id          bigint unsigned auto_increment,
    tag         varchar(255)        not null,
    created_at  timestamp           null,
    updated_at  timestamp           null,
    PRIMARY KEY(id)
);
