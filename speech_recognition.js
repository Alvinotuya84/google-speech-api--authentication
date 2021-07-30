let speechRecognition = new webkitSpeechRecognition();
speechRecognition.continuous = true;
speechRecognition.lang ="en";
speechRecognition.onstart = () => {
    document.getElementById("sound-input").value= "yes";
  };
  speechRecognition.onend = () => {
    document.getElementById("sound-input").value= "";
  };
  speechRecognition.onError = () => {
    document.getElementById("sound-input").value = "";
  };
  function startRecog(){
    speechRecognition.start();
    if(document.getElementById("sound-input").value= "yes")
    {   
        window.location.href("store.php");
    }
  }