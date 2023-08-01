# php-design-pattern
## Facade
Facade is a structural design pattern that provides a simplified (but limited) interface to a complex system of classes, library or framework.

We use the Façade class in those cases that we need to simplify a complex code that has too many classes and too many functions, and all that 
we need is a simple interface that allows us to work with only a single class, most often, with a single method.

A façade class enables us to call only one method instead of calling to many methods. 
By doing so, it simplifies the work with the system, and allows us to have a simpler and more convenient interface.

Example1 :
A real life example can be a code that shares the newest posts in our blog with several social networks. 
Each social network has its own class, and a set of methods to share our posts.
