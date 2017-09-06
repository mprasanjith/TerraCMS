
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
    Country VARCHAR(30)
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
    viewCount INT ,
    pageURL VARCHAR (100)
);

CREATE TABLE Projects(
	projectId INT PRIMARY KEY AUTO_INCREMENT,
    projectName VARCHAR (50),
    description VARCHAR (100),
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
    itemName VARCHAR (40),
    itemType VARCHAR (20),
    itemURL VARCHAR (50)
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


