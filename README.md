# Nicknames

[![Code Climate](https://codeclimate.com/github/commerce-wa-ols/nicknames/badges/gpa.svg)](https://codeclimate.com/github/commerce-wa-ols/nicknames)
[![Build Status](https://travis-ci.org/commerce-wa-ols/nicknames.svg?branch=master)](https://travis-ci.org/commerce-wa-ols/nicknames)

Nicknames is a simple package that either returns an array of common nicknames for a provided name or returns an array of potential matches to a provided nickname. The data features common English diminutives, nicknames and shortened forms, of given names. 

For example, "William" may appear in databases as "Bill" or "Willie", and "Rebecca" as "Becca" or "Becky". 

The list of names is from [Diminutives.db](https://github.com/dtrebbien/diminutives.db) with some extra names added to the list from our sources. The idea behind the package has also taken heavy influence from the ruby gem [Nickname](https://github.com/bsimpson/Nickname) which also has some great information about other techniques for fuzzy matching strings.

## Usage

Get nicknames for a given formal name.

```php
use CommerceWA\Nicknames\Nicknames;

$nicknames = new Nicknames();
$result = $nicknames->givenTo("William");

print_r($result);
```
The above example will output:

```php
Array
(
    [0] => bill
    [1] => billy
    [2] => will
    [3] => willie
    [4] => willy
)
```

Get the formal name for a given nickname.

```php
use CommerceWA\Nicknames\Nicknames;

$nicknames = new Nicknames();
$result = $nicknames->lookup("Becky");

print_r($result);
```
The above example will output:

```php
Array
(
    [0] => rebecca
)
```

## Why?

The library was created to solve issues when trying match names from multiple databases where full names and preferred names (nicknames) were used to identify a person.

Example of different names for the same person

|                           | first_name | surname
| --------------- |-------------|-------|
| **Database 1**| Bill | Doe
| **Database 2**| William | Doe


## Installation
This package uses [composer](https://getcomposer.org) so you can just add
`commerce-wa-ols/nicknames` as a dependency to your `composer.json` file or
execute the following command:

```bash
composer require commerce-wa-ols/nicknames
```

## Tests

Todo.

## Contributors

Developed by [Cyrus Eftos](https://github.com/cyruseftos) at the [Department of Commerce](https://github.com/commerce-wa-ols).
