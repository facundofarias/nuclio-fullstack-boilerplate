INSERT INTO users (id, email, username, first_name, last_name, bio, email_verified_at, password, remember_token, created_at, updated_at, city_id) VALUES (1, 'test@test.com', 'testuser1', 'Test', 'User', 'I am a Test User', '2020-07-06 12:53:37', 'test123', null, '2020-07-06 12:53:46', '2020-07-06 12:53:48', 1);
INSERT INTO users (id, email, username, first_name, last_name, bio, email_verified_at, password, remember_token, created_at, updated_at, city_id) VALUES (2, 'another@test.com', 'anothertest', 'Another', 'Test', 'Another Test', '2020-07-06 19:49:39', 'test', null, '2020-07-06 19:49:47', '2020-07-06 19:49:50', 1);

INSERT INTO tags (id, tag, created_at, updated_at) VALUES (1, 'nature', '2020-08-30 17:07:32', '2020-08-30 17:07:34');
INSERT INTO tags (id, tag, created_at, updated_at) VALUES (2, 'cars', '2020-08-30 17:07:32', '2020-08-30 17:07:34');
INSERT INTO tags (id, tag, created_at, updated_at) VALUES (3, 'transportation', '2020-08-30 17:07:32', '2020-08-30 17:07:34');
INSERT INTO tags (id, tag, created_at, updated_at) VALUES (4, 'other', '2020-08-30 17:07:32', '2020-08-30 17:07:34');

INSERT INTO boards (id, name, description, created_at, updated_at, user_id) VALUES (1, 'Nature', 'This is a nature board', '2020-07-06 12:54:29', '2020-07-06 12:54:31', 1);
INSERT INTO boards (id, name, description, created_at, updated_at, user_id) VALUES (2, 'Shopping', 'This is a shopping list and ideas', '2020-07-06 12:55:00', '2020-07-06 12:55:02', 1);
INSERT INTO boards (id, name, description, created_at, updated_at, user_id) VALUES (5, 'Gadgets', 'Gadget board', '2020-07-06 19:56:24', '2020-07-06 19:56:27', 2);
INSERT INTO boards (id, name, description, created_at, updated_at, user_id) VALUES (6, 'Test Board name', null, '2020-07-06 18:39:25', '2020-07-06 18:39:25', null);
INSERT INTO boards (id, name, description, created_at, updated_at, user_id) VALUES (7, 'Test Board name', 'Test Board description', '2020-07-06 18:49:00', '2020-07-06 18:49:00', 1);
INSERT INTO boards (id, name, description, created_at, updated_at, user_id) VALUES (8, 'Test Board name', 'Test Board description', '2020-07-06 18:58:37', '2020-07-06 18:58:37', 1);
INSERT INTO boards (id, name, description, created_at, updated_at, user_id) VALUES (9, 'Test Board name 2', 'Test Board description 2', '2020-07-06 19:20:08', '2020-07-06 19:20:08', 1);
INSERT INTO boards (id, name, description, created_at, updated_at, user_id) VALUES (10, 'Test Board name 2', 'Test Board description 2', '2020-07-06 19:37:54', '2020-07-06 19:37:54', 1);
INSERT INTO boards (id, name, description, created_at, updated_at, user_id) VALUES (12, 'TEST', 'Test Board description 2', '2020-07-13 17:49:20', '2020-07-13 17:49:20', 2);

INSERT INTO pins (id, note, color, media_url, created_at, updated_at, board_id) VALUES (1, 'Nature Image 1', 'Green', 'https://images.pexels.com/photos/257360/pexels-photo-257360.jpeg', '2020-07-06 12:56:31', '2020-07-06 12:56:33', 1);
INSERT INTO pins (id, note, color, media_url, created_at, updated_at, board_id) VALUES (2, 'Nature Image 2', 'Green', 'https://i.pinimg.com/736x/50/df/34/50df34b9e93f30269853b96b09c37e3b.jpg', '2020-07-06 12:56:54', '2020-07-06 12:56:56', 1);
INSERT INTO pins (id, note, color, media_url, created_at, updated_at, board_id) VALUES (3, 'Xiaomi Scooter', 'Red', 'https://www.powerplanetonline.com/cdnassets/xiaomi_mi_electric_scooter_m365_negro_05_ad_l.jpg', '2020-07-06 12:58:09', '2020-07-06 12:58:11', 2);
INSERT INTO pins (id, note, color, media_url, created_at, updated_at, board_id) VALUES (6, 'Test Pin', 'Blue', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1920px-Image_created_with_a_mobile_phone.png', '2020-07-06 20:04:10', '2020-07-06 20:04:10', 1);
INSERT INTO pins (id, note, color, media_url, created_at, updated_at, board_id) VALUES (7, 'Bla bla bla', 'Light Green', 'https://cdn.motor1.com/images/mgl/zZnP8/s1/2020-rimac-c-two.jpg', '2020-07-13 13:39:12', '2020-07-13 13:39:12', 2);
INSERT INTO pins (id, note, color, media_url, created_at, updated_at, board_id) VALUES (10, 'Test Pin', 'Blue', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1920px-Image_created_with_a_mobile_phone.png', '2020-07-14 14:43:44', '2020-07-14 14:43:44', 1);

INSERT INTO pin_tag (id, created_at, updated_at, pin_id, tag_id) VALUES (1, '2020-08-30 17:07:32', '2020-08-30 17:07:32', 1, 1);
INSERT INTO pin_tag (id, created_at, updated_at, pin_id, tag_id) VALUES (2, '2020-08-30 17:07:32', '2020-08-30 17:07:32', 2, 1);
INSERT INTO pin_tag (id, created_at, updated_at, pin_id, tag_id) VALUES (3, '2020-08-30 17:07:32', '2020-08-30 17:07:32', 3, 3);

INSERT INTO cities (id, name, country, created_at, updated_at) VALUES (1, 'Barcelona', 'Spain', '2020-08-31 19:04:52', '2020-08-31 19:04:53');
