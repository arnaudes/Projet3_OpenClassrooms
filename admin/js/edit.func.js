/**
 * initialisation de tinymce ( avec le selecteur "id" du textarea, le skin custom, la hauteur, la langue fr)
 */
tinymce.init({
    selector: '#mytextarea',
    skin: 'custom',
    height:400,
    language: 'fr_FR',
    language_url: 'tinymce/js/tinymce/langs/fr_FR.js'

});

