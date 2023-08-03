# php-design-pattern

![Screenshot 2023-08-03 at 2 57 47 PM](https://github.com/biplobsec21/php-design-pattern/assets/103837734/d0af35bf-e270-4f6d-a21d-81224506998b)

#### Creational: Different ways of create object.
#### Structural: Relationship between object.
#### Behavioural: Interaction and communication between object.
### Advantages of Design Pattern:
One of the benefits of design patterns is that they help us communicate with other
developers at a more abstract level for example: you may tell your coworker hey we can use the common pattern to 
improve this code, you can simply use the name of the pattern to communicate the idea and you don't have to write a lot of code to express that idea, another benefit of studying and understanding this design patterns is that it makes you a better designer, you will learn how to build reusable extensible and maintainable software no matter what
programming language you use or what kind of applications you build and finally another benefit of learning design patterns is that they help you to learn and understand different kind of frame works in a quick time.




## Facade
Facade is a structural design pattern that provides a simplified (but limited) interface to a complex system of classes, library or framework.

We use the Façade class in those cases that we need to simplify a complex code that has too many classes and too many functions, and all that 
we need is a simple interface that allows us to work with only a single class, most often, with a single method.

A façade class enables us to call only one method instead of calling to many methods. 
By doing so, it simplifies the work with the system, and allows us to have a simpler and more convenient interface.

Example1 :
A real life example can be a code that shares the newest posts in our blog with several social networks. 
Each social network has its own class, and a set of methods to share our posts.
 [EXample solution ]( https://github.com/biplobsec21/php-design-pattern/tree/main/facade-design-pattern/Example-1 )
