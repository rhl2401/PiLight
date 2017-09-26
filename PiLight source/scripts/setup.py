import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)

GPIO.setup(2, GPIO.OUT)
GPIO.setup(3, GPIO.OUT)
GPIO.setup(4, GPIO.OUT)
GPIO.setup(5, GPIO.OUT)
GPIO.setup(6, GPIO.OUT)
GPIO.setup(7, GPIO.OUT)
GPIO.setup(8, GPIO.OUT)
GPIO.setup(9, GPIO.OUT)

GPIO.output(2, True)
GPIO.output(3, True)
GPIO.output(4, True)
GPIO.output(5, True)
GPIO.output(6, True)
GPIO.output(7, True)
GPIO.output(8, True)
GPIO.output(9, True)
