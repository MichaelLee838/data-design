<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Data Design</title>
	</head>
	<body>
		<h1>Data Design</h1>
		<h2>Persona</h2>
		<p>The persona of Albuquerque section or reddit is visitors or new residents of the city of Albuquerque.
			These are active, curious, people who are looking to explore what fun events and activities the city has to offer.
		</p>
		<h2>User Story</h2>
			<p>The user's role is that of a member of the Albuquerque community, either as a visitor or a new resident.
			The user's goal is to find recommendations regarding what to do, see, and visit in Albuquerque.
			</p>
		<<h2>Use Case/Interaction Flow</h2>
		<p>One specific goal a user could have on the website could be to post a question relating to Albuquerque.</p>
		<UL>
			<li>User accesses site</li>
			<li>Server sends page for browser to display</li>
			<li>User presses button labeled submit a text</li>
			<li>Server sends the page for text submission</li>
			<li>User types in title in the title form</li>
			<li>User types in text in the text form</li>
			<li>User clicks submit</li>
			<li>Server creates a page with the question listed at the top and creates a hyperlink to that
			page on the main page for Albuquerque</li>
		</UL>
		<h2>Conceptual Model</h2>
		<h3>Entities and Attributes</h3>
		<h4>Profile</h4>
		<UL>
			<li>profileID(primary key)</li>
			<li>profileEmail</li>
			<li>profileHash (for account password)</li>
			<li>profileSalt (for account password)</li>
		</UL>
		<h4>Post</h4>
			<UL>
				<li>postID(primary key)</li>
				<li>postprofileID(foreign key)</li>
				<li>postContent</li>
				<li>postdate</li>
			</UL>
		<h4>Comment</h4>
			<UL>
				<li>commentID(primary key)</li>
				<li>CommentProfileID(foreign key)</li>
				<li>commentpostID(foreign key)</li>
				<li>commentContent</li>
				<li>commentDate</li>
			</UL>
		<h3>Relations</h3>
		<OL>
			<li>One user can post many times(1 to n)</li>
			<li>Many users can comment on many posts(m to n)</li>
			<li>Many posts can have many comments(m to n)</li>
		</OL>
	</body>
</html>