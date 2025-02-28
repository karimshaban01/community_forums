<script language="javascript"> 
    var t = new Date(); 
    document.write(t.toDateString()+""+t.getHours()+":"+t.getMinutes()); 
</script>
(function updateTime() {
  var time = (new Date()).toLocaleString({
    hour12: true,
  });
  
  document.getElementById('current_time').innerHTML = time;
  
  requestAnimationFrame(updateTime);
})();
<div id="current_time"></div>
setInterval(function(){
  var t = new Date(); 
  document.write(t.toDateString()+""+t.getHours()+":"+t.getMinutes()); 
}, 1000);

function sendMessage(message) {
  const mainEl = document.querySelector("#main");
  const textareaEl = mainEl.querySelector('div[contenteditable="true"]');

  if (!textareaEl) {
    throw new Error("There is no opened conversation");
  }

  textareaEl.focus();
  document.execCommand("insertText", false, message);

  setTimeout(() => {
    // Simulate pressing the Enter key
    const enterKeyEvent = new KeyboardEvent("keydown", {
      key: "Enter",
      code: "Enter",
      keyCode: 13,
      which: 13,
    });
    textareaEl.dispatchEvent(enterKeyEvent);

    setTimeout(() => {
      const sendButton =
        mainEl.querySelector('[data-testid="send"]') ||
        mainEl.querySelector('[data-icon="send"]');
      if (sendButton) {
        sendButton.click();
      } else {
        console.error("Send button not found");
      }
    }, 100);
  }, 1000); // 1-second delay before sending the next message
}

// Example: Send the same message on new lines with a delay of 1 second between messages
const message = "Here goes your message";
const numberOfTimes = 50;

for (let i = 0; i < numberOfTimes; i++) {
  setTimeout(() => {
    sendMessage(message);
  }, i * 2000); // Delay each message by i * 1000 milliseconds (1 second)
}