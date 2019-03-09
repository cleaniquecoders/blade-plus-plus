
[![Build Status](https://travis-ci.org/cleaniquecoders/blade-plus-plus.svg?branch=master)](https://travis-ci.org/cleaniquecoders/blade-plus-plus) [![Latest Stable Version](https://poser.pugx.org/cleaniquecoders/blade-plus-plus/v/stable)](https://packagist.org/packages/cleaniquecoders/blade-plus-plus) [![Total Downloads](https://poser.pugx.org/cleaniquecoders/blade-plus-plus/downloads)](https://packagist.org/packages/cleaniquecoders/blade-plus-plus) [![License](https://poser.pugx.org/cleaniquecoders/blade-plus-plus/license)](https://packagist.org/packages/cleaniquecoders/blade-plus-plus)

## Laravel Blade Directives

Extended Laravel Blade Directives

## Installation

```
$ composer require cleaniquecoders/blade-plus-plus
```

## Usage

Available directives based on category:

### Actions

```
@baseAction([
	'label' => 'Google',
	'href' => 'https://google.com',
	'icon' => 'fa-google'
])

@createAction([
	'label' => 'New User',
	'href' => route('users.create'),
])

@editAction([
	'label' => 'Edit User',
	'href' => route('users.edit', 1),
])

@showAction([
	'label' => 'Show User',
	'href' => route('users.show', 1),
])

@destroyAction([
	'label' => 'Delete User',
	'href' => route('users.destroy', 1),
	'id' => 'destroy-user-1'
])
```

### Card

```
@card 
	@slot('card_title')

	@endslot
	
	@slot('card_body')

	@endslot

	@slot('card_footer')

	@endslot
@endcard
```

### Form

```
@input([
	'id' => 'name',
	'name' => 'name',
])

@input([
	'id' => 'email',
	'name' => 'email',
	'type' => 'email'
])

@input([
	'id' => 'password',
	'name' => 'password',
	'type' => 'password'
])

@input([
	'id' => 'password_confirmation',
	'name' => 'password_confirmation',
	'type' => 'password'
])
```

### Layout

```
@container
	@row 
		@col('col-6')

		@endcol

		@col('col-6')

		@endcol
	@endrow
@endcontainer
```

### Modal

```
@modal 
	@slot('modal_body')

	@endslot

	@slot('modal_footer')

	@endslot
@endmodal
```

### Table 

```
@table 
	@slot('thead')

	@endslot
	
	@slot('tbody')

	@endslot

	@slot('tfooter')

	@endslot
@endtable
```

### Misc.

```
@appName

@icon('fa fa-search')
```


## Test

Run the following command:

```
$ vendor/bin/phpunit  --testdox --verbose
```

## Contributing

Thank you for considering contributing to the `LaravelBladeDirectives`!

### Bug Reports

To encourage active collaboration, it is strongly encourages pull requests, not just bug reports. "Bug reports" may also be sent in the form of a pull request containing a failing test.

However, if you file a bug report, your issue should contain a title and a clear description of the issue. You should also include as much relevant information as possible and a code sample that demonstrates the issue. The goal of a bug report is to make it easy for yourself - and others - to replicate the bug and develop a fix.

Remember, bug reports are created in the hope that others with the same problem will be able to collaborate with you on solving it. Do not expect that the bug report will automatically see any activity or that others will jump to fix it. Creating a bug report serves to help yourself and others start on the path of fixing the problem.

## Coding Style

`LaravelBladeDirectives` follows the PSR-2 coding standard and the PSR-4 autoloading standard. 

You may use PHP CS Fixer in order to keep things standardised. PHP CS Fixer configuration can be found in `.php_cs`.

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

