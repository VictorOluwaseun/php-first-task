<h3>Contact Me</h3>

<form action="processform.php" method="POST">
       
		<p>
			<label for="first_name">First Name</label><br />
			 <input type="text" name="first_name" placeholder="Enter Your First Name" />
		</p>

		<p>
			<label for="last_name">Last Name</label><br />
			 <input type="text" name="last_name" placeholder="Enter Your Last Name" />
		</p>

		<p>
			<label for="last_name">Subject</label><br />
			 <input type="text" name="subject" placeholder="The subject" />
		</p>

		<p>
			<label for="email">Email</label><br />
			<input type="email" name="email" placeholder="Enter Your Email" required />
		</p>

		<p>
			<label for="email">Your Message</label><br />
			<textarea name="message"></textarea>
		</p>
		
		<button type="submit" name="submit">Send Message</button>
</form>
