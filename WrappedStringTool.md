WrappedStringTool
==================
2015-11-21


This document describes the method of the WrappedStringTool.









findCandyStringEndPos
-------------
2015-11-21


Tries to find a valid [candy string](https://github.com/lingtalfi/WrappedString#candy-string)
starting from the given pos,
and returns the position of the end symbol in case of success.

This method doesn't consider the escaping of the first symbol (i.e. it will work 
the same whether or not the first symbol is escaped).

However, the second symbol is found only if it's not escaped.


```php
int|false    findCandyStringEndPos ( str:string, str:symbol, int:pos, bool:escapedModeRecursive )
```

- symbol: the wrapping symbol
- pos: the position of the first symbol (it doesn't matter whether or not the first symbol is escaped)




unwrap
----------
2015-11-20


Unwraps a supposedly wrapped string.


```php
string    unwrap ( str:wrappedString, str:beginSymbol, int:beginSymbolMbLen, str:endSymbol, int:endSymbolMbLen, bool:escapedModeRecursive )
```

beginSymbolMbLen and endSymbolMbLen are the multi-byte length of the begin and end symbol respectively.
The multi-byte length is typically given by the [mb_strlen php function](http://php.net/manual/en/function.mb-strlen.php).



Note:
The WrappedStringTool is a low level tool, it is meant to be used by other tools, that's why you have to pass the length manually.

















Dependencies
------------------

- [lingtalfi/Escaper 1.4.0](https://github.com/lingtalfi/Escaper)




History Log
------------------
    
- 1.1.0 -- 2015-11-21

    - add WrappedStringTool::findCandyStringEndPos
        
- 1.0.0 -- 2015-11-20

    - initial commit
    
    