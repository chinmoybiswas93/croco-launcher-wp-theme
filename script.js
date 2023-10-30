// let parentFunction = function () {
//   return function () {
//     return console.log("Hello World");
//   };
// };

// let closure = parentFunction();
// console.log("From Parent Function: ");
// parentFunction();
// console.log("From Closure Function: ");
// closure();

// var num = 2;
// function numberGenerator() {
//     // Local “free” variable that ends up within the closure
//     // var num = 1;
//     function checkNumber() {
//       console.log(num);
//     }
//     num++;
//     return checkNumber;
//   }

//   var number = numberGenerator();
//   number(); // 2
//   number(); // 2

// function sayHello() {
//   let greetings = "How are you?";

//   let say = function () {
//     console.log(hello);
//     console.log(greetings);
//   };
//   // Local variable that ends up within the closure
//   return say;
// }

// let hello = "Hello, Chinmoy!";
// let sayHelloClosure = sayHello();
// sayHelloClosure(); // ‘Hello, world!’

var x = 10;
function foo(a) {
  var b = 20;

  function bar(c) {
    var d = 30;
    return boop(x + a + b + c + d);
  }

  function boop(e) {
    return e * -1;
  }

  return bar;
}

var moar = foo(5); // Closure
/* 
  The function below executes the function bar which was returned 
  when we executed the function foo in the line above. The function bar 
  invokes boop, at which point bar gets suspended and boop gets push 
  onto the top of the call stack (see the screenshot below)
*/
moar(15);
