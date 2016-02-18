
# CakePHP Application Skeleton - (Admin and Front)

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Clone the repository: `(git clone https://github.com/flavianohonorato/cakephp3-skeleton)`.
2. Run `composer install` to install the dependencies.
3. Run `bin/cake migrations migrate` to generate the migration of users table.


## Configuration

1. Read and edit `config/app.php` and setup the 'Datasources' and any other.
2. Edit to your settings the file located in: `config/custom_config.php`.
3. You need to run `bin/cake migrations seed` to perform all seeds or `bin/cake migrations seed --seed UsersSeed` to perform a specific seed.

## Screenshots
![Screenshots](https://raw.github.com/flavianohonorato/cakephp3-skeleton/master/login.png)
![Screenshots](https://raw.github.com/flavianohonorato/cakephp3-skeleton/master/dashboard.png)
![Screenshots](https://raw.github.com/flavianohonorato/cakephp3-skeleton/master/front.png)

## Credits
> admin theme: `https://almsaeedstudio.com/preview`
> 
> front theme: `http://startbootstrap.com/template-overviews/agency/`
>
> login theme `http://codepen.io/Lewitje/pen/BNNJjo`




