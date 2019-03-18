## Welcome to Steve's HTML-Minecraft Template
When modifying the template some experience with HTML (and CSS) would be helpful. However, if you don't have any experience with HTML I'll try and keep it as simple as possible and if it's still too hard, create an issue or something (yes you can create issues for questions too).

### Things in the documentation:
1. To Do list
2. Changing the Flashing Text
3. Changing the Button Text and Link

### To Do list:
- [x] Add the splash text and make it flash
- [x] Make the background move like in the real game
- [x] Add all the buttons (including the small ones)
- [x] Add some footer text (and make it clear that I don't own Minecraft)
- [ ] Make the flashing text scale down as more text is added
- [ ] Make the flashing text change
- [ ] Make a World/Server Selection Menu

### Changing the Flashing Text:
**Step 1:** Open `index.html` and change the `Awesome!` to something you would perfer.
```HTML
<div id="flashingtext">Awesome!</div>
```
***Example:***
```HTML
<div id="flashingtext">Something I perfer...</div>
```
**Step 2: Only do this step if the text is over two lines** Open `/css/style.css` and find the following
```CSS
#flashingtext {
	margin: -3.5% 0 0 47%;
	width: 40%;
	transform: rotate(-20deg);
	animation: FlashingText 0.5s ease-in-out infinite;
	color: #FFFF00;
	font-size: 2vw;
}
```
Then where it says `font-size: 2vw;` change the `2` to something lower and make sure to include the `vw;`.

*I am hoping to make this automatic in a later update*

### Changing the Button Text and Link:
**Step 1:** Open `index.html` and Find the following
```HTML
<main> <a href="minecraft:">
  <div class="button"><span>Singleplayer</span></div>
  </a> <a href="minecraft:">
  <div class="button"><span>Multiplayer</span></div>
  </a> <a href="minecraft:">
  <div class="button"><span>Minecraft Realms</span></div>
  </a> <a href="https://steve-tech.github.io/HTML-Minecraft/docs/">
  <div class="button button_small left"><span>Options...</span></div>
  </a> <a href="javascript:window.open('','_self').close();">
  <div class="button button_small right"><span>Quit Game</span></div>
  </a> </main>
```
The text between the `<span>` & `</span>` is the text shown on the buttons; and the text between the `<a href="` & `">` is the link, you could put the name of another file or a whole URL in there it doesn't really matter also if your wondering `minecraft:` is a Windows Protocol to open Minecraft if it is installed.

***Example:***
```HTML
<main> <a href="minecraft:">
  <div class="button"><span>This is the first button it opens minecraft</span></div>
  </a> <a href="https://www.google.com/">
  <div class="button"><span>This is the second button it opens Google</span></div>
  </a> <a href="https://github.com/Steve-Tech">
  <div class="button"><span>This is the third button it opens my GitHub</span></div>
  </a> <a href="https://steve-tech.github.io/HTML-Minecraft/docs/">
  <div class="button button_small left"><span>This opens the Docs</span></div>
  </a> <a href="javascript:window.open('','_self').close();"> <!-- This was me testing but it doesn't really work -->
  <div class="button button_small right"><span>This tries to close the tab</span></div>
  </a> </main>
```
