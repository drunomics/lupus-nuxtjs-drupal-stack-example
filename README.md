# Lupus Nuxt.js Drupal Stack - Example project

This is a simple example project demonstrating the Lupus Nuxt.js Drupal Stack.

## Introduction
Please refer to https://stack.lupus.digital for more information about the stack.

## Prerequisites

* The project makes use of [ddev-local](https://ddev.readthedocs.io/en/stable/) - *short ddev - as local development
helper around docker. Please refer to its documentation for installing it first.
* Node.js (12.x or newer) as required by Nuxt.js

## Setup

### Drupal setup

Build the Drupal site via composer:
```
  ddev composer install
```

And install it:
```
ddev drush site-install minimal --existing-config
```

Start containers:
```
ddev start
```

If you get an error about ports being taken already either stop the processes that use the ports or update ports for
this project. You can find them in .ddev/config.yaml for BE and then add it for the BASE_URL in nuxt.config.js.

You can log into your Drupal backend now and start editing content!

### Nuxt.js setup

```
cd demo-frontend
npm install
```

### Development

From demo-frontend:

```
npm run dev
```

### Development

From demo-frontend:
```
npm run build
npm run start
```
