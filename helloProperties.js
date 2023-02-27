const element = {
    john: 12,
    brian: true,
    doe: 'hi',
    fred: false
};

const helloProperties = (obj) =>{

    let array=[];

    for(prop in obj){
        array.push(`Hello-${prop}`)
    }

    return array;
}

console.log(helloProperties(element));