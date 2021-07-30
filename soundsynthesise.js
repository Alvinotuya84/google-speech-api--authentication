var speech = new SpeechSynthesisUtterance();
speech.lang="en";
speech.text=document.getElementById("welcome").innerHTML+document.getElementById("sub").innerHTML+" do you want to go to the products page?";
function synthesise(){
    window.speechSynthesis.speak(speech);
}
speech.volume = 0.7; // From 0 to 1
