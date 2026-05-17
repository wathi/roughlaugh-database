<h2>New Contact Form Submission</h2>

<p><strong>From:</strong> {{ $name }} ({{ $email }})</p>
<p><strong>Subject:</strong>Rough x Laugh Contact Form</p>

<hr>

<h3>Message:</h3>
<p>{!! nl2br(e($messageText)) !!}</p>

<hr>
<p><small>This email was sent from your contact form.</small></p>