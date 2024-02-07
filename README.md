# Blog System

## Table of Contents
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [License](#license)

## Getting Started

### Prerequisites

- [PHP](https://www.php.net/) (>= 7.x)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (Optional, for frontend assets)

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/your-project.git
   
2. install dependencies:
   composer install
   
3. Copy the .env.example file to .env and configure your environment variables:
    cp .env.example .env

4. Generate application key:
   php artisan key:generate

5. Migrate the database:
   php artisan migrate

6. Install frontend assets (if needed):
   npm install && npm run dev

Usage
This Web Application is made on Laravel which is the Php Framework. This Project Contains the CRUD operations on the Text and TextArea where user can create its own and can update it and delete it and view it 

Fork the project.
Create a new branch for your feature: git checkout -b feature-name
Commit your changes: git commit -m 'Add some feature'
Push to the branch: git push origin feature-name
Open a pull request.
