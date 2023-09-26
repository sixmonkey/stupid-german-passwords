# Stupid German Password Generator
## What is this?
This is a stupid password generator that generates passwords that are easy to remember.
These passwords are not secure and should not be used for anything that requires a secure password!

## Usage
Well, just use it:

```php
use Sixmonkey\StupidPasswords\StupidPassword;
echo StupidPassword::generate();
```

## Locales
You can also generate passwords in different locales:
```php
use Sixmonkey\StupidPasswords\StupidPassword;
echo StupidPassword::generate('de');
```
### Available locales
* *en*, English (default)
* *de*, German