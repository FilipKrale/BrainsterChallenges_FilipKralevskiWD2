const number1 = 13
const number2 = 15
const number3 = 20

//Checking for the largest number

if(number1 >= number2 && number1 >= number3) {
    largest = number1
}
else if (number2 >= number1 && number2 >= number3) {
    largest = number2
}
else {
    largest = number3
}

//Checking fot the smallest number

if(number1 <= number2 && number1 <= number3){
    smallest = number1
}else if(number2 <= number1 && number2 <= number3){
    smallest = number2
}else{
    smallest = number3
}

//Checking for the prime or not prime number



    // let isPrime = true

    // for (let i = 2; i < largest; i++) {
    //     if (largest % i == 0) {
    //         isPrime = false
    //         break
    //     }
    // }

    // if (isPrime) {
    //     console.log(`${largest} is a prime number.`)
    // } else {
    //     console.log(`${largest} is a not prime number.`)
    // }


    // function isPrime(num) {

    //     if (num === 2) {
    //       return true
    //     } else if (num > 1) {
    //       for (let i = 2; i < num; i++) {
      
    //         if (num % i !== 0) {
    //           return true
    //         } else if (num === i * i) {
    //           return false
    //         } else {
    //           return false
    //         }
    //       }
    //     } else {
    //       return false;
    //     }
      
    //   }




    function isPrime(num) {

        if (num === 2) {
          return `is prime`
        } else if (num > 1) {
          for (let i = 2; i < num; i++) {
      
            if (num % i !== 0) {
              return `is prime`
            } else if (num === i * i) {
              return `is not prime`
            } else {
              return `is not prime`
            }
          }
        } else {
          return `is not prime`
        }
      
      }
console.log(`The smallest number is ${smallest} ${isPrime(smallest)}, largest number is ${largest} ${isPrime(largest)}.`)
document.write(`The smallest number is <b>${smallest} ${isPrime(smallest)}</b>, largest numbers is <b>${largest} ${isPrime(largest)}</b>.`)