<!DOCTYPE html>
<html>
<head>
    <title>Sawmill | Malin's Welcome</title>
    <link rel="stylesheet" type="text/css" href="/stylesheet.css?v=1" media="screen"/>
    <meta name="viewport" content="width=device-width; initial-scale=1.0;">
    <script src="script.js"></script>
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div class=content><center>
    <br>
        <img src="sawmill.png" style="width:450px;"><br>
    <br>

        <textarea id="input" name="input" rows="15" cols="80" placeholder="Paste your logs here"></textarea><br>
    <br>
        <button onclick="cleanLogs()">CLEAN LOGS</button><br>
    <br>
        <textarea id="outputBox" name="outputBox" rows="15" cols="80"
placeholder='The Sawmill will automatically clean your 
logs to include only Roleplay-relevant chats.

Chats in the LOOC, QOOC, SOOC, OOC or direct messages 
can be enabled or disabled in the options below, along 
with the timestamps.

Some client mods might interfere with the filtering. 

To find your logs, open your resource pack folder from
in the in-game menu and navigate up to the .minecraft 
folder containing it. Your logs will be in the logs folder.

To customize what is shown and hidden, click "show options" below.'></textarea></textarea><br>
<br>
<button id=optionsToggle onclick="toggleOptions()">Show Options</button><br>
<br>
<div id="options" class="options" style="display:none";>
    <table>
        <td>
            Enable / Disable: </br>
            <button id=loocToggle onclick="toggleLOOC()">LOOC</button>
            <button id=qoocToggle onclick="toggleQOOC()">QOOC</button> 
            <br>
            <button id=soocToggle onclick="toggleSOOC()">SOOC</button>
            <button id=oocToggle onclick="toggleOOC()">OOC</button> 
            <br>
            <button  id=broadcastToggle onclick="toggleBroadcast()">Friend Broadcasts</button></br>
            <button id=msgToggle onclick="toggleMSG()">DMs</button>
            <button  id=timeToggle onclick="toggleTime()">Timestamps</button>
            
            <br>
        </td><td>
            Filter out lines that start with:</br>
            <textarea id="filterList" name="filterList" rows="4" cols="30" wrap="off"> 
(
-
Also try /vote milestones
Art
Attempting to connect you to the server
Click any item to view purchasing options
Click for
Creature
Error
Error: You must wait
For voting on consecutive days
Gate Toggled
Growth speed is
Hey!
Issued by
Just type
Nameplates
Nobody
Raid Cooldown
Saved screenshot
Set the prefix of
Shop sells for:
Soul Pillar
Thank you for voting!
The server is now under
This
Use /vote to see
Voting on consecutive days
Want a faster cooldown
Welcome
You
[Aviary]
[Buy 1]
[SurgePvP]
minecraft
pmc
topg
§</textarea>
        </td>
    </table>
</div>
<p id="output"></p>
Help improve everyone's experience by reporting errors to </br>my <a href="https://www.lordofthecraft.net/messenger/compose/?to=92824">LOTC forum account</a> or to my discord: @saffronpark</br></br></center>
</body>
</html>
