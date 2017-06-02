Incrementor
============

Increment what ever you want.

This project follows the [semantic versioning][2].

# Requirements

- PHP >=5.5.9
- [Composer][1]

# How to install

    $> composer install

# Test it

    $> bin/phpunit

# Contributing

For any contribution, thanks to make a pull request and don't forget to rebase your branch from `master` as I'm sure you usually do with [Symfony][3].

Or if you can't be bothered just create an [issue][4].

[1]: https://getcomposer.org/doc/00-intro.md#globally
[2]: http://semver.org/
[3]: https://symfony.com/doc/current/contributing/code/patches.html
[4]: https://github.com/yoannrenard/.../issues/new


-- numbers 
    1-2-3-...
    1-3-...
-- letters
    a-b-c-...
    a-c-...
-- day
    Monday-Tuesday-Wednesday-...
-- months
    January-February-March-...
-- an array
    toto-tata-titi-tutu-...
-- limit
    1-2-3-1-2-3-...
-- decrement
    3-2-1-...
    
    
    ->increment($value, $type?, $start, $limit, step, $values)
    ->decrement($value, $type?, $start, $limit, step, $values)
    ->hasNext($value, $type?, $limit, step, $values)