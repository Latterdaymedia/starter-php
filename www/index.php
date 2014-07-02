<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Twilio starter code">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to the Ruby Twilio Starter!</title>

    <!-- A little CSS to make our page prettier -->
    <link rel="stylesheet" href="app.css"/>
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- Include jQuery to help us with some UI stuff -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
    </script>
</head>
<body>
    <!-- A simple UI to test our Twilio back end -->
    <div id="content">

        <div id="flash" style="display:none;">
            <p><span id="flash-message"></span> <a href="#">Close</a></p>
        </div>
        
        <div id="welcome">
            <img src="logo.png" alt="Twilio Logo"/>
            <h1><span>php</span> Starter</h1>
        </div>

        <h3>Hello World</h3>
        <p>
            Below, we have two simple demos that will confirm your environment
            has been properly configured.  
            <p>Please refer to the 
            <a href="https://github.com/Beans0063/starter-php">README.md in your 
            starter app repository</a> to see how to configure this application.</p>
        </p>
        <br/>
        <ul id="tabs">
            <li id="messaging" class="current">Messaging</li>
            <li id="call">Voice Call</li>
        </ul>
        <form>
            <p>Enter your mobile phone number:</p>
            <input id="to" type="text" 
                placeholder="ex: +16518675309"/>
            <button>Send me a message</button>
        </form>
    </div>

    <!-- Some dirty JavaScript to help drive our UI -->
    <script src="js/ui.js"></script>
    <!-- Some ajax magic to hit our back end and make calls/send messages -->
    <script src="js/form.js"></script>
</body>
</html>