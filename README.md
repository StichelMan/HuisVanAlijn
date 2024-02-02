# HuisVanAlijn
## Project
### Team
Ruben Van Poucke
Eli Van Stichelen
Sibald Gemeen
Bert Van den Broeck
Anthony Tacquet
## Installation

### Operating System
Install Ubuntu 20.04 desktop onto the NUC \
https://ubuntu.com/download/desktop/thank-you?version=22.04.3&architecture=amd64

### Extra software on the NUC
When Ubuntu is installed ssh into the machine and install docker following these instructions \
https://docs.docker.com/engine/install/ubuntu/

### Clone the repository
Clone this repository \
git clone https://github.com/AnthonyTacquet/HuisVanAlijn.git

Enter the folder \
```cd HuisVanAlijn```

### Images and videos
If you do not have the images and videos zip files from us, contact us first \
If you have the zip file, unzip it and make sure the folder structure looks like this \
```infrastructure/images/images/folder####/image####``` \
If something is wrong when everything is running and no images are visibile this might be the reason

### Start the docker containers
```docker compose up -d```

## Test
Now you should be able to surf to http://localhost:80

## Kiosk mode
