# PiLight
Control your lamps from a Raspberry Pi and a web browser!

Using a Raspberry Pi 3 with Pixel installed, Python, WiringPi, PHP, HTML, CSS and a relay to control anything in your home. 


## Requirements
- Raspberry Pi (I am using a Raspberry Pi 3)
- Everything you need to make the Pi running (power adaptor, SD-card etc.)
- Relay for Arduino (I am using an 8 channel relay which the code is also written for)
- 10 Male-to-male jumper wires


## Pre-installation 
- Flash Pixel to the SD-card, boot it up on the Raspberry Pi and configure it
- Build some kind of setup with the relay. You will be able to find some pictures on Google if interested.


## Installation and setup
- Download WiringPi from the source: http://wiringpi.com/
- Download Apache and do the basic configurations
- Download this source
- Go to "scripts" and make sure that the file "setup.py" will run on boot (else you will have to run it everytime you boot yourself).
