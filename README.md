# Medico
##### _The First Moroccan Open Source Medical Managament System_
__________
[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

![alt text](https://github.com/omarlahkim/assets/blob/main/erd-medico.png)

## Features

- Add/Modify/Delete a patient
- Add/Modify/Delete an appointment
- Add/Modify/Delete a patient's payment
- Add/Modify/Delete an observation about a patient
- Add/Modify/Delete a prescription for a patient
- Login for secretary
- Login for doctor


#### Installing Modules

Composer Modules:

```sh
composer install
```

Node Package Modules:

```sh
npm install
```
#### Build

Composer Modules:

```sh
npm run watch
```

Node Package Modules:

```sh
php artisan serve
```

#### Database

First, create .env file which should include the database credentials, and server url.

Migrate the database:

```sh
php artisan migrate
```

Seed the database with data (populate):

```sh
php artisan db:seed
```

Verify the deployment by navigating to your server address in
your preferred browser.

```sh
localhost:8000
```


**Free Software, Hell Yeah!**
