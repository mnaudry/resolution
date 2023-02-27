
//factorial(n) = 1 * 2 * 3 * ... * n 
const factorial2 = (n) => {
    if(n == 0){
        return "";
    }

    if(n == 1) {
        return 1;
    }else {
        return n + "*" + factorial(n-1);
    }

   
}


const factorial = (n) => {

    if(n == 0 ){
        return 1;
    }

    return n * factorial(n-1);
}


 console.log(factorial(4));