DROP TABLE IF EXISTS PROFILE;
DROP TABLE IF EXISTS POST;
DROP TABLE IF EXISTS COMMENT;

CREATE TABLE profile (
	-- this creates the attribute for the primary key
	-- not null means the attribute is required!
	profileId BINARY(16) NOT NULL,
	-- to make sure duplicate data cannot exist, create a unique index
	profileEmail VARCHAR(128) NOT NULL,
	-- to make something optional, exclude the not null
	profileHash	CHAR(128) NOT NULL,
	profileSalt CHAR(64) NOT NULL,
	UNIQUE(profileEmail),
	UNIQUE(profileAtHandle),
	-- this officiates the primary key for the entity
	PRIMARY KEY(profileId)
);

-- create the post entity
CREATE TABLE post (
	-- this is for yet another primary key...
	postId BINARY(16) NOT NULL,
	-- this is for a foreign key
	tweetProfileId BINARY(16) NOT NULL,
	postContent VARCHAR(140) NOT NULL,
	-- notice dates don't need a size parameter
	postDate DATETIME(6) NOT NULL,
	-- this creates an index before making a foreign key
	INDEX(PostProfileId),
	-- this creates the actual foreign key relation
	FOREIGN KEY(PostProfileId) REFERENCES profile(profileId),
	-- and finally create the primary key
	PRIMARY KEY(PostId)
);

-- create the like entity (a weak entity from an m-to-n for profile --> tweet)
CREATE TABLE comment (
	-- these are still foreign keys
	commentProfileId BINARY(16) NOT NULL,
	commentPostId BINARY(16) NOT NULL,
	commentDate DATETIME(6) NOT NULL,
	-- index the foreign keys
	INDEX(commentProfileId),
	INDEX(commentPostId),
	-- create the foreign key relations
	FOREIGN KEY(commentProfileId) REFERENCES profile(profileId),
	FOREIGN KEY(commentPostId) REFERENCES tweet(tweetId),
	-- finally, create a composite foreign key with the two foreign keys
	PRIMARY KEY(commentProfileId, commentPostId)
);