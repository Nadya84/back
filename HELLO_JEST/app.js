const sentence = "Good";
// on exporte la variable que l'on doit tester
module.exports ={
    sentence

}

function isPalindrom(word){
    return true;
}
   
    // function isPalindrom(word){

        
    // }
    const forbiddenwords = ['nuls', 'nul', 'imbécile', 'imbéciles', 'idiots', 'idiot', 'débiles', 'débile'];

    function containForbiddenWords(message){
        const msg = message.split('');
        let result = [];
        for (let index = 0; index < msg.leng; index++) {
            const item = msg[index];
            if (forbiddenwords.includes(item)){
                result.push(item);
            }
        }
        //si le tableau result est >0 donc a ua moins une cellule a compléter
        if(result.length > 0){
            return true;
        }
        return false
    }
    module.exports ={
        sentence,containForbiddenWords,isPalindrom
    
    }
    