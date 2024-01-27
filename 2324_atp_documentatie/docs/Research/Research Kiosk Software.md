# Kiosk software
## Possibility 1
Operation system: Ubuntu LTS
Things to install:
- vim-nox (Text editor for configuration editing)
- openssh-server (Remote console to the kiosk)
- chromium-browser (The only application of the kiosk)
- slick-greeter (Alternative display manager for ubuntu 18.04)
- xllvnc (Remove desktop server)

Display manager: lightdm

Pros:
- Autologin
- Automatisch starten chromium browser

Cons
- Gaat niet direct naar de juiste site
- De zoekbalk blijft zichtbaar

(Kan misschien aangepast worden door enkele configuraties)


Sources:
- https://www.youtube.com/watch?v=hf96SQqOoRs&ab_channel=MrYungilike


## Possibility 2
Porteus kiosk
(OS on itself)
https://porteus-kiosk.org/

Niet mogelijk met docker en local webserver

## Possibility 3
PIXEL LXDE

https://die-antwort.eu/techblog/2017-12-setup-raspberry-pi-for-kiosk-mode/

## Possibility 4 (Chosen)
Applicatie: Built in kiosk mode in Chromium
OS: Ubuntu 22.04 LTS
Desktop Environment: Gnome (Taak balk en power buttons hiden en niet accessible van het scherm)