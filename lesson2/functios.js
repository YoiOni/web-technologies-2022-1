function pickPropArray(array,property){
    let result=[];
    array.forEach(function(obj){
        if(obj.hasOwnProperty(property)){
            result.push(obj[property])
        }
    });
    return result;
}

function createCounter(){
    let count=0;
    return function(){
        count++;
        return count;
    }
}

function spinWords(string){
    let array=string.split(' ');
    let flag=false;
    array.forEach(function(word){
        if(word.length>=5){
            flag=true;
        }
    });
    if(flag){
        let returnArray=[];
        array.forEach(function(word){
            let letters=word.split('');
            letters.reverse();
            let newWord= letters.join('');
            returnArray.push(newWord);
        });
        return returnArray.join(' ');
    }
    else{
        return string;
    }
}