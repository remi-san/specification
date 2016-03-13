# specification

[![Author](https://img.shields.io/badge/author-@RemiSan-blue.svg?style=flat-square)](https://twitter.com/RemiSan)
[![Build Status](https://img.shields.io/travis/remi-san/specification/master.svg?style=flat-square)](https://travis-ci.org/remi-san/specification)
[![Quality Score](https://img.shields.io/scrutinizer/g/remi-san/specification.svg?style=flat-square)](https://scrutinizer-ci.com/g/remi-san/specification)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/remi-san/specification.svg?style=flat-square)](https://packagist.org/packages/remi-san/specification)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/remi-san/specification.svg?style=flat-square)](https://scrutinizer-ci.com/g/remi-san/specification/code-structure)

A lib to ease the use the **specification pattern**.

Your specification classes can extend the `AbstractSpecification` class which already implement
the following methods from the `Specification` interface:
 - `andSatisfies`
 - `orSatisfies`
 - `not`
 
 You'll have to implement the `isSatisfiedBy` method to add the domain logic.
 