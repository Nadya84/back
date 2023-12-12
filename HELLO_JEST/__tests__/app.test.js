// récupération de l'objet à tester
const app = require('../app.js')
//decrire le test palindrom
describe('Moderator', () =>{
    it('contient des mots interdits', () =>{
        expect(app.containForbiddenWords('Vous êtes des nuls')).toEqual(true);
    });
});

