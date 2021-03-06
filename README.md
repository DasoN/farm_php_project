# Farm project

It`s a farm project... nothing else

## Installation

I am using OpenServer for. You can use smth else 

## Usage
for initialize a Farm you need write:
```php
     $farm = new Farm();
```

for example write smth like this: 
```php
     $Cow1 = new Animal('Cow', [8, 12]);
     $Chicken1 = new Animal('Chicken', [0, 1]);
     $Cow2 = new Animal('Cow', [8, 12]);
```
And write method of class: 
```php
     echo $Cow1->getStrProd();

     echo $farm->getDataAll();
     echo $farm->getDataOne(1);
```
