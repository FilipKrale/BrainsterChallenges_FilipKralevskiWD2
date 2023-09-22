let number = prompt(`Enter a number here: `)

if(number % 2 == 0){
    console.log(`The number ${number} is even.`)
    document.write(`The number <b>${number}</b> is even.`)
}else{
    console.log(`The number ${number} is not even.`)
    document.write(`The number <b>${number}</b> is not even.`)
}