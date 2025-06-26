[JetBrains PHPStorm bugreport](https://youtrack.jetbrains.com/issue/WI-81787/Unreachable-statement-false-positive)

PHPStorm reports "unreachable code" for a interface type, when the project does only contain a single implementation of the interface.

see `src/Foo.php`.

<img width="490" alt="Image" src="https://github.com/user-attachments/assets/1ddd9916-fabe-45fa-b365-a7373bc6510c" />

the interface type could be implemented by other classes though, see e.g. `vendor/nikic/php-parser/lib/PhpParser` which contains 3 more implementations of the `Node` interface.
=> PHPStorm cannot be sure which class will implement the interface and therefore should not report "unreachable code".
