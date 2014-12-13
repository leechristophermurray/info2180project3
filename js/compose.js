$form = document.querySelector('form');

$form.onsubmit = function(){
	$recipients = $('input:checkbox:checked');
	$content = $('#content');
	$subject = $('#subject');
	recipientIDs = [];
	for (var i = 0; i < $recipients.length; i++) {
		recipientIDs.push($recipients[i].value);
	}

	sendMessage($subject.val(), $content.val(), recipientIDs.join())
		.then(function(data){
			$recipients.each(function(index, checkbox){
				checkbox.checked = false;
				$subject.val('');
				$('#content').val('');
				$('#sent').html('Message sent');
			})
		});
	return false;
}

function sendMessage(subject, content, recipients){
	data = {
		subject: subject,
		content: content,
		recipients : recipients
	}
	return $.ajax({
		url: "send.php",
		method: "post",
		data: data
	});
}