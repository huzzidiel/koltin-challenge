<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Koltin challenge

This is a simple post to publish and share within a community.

## Design Doc
https://docs.google.com/document/d/13lPzPkqNc-Aq5oTwruaGmSRTV7bU1pFZYuG81uLvCYg/edit?usp=drivesdk

## Example server 
This site should be on this domain after date(13 nov)
www.koltinchallenge.huzzidiel.me 


## Setup 
Please clone this repository and run the following commands:
```bash
composer install
```
Copy `.env.example` to `.env` and configure your MySQL database, user, and password.
```bash
php artisan key:generate
npm install
npm run dev
```
To test the API, run:
```bash
php artisan serve
```
Then, access the available API routes on the local server (localhost:8000).

**Improvements:**
Consider implementing the following enhancements:
1. Include tests to ensure the correct lifecycle of the app.
2. Add token-based authentication for secure API endpoints.
3. Implement cascading delete for the tables model to ensure proper deletion.
4. Increase the size of the post content in the migration database and validation section.

**Todo:**
- Implement a command to export data to Google Reports.
- Implement interfaces to improve code delegations.


