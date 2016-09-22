## Nicknames

This is a simple library that returns either an array of common nicknames for a provided name or the formal given name of a provided nickname.
The library features common English diminutives (nicknames and shortened forms) of formal given names.

For example, "William" may appear in databases as "Bill", "Billy" or "Willie", and "Rebecca" as "Becki", "Becca" or "Becky".

## Usage

Get nicknames for a given formal name.

```php
use CommerceWA\Nicknames\Nicknames();

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
use CommerceWA\Nicknames\Nicknames();

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

Developed by [Cyrus Eftos](https://github.com/cyruseftos) at the [Department of Commerce](https://github.com/commerce-wa-ols)
