<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('sign up for a CockTales account');

$I->amOnPage('/');
$I->click('Register');
$I->seeCurrentUrlEquals('/register');

$I->fillField('First Name', 'Joe');
$I->fillField('Last Name', 'Sweeny');
$I->fillField('Username', 'joesweeny');
$I->fillField('E-Mail Address', 'joe@joe.com');
$I->fillField('Password', 'password');
$I->fillField('Confirm Password', 'password');
$I->click('Register');

$I->seeCurrentUrlEquals('/home');
$I->see('CockTales');

$I->seeRecord('users', [
   'username' => 'joesweeny'
]);

$I->assertTrue(Auth::check());
