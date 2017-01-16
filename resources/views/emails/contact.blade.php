<h2>Contact Form Info:</h2>
<p><b>From:</b> {{ $name }}</p>
<p><b>Email:</b> {{ $email }}</p>
<p><b>Company:</b> {{ ($company == '') ? 'N/A' : $company }}</p>
<p><b>Phone:</b> {{ ($phone == '') ? 'N/A' : $phone }}</p>
<p><b>Message:</b> {{ $content }}</p>