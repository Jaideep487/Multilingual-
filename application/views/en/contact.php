<?php echo form_open_multipart('contact/doaddcontact'); ?>
<input type="text" name="name" id="name" required>
<label for="name">Name</label>
<input type="email" name="email" id="email" required>
<label for="email">Email</label>
<textarea name="message" id="message" required></textarea>
<label for="message">Message</label>

<button type="submit">Holy Shit</button>
</form>