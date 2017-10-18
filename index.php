<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Data Design</title>
	</head>
	<body>
		<h1>Data Design</h1>
		<h2>Persona</h2>
		<h3>George</h3>
		<img src ="http://www.tamuc.edu/communityOutreach/hispanicOutreach/images/headers/glasses.jpg">
		<p>George is a freshman at the University of New Mexico, main campus.  He is undeclared but
			learning towards a major in mathematics since he enjoyed his mathematics classes in high school
			tremendously.  Also, his parents work in related occupations, his dad as an actuary and his
			mom as a biologist.</p>

		<p>Although a hardworking student, George enjoys his time outside of his studies as well.
			He enjoys the hobbies of rock climbing, ballroom dancing and gardening.  In fact he even
			works at the UNM community garden as a volunteer, helping to oversee the overall adminisration of the
			garden. </p>

			<p>As such, on weeekends, George enjoys taking two full days away from his studying to relax.
		   Since he enjoys researching ideas for his weekends, George somtimes turns to reddit's Albuquerque
		   page in the middle of the week for ideas on how to spend his time.  </p>

		<h3>Needs and Frustrations</h3>
		<p>George gets caught up in his studies, so he needs to be able to quickly identify fun activities for his weekends.
			As such, he tends to prefer to read a few well-thought out posts rather than having to weed through many superficial ones.
			He gets frustrated when people scribble a bunch of comments on a draft and then post it haphazardly onto a forum like
			this one.  Also, George tends to champion efficiency in posts.  He would rather a post get to the point quickly so that
			he can read, process, and appreciate its content and then move on to the next.  A creative and self-sufficient individual,
			George does not need people to offer suggestions in great detail either.  He prefers to use forums like reddit to get his
			brain churning over ideas and then to run with them himself.  In summary, David prefers to read thoughtful, efficient, and
			open-ended posts to get ideas for his weekends.</p>

		<h3>Technology</h3>
			<p>George keeps technology use to a minimum.  He has an iphone and a laptop he uses for his computing needs.</p>

		<h2>User Story</h2>
			<p>An Albuquerque visitor seeks recommendations regarding events to attend in Albuquerque.
			</p>
		<h2>Use Case/Interaction Flow</h2>
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
			<li>One user can comment on many posts(1 to n)</li>
		</OL>
	</body>
</html>