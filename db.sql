DROP DATABASE GreenEarth;

CREATE DATABASE GreenEarth;
USE GreenEarth;

CREATE TABLE Users (
	userId INT PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(20),
    lastName VARCHAR(20),
	email VARCHAR(40),
    passwrd VARCHAR(50),
    Address_Line1 VARCHAR(50),
    Address_Line2 VARCHAR(50),
    City VARCHAR(50),
    Country VARCHAR(30),
    userType INT DEFAULT 0
);

CREATE TABLE ShopItems(
	itemCode INT PRIMARY KEY AUTO_INCREMENT,
    itemName VARCHAR(30),
    description VARCHAR(50),
    price INT,
    itemImage VARCHAR(40)
);
CREATE TABLE ShopOrders(
	orderId INT PRIMARY KEY AUTO_INCREMENT,
    userId INT,
    
    CONSTRAINT FK_1
    FOREIGN KEY (userId)
    REFERENCES Users(userId)
);


CREATE TABLE Order_Items(
	orderId INT PRIMARY KEY AUTO_INCREMENT,
    itemCode INT,
    quantity INT,
    
    CONSTRAINT FK_2
    FOREIGN KEY (itemCode)
    REFERENCES ShopItems(itemCode)
);

CREATE TABLE Pages(
	pageId INT PRIMARY KEY AUTO_INCREMENT,
    pageName VARCHAR (30),
    viewCount INT DEFAULT 0,
    pageURL VARCHAR (100)
);

CREATE TABLE Projects(
	projectId INT PRIMARY KEY AUTO_INCREMENT,
    projectName VARCHAR (50),
    description VARCHAR (500),
    pageId INT,
    
    CONSTRAINT FK_3
    FOREIGN KEY (pageId)
    REFERENCES Pages(pageId)
    );
    
CREATE TABLE Likes(
	likedId INT PRIMARY KEY AUTO_INCREMENT,
    userId INT,
    projectId INT,
    
    CONSTRAINT FK_4
    FOREIGN KEY (userId)
    REFERENCES Users(userId),
    
    CONSTRAINT FK_5
    FOREIGN KEY (projectId)
    REFERENCES Projects(projectId)
    
    
);

CREATE TABLE GalleryItems(
	galleryItemId INT PRIMARY KEY AUTO_INCREMENT,
    itemType VARCHAR (20),
    itemURL VARCHAR (100)
);


CREATE TABLE Comments(
	commentId INT PRIMARY KEY AUTO_INCREMENT,
    commentData VARCHAR (100),
    galleryItemId INT,
    userId INT,
    
    CONSTRAINT FK_6
    FOREIGN KEY (galleryItemId)
    REFERENCES GalleryItems(galleryItemId),
    
    CONSTRAINT FK_7
    FOREIGN KEY (userId)
    REFERENCES Users(userId)    
);


INSERT INTO `Pages` (`pageId`, `pageName`, `viewCount`, `pageURL`) VALUES
(1, 'Home Page', 0, '/'),
(2, 'Account', 0, '/account.php'),
(3, 'About', 0, '/about.php'),
(4, 'Work - Climate Change', 0, '/work/climate-change.php'),
(5, 'Work - Forests', 0, '/work/forests.php'),
(6, 'Work - Water', 0, '/work/water.php'),
(7, 'Work', 0, '/work.php'),
(8, 'Gallery', 0, '/gallery.php');
(9, 'Take Action', 0, '/take-action.php');

INSERT INTO `Users` VALUES
(1, 'Madusha', 'Prasanjith', 'mprasanjith@gmail.com', '123456', '123', 'ABC Lane', 'Colombo', 'Sri Lanka', 1);


INSERT INTO `Projects` (`projectId`, `projectName`, `description`, `pageId`) VALUES
(1, 'Fighting Global Warming', 'Our world is warmer than ever before, and people and wildlife are already suffering the consequences. But that''s nothing compared to what we''re leaving future generations if these trends continue. It''s time to stop the destruction and build the clean energy future we deserve.', 4),
(2, 'Protecting Forests', 'Forests are crucial for the health and well-being of people, wildlife and our planet. They''re home to roughly two-thirds of all land-dwelling plant and animal species, critical lifelines for communities big and small, and one of the last lines of defense against catastrophic climate change.', 5),
(3, 'Conserving Fresh Water', 'Water is life. It''s vital. It supports the immense diversity of life on Earth. It''s a source of food, health and energy. Fresh water makes civilization possible. But fresh water, in turn, isn''t possible without a healthy planet - and human actions are putting a healthy planet at risk.', 6);

INSERT INTO `GalleryItems` (`itemType`, `itemURL`) VALUES
('image', '/resources/images/content/gallery-1.jpg'),
('image', '/resources/images/content/gallery-2.jpg'),
('image', '/resources/images/content/gallery-3.jpg'),
('image', '/resources/images/content/gallery-4.jpg'),
('image', '/resources/images/content/gallery-5.jpg'),
('image', '/resources/images/content/gallery-6.jpg'),
('image', '/resources/images/content/gallery-7.jpg'),
('image', '/resources/images/content/gallery-8.jpg'),
('video', 'EMyd4rwEkp4'),
('video', 'PVu65ZTJBSk');

INSERT INTO `Comments` (`commentData`, `galleryItemId`, `userId`) VALUES
('This is a test comment.', 1, 1),
('This is another test comment.', 1, 1),
('This is yet another test comment.', 1, 1);
