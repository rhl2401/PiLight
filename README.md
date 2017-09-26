# PiLight
Control your lamps from a Raspberry Pi and a web browser!

Using a Raspberry Pi 3 with Pixel installed, Python, WiringPi, PHP, HTML, CSS and a relay to control anything in your home. 


## Requirements
- Raspberry Pi (I am using a Raspberry Pi 3).
- Everything you need to make the Pi running (power adaptor, SD-card etc.).
- Relay for Arduino (I am using an 8 channel relay which the code is also written for).
- 10 Male-to-male jumper wires.


## Pre-installation 
- Build some kind of setup with the relay. You will be able to find some pictures on Google if interested.
- Flash Pixel to the SD-card, boot it up on the Raspberry Pi and configure it.
- Download WiringPi from the source: http://wiringpi.com/ and do the configurations.
- Download Apache and do the basic configurations.


## Installation and setup
- Download this source
- Go to "scripts" and make sure that the file "setup.py" will run on boot (else you will have to run it everytime you boot yourself).


## Customise
- Download or create images for each of the relays. Put them in the folder "img". Name them after which lamp they are for (lamp1.png will appear at the first lamp, lamp2.png will appear at the second and so on).
  - If you want to use .jpg you will need to edit the "home.php" file to match the image
- Edit the headers and descriptions for the lamps. It is easily done in the "home.php" file.
