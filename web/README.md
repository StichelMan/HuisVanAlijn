# Huis Van Alijn: Poppen - React + Vite Interactive Touchscreen App

Huis Van Alijn: Poppen is the frontend of an interactive informational touchscreen application built using React, managed by Vite, and programmed in JavaScript. The goal of this project is to provide users with engaging information about the puppets of 'Huis Van Alijn' through three main sections. The primary section offers details about each puppet based on the selected room. The game section features a challenge where users connect playstyles with corresponding puppets. The last section allows users to create their own theatre setups using various background images of theatre sets.

## Project Overview

Huis Van Alijn: Poppen aims to be a high-end, user-friendly touchscreen web application. The development process prioritizes best practices, scalability, and considerations for future expansions. The project is committed to implementing all recommended practices in the development process.

## Getting Started

### Prerequisites

- Node.js (>=12.0.0)
- npm (>=6.0.0) or Yarn (>=1.0.0)

## Docker
### Start container 
docker compose up -d

### Enter container
docker compose exec -it web bash

### Installation

```bash
# Clone the repository
git clone git@gitlab.com:ikdoeict/vakken/opo_agile_team_project/projecten/2324_atp_poppen/web.git

# Change directory
cd [PROJECT_DIRECTORY]

# Install dependencies
npm install
# or
yarn
```

### Development
```bash
# Start the development server
npm run dev
# or
yarn dev
```

### Build
```bash
# Build for production
npm run build
# or
yarn build
```

## Tech Stack
- React: JavaScript library for building user interfaces.
- Vite: Frontend build tool for modern web development.
- JavaScript: Programming language used for the application.

## Features
- Detailed puppet information based on selected rooms.
- (Memory-)game section challenging users to connect playstyles with corresponding puppets.
- Scene maker allowing users to create their own theatre setups.
- High-end, user-friendly touchscreen web application design.
- Scalable and built with future expansions in mind.

## Accessibility Statement
Huis Van Alijn: Poppen is committed to providing an inclusive user experience. The application features an Accessibility Settings page, allowing users to tailor the interface to their needs. Settings include toggles for a bigger font size and higher contrast. It's important to note that after the screensaver timeout, all settings reset to default, ensuring a fresh start for each user.

### Default Accessibility
The application's default state adheres to standard accessibility guidelines, ensuring visibility and usability for all users.

### Accessibility Evaluation:
The application employs clear and meaningful alternative text for non-text content.
The use of landmarks and headings enhances the structure and navigation of the application.
Proper color contrast is maintained in most visual presentations, contributing to improved readability.
The project demonstrates a commitment to scalability and future expansions, aligning with inclusive design principles.
Note: Continuous efforts are made to enhance accessibility, and user feedback is welcomed for ongoing improvements.