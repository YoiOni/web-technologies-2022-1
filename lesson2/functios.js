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
    let wordsArray=[];
    array.forEach(function(word){
        if(word.length>=5){
            let letters=word.split('');
            letters.reverse();
            let newWord= letters.join('');
            wordsArray.push(newWord)
        }
        else wordsArray.push(word)
    });
    return wordsArray.join(' ');
}