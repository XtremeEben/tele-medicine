// replace these values with those generated in your TokBox Account
var apiKey = "46261912";
var sessionId = "2_MX40NjI2MTkxMn5-MTU0OTA0ODIwNTkzMX4vU2d3R1hxeHBPaW96MTY5eW01K1ZyQjV-fg";
var token = "T1==cGFydG5lcl9pZD00NjI2MTkxMiZzaWc9ZGI3YjBlNDlhZDI1MDIxNzEyZWQ5YWNiMmY0NGVjMjdjZTBmMzUyYTpzZXNzaW9uX2lkPTJfTVg0ME5qSTJNVGt4TW41LU1UVTBPVEEwT0RJd05Ua3pNWDR2VTJkM1IxaHhlSEJQYVc5Nk1UWTVlVzAxSzFaeVFqVi1mZyZjcmVhdGVfdGltZT0xNTQ5MDY0Mzk3Jm5vbmNlPTAuOTk2MDE1NDI5OTYwNjM5OSZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNTQ5NjY5MTk4JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9";

// (optional) add server code here
initializeSession();

// Handling all of our errors here by alerting them
function handleError(error) {
    if (error) {
        alert(error.message);
    }
}

function initializeSession() {
    var session = OT.initSession(apiKey, sessionId);

    // Subscribe to a newly created stream
    session.on('streamCreated', function (event) {
        session.subscribe(event.stream, 'subscriber', {
            insertMode: 'append',
            width: '100%',
            height: '100%'
        }, handleError);
    });

    // Create a publisher
    var publisher = OT.initPublisher('publisher', {
        insertMode: 'append',
        width: '100%',
        height: '100%'
    }, handleError);

    // Connect to the session
    session.connect(token, function (error) {
        // If the connection is successful, publish to the session
        if (error) {
            handleError(error);
        } else {
            session.publish(publisher, handleError);
        }
    });
}